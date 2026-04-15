<?php
require_once 'db-path.php'; // Make sure this path is correct relative to this file

// 1. ENABLE ERROR REPORTING
error_reporting(E_ALL);
ini_set('display_errors', 0);

// 2. INCLUDE DATABASE CONFIGURATION (PHYSICAL PATH)
require_once ADMIN_URL.'/database_config.php';

// 3. CHECK CONNECTION
if ($conn->connect_error) {
    echo "<div class='col-span-3 text-red-500 text-center'>Database Connection Failed: " . $conn->connect_error . "</div>";
    exit;
}

// 4. GET PARAMETERS
$category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$limit = 9;
$offset = ($page - 1) * $limit;

// 5. BUILD SQL QUERY
if ($category_id === 0) {
    // Show ALL active blogs
    $sql = "SELECT * FROM blogs WHERE status = 'active' ORDER BY created_at DESC";
    $count_sql = "SELECT COUNT(*) as total FROM blogs WHERE status = 'active'";
} else {
    // Show blogs for SPECIFIC category
    $sql = "SELECT b.* FROM blogs b 
            JOIN blog_category_map m ON b.id = m.blog_id 
            WHERE m.category_id = $category_id AND b.status = 'active' 
            ORDER BY b.created_at DESC";
    
    $count_sql = "SELECT COUNT(*) as total FROM blogs b 
                  JOIN blog_category_map m ON b.id = m.blog_id 
                  WHERE m.category_id = $category_id AND b.status = 'active'";
}

// 6. EXECUTE QUERY
$result = $conn->query($sql);

// 7. HANDLE SQL ERRORS
if (!$result) {
    echo "<div class='col-span-3 text-white bg-red-900 p-4 rounded'><strong>SQL Error:</strong> " . $conn->error . "</div>";
    exit;
}

// 8. OUTPUT HTML
if ($result->num_rows > 0) {
    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">';

    while ($blog = $result->fetch_assoc()) {
        $title = htmlspecialchars($blog['blog_title'] ?? 'Untitled');
        
        // Use the slug from the database. Fallback to ID if slug is empty.
        $slug = !empty($blog['slug']) ? $blog['slug'] : $blog['id'];
        
        $imageDbValue = $blog['blog_image'] ?? '';
        $imagePath = ADMIN_URL . '/' . htmlspecialchars($imageDbValue); // Browser URL

        $date = date('d M', strtotime($blog['created_at']));
        $year = date('Y', strtotime($blog['created_at']));
        
        $desc = strip_tags($blog['blog_description'] ?? '');
        if (mb_strlen($desc) > 150) {
            $desc = mb_strimwidth($desc, 0, 150, "...");
        }


        // --- SEO FRIENDLY URL ---
        $detailUrl = 'blog/' . urlencode($slug);
        
        echo '
        <a href="' . $detailUrl . '" class="blog-card block rounded-[15px] border border-[#2F2F2F]/50 bg-white/5 backdrop-blur-md overflow-hidden shadow-lg flex flex-col p-3 transition-transform duration-300 hover:scale-[1.02]">
            <div class="relative rounded-lg overflow-hidden mb-3">
                <img src="' . $imagePath . '" class="w-full h-48 object-cover rounded-lg" alt="' . $title . '">
                <div class="absolute bottom-2 right-2 bg-black/80 text-[var(--secondary-color)] text-xs px-2 py-1 rounded border border-[var(--secondary-color)] text-center">
                    <span class="block font-bold">' . $date . '</span>
                    <span class="block text-[10px]">' . $year . '</span>
                </div>
            </div>
            <div class="flex flex-col flex-1 p-2">
                <h3 class="text-lg font-bold text-white mb-2 line-clamp-2">' . $title . '</h3>
                <div class="mt-auto self-end">
                    <div class="w-8 h-8 flex items-center justify-center rounded-full border border-[var(--secondary-color)] hover:bg-[var(--secondary-color)] group blog-arrow-btn" 
                         data-id="' . $blog['id'] . '" 
                         data-slug="' . $slug . '">
                        <span class="material-symbols-outlined text-[var(--secondary-color)] group-hover:text-black text-sm">arrow_forward</span>
                    </div>
                </div>
            </div>
        </a>';
    }
    echo '</div>';

    // Pagination
    $count_result = $conn->query($count_sql);
    $total_row = $count_result->fetch_assoc();
    $total_pages = ceil($total_row['total'] / $limit);

    if ($total_pages > 1) {
        echo '<div class="flex justify-center mt-8 gap-2">';
        for ($i = 1; $i <= $total_pages; $i++) {
            $active = ($i == $page) ? 'bg-[var(--secondary-color)] text-black' : 'text-white border border-[var(--secondary-color)] hover:bg-white/10';
            echo "<button class='pagination-btn px-4 py-2 rounded transition $active' data-page='$i'>$i</button>";
        }
        echo '</div>';
    }

} else {
    echo "<div class='text-white text-center py-10 w-full'><h3 class='text-xl'>No blogs found</h3></div>";
}
?>
