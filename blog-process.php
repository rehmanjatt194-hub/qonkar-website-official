<?php
require_once 'db-path.php'; // Make sure this path is correct relative to this file

error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once ADMIN_URL.'/database_config.php';

if ($conn->connect_error) {
    echo "<div class='col-span-3 text-red-500 text-center'>Database Connection Failed: " . $conn->connect_error . "</div>";
    exit;
}

$category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$limit = ($page == 1) ? 10 : 9;
$offset = ($page == 1) ? 0 : 10 + ($page - 2) * 9;

if ($category_id === 0) {
    $sql = "SELECT b.*, (SELECT c.blog_category_title FROM blog_category_map m JOIN blogs_category c ON m.category_id = c.id WHERE m.blog_id = b.id LIMIT 1) as blog_category_title 
            FROM blogs b 
            WHERE b.status = 'active' 
            ORDER BY b.created_at DESC 
            LIMIT $limit OFFSET $offset";
    $count_sql = "SELECT COUNT(*) as total FROM blogs WHERE status = 'active'";
} else {
    // If filtering by specific category
    $sql = "SELECT b.*, c.blog_category_title 
            FROM blogs b 
            JOIN blog_category_map m ON b.id = m.blog_id 
            JOIN blogs_category c ON m.category_id = c.id
            WHERE m.category_id = $category_id AND b.status = 'active' 
            ORDER BY b.created_at DESC 
            LIMIT $limit OFFSET $offset";
            
    $count_sql = "SELECT COUNT(*) as total FROM blogs b JOIN blog_category_map m ON b.id = m.blog_id WHERE m.category_id = $category_id AND b.status = 'active'";
}

$result = $conn->query($sql);

if (!$result) {
    echo "<div class='col-span-3 text-white bg-red-900 p-4 rounded'><strong>SQL Error:</strong> " . $conn->error . "</div>";
    exit;
}

if ($result->num_rows > 0) {
    $index = 0;
    $has_grid_items = false;

    while ($blog = $result->fetch_assoc()) {
        $title = htmlspecialchars($blog['blog_title'] ?? 'Untitled');
        $slug = !empty($blog['slug']) ? $blog['slug'] : $blog['id'];
        $imageDbValue = $blog['blog_image'] ?? '';
        $imagePath = ADMIN_URL . '/' . htmlspecialchars($imageDbValue);
        
        $date = date('M d', strtotime($blog['created_at']));
        $year = date('Y', strtotime($blog['created_at']));
        $categoryName = htmlspecialchars($blog['blog_category_title'] ?? 'General');
        
        $descText = strip_tags($blog['blog_description'] ?? '');
        $wordCount = str_word_count($descText);
        $readTime = max(1, ceil($wordCount / 200)) . ' min read';

        if (strlen($descText) > 150) {
            $descText = substr($descText, 0, 150) . "...";
        }
        $detailUrl = 'blog/' . urlencode($slug);
        
        // Render Featured Post (only on page 1, index 0)
        if ($page == 1 && $index == 0) {
            echo '
            <a href="' . $detailUrl . '" class="block w-full rounded-[24px] border border-white/5 bg-[#08121a] overflow-hidden shadow-2xl flex flex-col lg:flex-row transition-transform duration-500 hover:scale-[1.01] mb-16 group">
                <div class="w-full lg:w-[55%] relative overflow-hidden flex items-center justify-center bg-[#050e14] p-10">
                    <div class="absolute w-full h-full bg-[#01a0d8] opacity-10 blur-[100px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <img src="' . $imagePath . '" class="w-full h-auto max-h-[400px] object-cover rounded-xl shadow-[0_0_50px_rgba(1,160,216,0.15)] relative z-10 transition-transform duration-700 group-hover:scale-105" alt="' . $title . '">
                </div>
                <div class="w-full lg:w-[45%] p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-3 py-1 bg-white/5 border border-white/10 text-[#01a0d8] text-xs font-semibold uppercase tracking-wider rounded-md">Featured</span>
                        <span class="text-white/50 text-sm">' . $date . ' &bull; ' . $readTime . '</span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6 leading-tight group-hover:text-[#01a0d8] transition-colors duration-300">' . $title . '</h2>
                    <p class="text-white/70 text-base lg:text-lg mb-8 leading-relaxed">' . $descText . '</p>
                    <div class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-transparent border border-[#01a0d8] text-[#01a0d8] font-medium w-fit hover:bg-[#01a0d8] hover:text-[#000d16] transition-all duration-300 shadow-[0_0_15px_rgba(1,160,216,0.1)] hover:shadow-[0_0_25px_rgba(1,160,216,0.4)] group">
                        Read Article <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>';
            
            // Start the grid container for remaining items
            if ($result->num_rows > 1) {
                echo '<div class="w-full flex items-center mb-8 gap-4">
                        <div class="w-1 h-6 bg-[#01a0d8] rounded-full"></div>
                        <h3 class="text-2xl font-bold text-white">Latest Insights</h3>
                      </div>';
                echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">';
                $has_grid_items = true;
            }
        } else {
            // Render regular Grid Card
            if ($index == 0 && $page > 1) {
                echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">';
                $has_grid_items = true;
            }
            
            echo '
            <a href="' . $detailUrl . '" class="blog-card block rounded-[20px] border border-white/5 bg-[#08121a] overflow-hidden flex flex-col transition-all duration-300 hover:scale-[1.02] hover:border-[#01a0d8]/30 group hover:shadow-[0_10px_40px_rgba(0,0,0,0.5)]">
                <div class="relative w-full aspect-video overflow-hidden">
                    <img src="' . $imagePath . '" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="' . $title . '">
                    <div class="absolute top-4 left-4 bg-black/80 backdrop-blur-md text-[#01a0d8] text-xs px-3 py-1.5 rounded-md font-semibold tracking-wider uppercase border border-white/10 shadow-lg">
                        ' . $categoryName . '
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-white/50 text-sm mb-3 font-medium">
                        <span>' . $date . '</span>
                        <span>&bull;</span>
                        <span>' . $readTime . '</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 line-clamp-2 group-hover:text-[#01a0d8] transition-colors">' . $title . '</h3>
                    <p class="text-white/60 text-sm leading-relaxed line-clamp-3 mb-4">' . $descText . '</p>
                </div>
            </a>';
        }
        $index++;
    }
    
    if ($has_grid_items) {
        echo '</div>'; // Close grid
    }

    // Pagination Button (Load More)
    $count_result = $conn->query($count_sql);
    $total_row = $count_result->fetch_assoc();
    $total_items = (int)$total_row['total'];
    if ($total_items <= 10) {
        $total_pages = 1;
    } else {
        $total_pages = 1 + ceil(($total_items - 10) / 9);
    }

    if ($page < $total_pages) {
        $next_page = $page + 1;
        echo '<div class="flex justify-center mt-12 mb-8 load-more-container w-full">
                <button class="load-more-btn btn-dark-theme" data-next="' . $next_page . '">
                    Load More Articles
                </button>
              </div>';
    }

} else {
    if ($page == 1) {
        echo "<div class='text-white/50 text-center py-20 w-full'><h3 class='text-xl'>No articles found in this category.</h3></div>";
    }
}
?>
