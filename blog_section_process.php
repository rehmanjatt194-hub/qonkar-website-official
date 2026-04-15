<?php
require_once 'db-path.php';
require_once ADMIN_URL . "/database_config.php";

$current_page = basename($_SERVER['PHP_SELF']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category_id'])) {
    $category_id = intval($_POST['category_id']);

    // ✅ If category_id == 0 → Fetch latest blogs (Unlimited for homepage feed)
    if ($category_id === 0) {
        $sql = "
            SELECT * 
            FROM blogs 
            WHERE status = 'active'
            ORDER BY created_at DESC
        ";
    } else {
        // ✅ Otherwise → Fetch blogs by specific category
        $sql = "
            SELECT b.*
            FROM blogs b
            JOIN blog_category_map m ON b.id = m.blog_id
            WHERE m.category_id = $category_id AND b.status = 'active'
            ORDER BY b.created_at DESC
        ";
    }

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $blogs = $result->fetch_all(MYSQLI_ASSOC);

        $html = '';
        $html .= '<div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full">';

        // 1️⃣ Featured Card column
        if (isset($blogs[0])) {
            $first = $blogs[0];
            $date = date('d M', strtotime($first['created_at']));
            $year = date('Y', strtotime($first['created_at']));
            $rawDesc = strip_tags($first['blog_description'] ?? '');
            if (mb_strlen($rawDesc) > 150) {
                $shortDesc = mb_strimwidth($rawDesc, 0, 150, "...");
            } else {
                $shortDesc = $rawDesc;
            }


            $html .= '
            <div class="col-span-1 flex flex-col">
                <div class="h-full rounded-[15px] border border-[#2F2F2F]/50 bg-white/5 backdrop-blur-md overflow-hidden shadow-lg flex flex-col p-3">
                    <div class="relative rounded-lg overflow-hidden h-64">
                        <img src="' . ADMIN_URL . '/' . htmlspecialchars($first['blog_image']) . '" alt="' . htmlspecialchars($first['blog_title']) . '" class="w-full h-full object-cover rounded-lg">
                        <div class="absolute bottom-2 right-2 bg-black/90 text-[var(--secondary-color)] text-xs px-2 py-1 rounded-md border border-[var(--secondary-color)] text-center">
                            <span>' . $date . '</span><br><span>' . $year . '</span>
                        </div>
                    </div>
                    <div class="pt-4 flex flex-col flex-1">
                        <h3 class="text-xl font-bold text-white mb-2">' . htmlspecialchars($first['blog_title']) . '</h3>
                        <a href="blog-details.php?id=' . $first['id'] . '" class="mt-auto self-end">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-[var(--secondary-color)] hover:bg-[var(--secondary-color)] group transition-all">
                                <span class="material-symbols-outlined text-[var(--secondary-color)] group-hover:text-black">arrow_forward</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>';
        }

        // 2️⃣ Remaining cards dynamically
        $html .= '<div class="col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">';
        for ($i = 1; $i < count($blogs); $i++) {
            $blog = $blogs[$i];
            $date = date('d M', strtotime($blog['created_at']));
            $year = date('Y', strtotime($blog['created_at']));
            $rawDesc = strip_tags($blog['blog_description'] ?? '');
            if (mb_strlen($rawDesc) > 150) {
                $shortDesc = mb_strimwidth($rawDesc, 0, 150, "...");
            } else {
                $shortDesc = $rawDesc;
            }


            $html .= '
            <div class="rounded-[15px] border border-[#2F2F2F]/50 bg-white/5 backdrop-blur-md overflow-hidden shadow-lg p-3 flex flex-col">
                <div class="relative rounded-lg overflow-hidden h-40 mb-3">
                    <img src="' . ADMIN_URL . '/' . htmlspecialchars($blog['blog_image']) . '" alt="' . htmlspecialchars($blog['blog_title']) . '" class="w-full h-full object-cover">
                </div>
                <div class="flex flex-col flex-1">
                    <h3 class="text-lg font-bold text-white mb-1">' . htmlspecialchars($blog['blog_title']) . '</h3>
                    <a href="blog-details.php?id=' . $blog['id'] . '" class="mt-auto self-end">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full border border-[var(--secondary-color)] hover:bg-[var(--secondary-color)] group transition-all">
                            <span class="material-symbols-outlined text-[var(--secondary-color)] group-hover:text-black">arrow_forward</span>
                        </div>
                    </a>
                </div>
            </div>';
        }
        $html .= '</div></div>';

        echo $html;
    } else {
        echo "<p class='text-white text-center py-10'>No blogs found.</p>";
    }
    $conn->close();
}
