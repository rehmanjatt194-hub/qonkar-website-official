<?php
session_start();
require_once("database_config.php");
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?error=Please Login First");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Blogs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        :root {
            --primary-color: #3F89C9;
            --secondary-color: #2FADC3;
            --tertiary-color: #85D55C;
            --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color), var(--tertiary-color));
            --body-bg: #080808;
        }
        body { background-color: var(--body-bg); }
        .sidebar { transition: all 0.3s; }
        #blog_table_wrapper { color: white !important; padding: 20px; background: #111; border-radius: 12px; }
        table.dataTable tbody tr { background-color: #111 !important; color: white !important; }
        .dataTables_filter input { color: white; background: #222; border: 1px solid #444; border-radius: 5px; padding: 5px; }
    </style>

    <script>
        // Status toggle
        document.addEventListener("click", function(e) {
            if (e.target && e.target.classList.contains("status-btn")) {
                let blogId = e.target.getAttribute("data-id");
                let currentStatus = e.target.getAttribute("data-status");
                let newStatus = currentStatus === "active" ? "inactive" : "active";

                fetch("process.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "action=toggle_blog_status&id=" + blogId + "&status=" + newStatus
                })
                .then(res => res.json())
                .then(data => data.success ? location.reload() : alert("❌ Error updating status"));
            }
        });

        // Delete Blog
        document.addEventListener("click", function(e) {
            if (e.target && e.target.classList.contains("delete-btn")) {
                let blogId = e.target.getAttribute("data-id");
                if (confirm("Are you sure you want to delete this blog?")) {
                    fetch("process.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/x-www-form-urlencoded" },
                        body: "action=delete_blog&id=" + blogId
                    })
                    .then(res => res.json())
                    .then(data => data.success ? location.reload() : alert("❌ " + data.message));
                }
            }
        });
    </script>
</head>

<body>
 <aside id="sidebar" class="sidebar w-64 h-screen fixed bg-[#202020] text-white flex flex-col transition-all border-r border-[#595959]">
        <!-- Logo -->
        <div class="flex items-center justify-center h-20 border-b border-[#595959] px-4">
            <img id="sidebarLogo" src="../images/qonkar_logo.png" alt="Logo" class="w-32 transition-all duration-300">
        </div>
        <!-- Toggle Button (Middle Arrow) -->
        <button id="sidebarToggle"
            class="absolute top-1/2 -right-3 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2 shadow-lg focus:outline-none transition">
            <i data-feather="chevron-left" class="w-5 h-5"></i>
        </button>
        <!-- Menu -->
        <nav class="mt-6 flex-1 overflow-y-auto">
            <ul class="space-y-2 px-2">
                <li>
                    <a href="dashboard.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition <?php if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') echo 'bg-[#595959]'; ?>">
                        <i data-feather="home" class="w-5 h-5"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="users.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition <?php if (basename($_SERVER['PHP_SELF']) == 'users.php') echo 'bg-[#595959]'; ?>">
                        <i data-feather="users" class="w-5 h-5"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="messages.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition <?php if (basename($_SERVER['PHP_SELF']) == 'messages.php') echo 'bg-[#595959]'; ?>">
                        <i data-feather="message-circle" class="w-5 h-5"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="jobs.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition <?php if (basename($_SERVER['PHP_SELF']) == 'jobs.php') echo 'bg-[#595959]'; ?>">
                        <i data-feather="briefcase" class="w-5 h-5"></i>
                        <span>Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="applications.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition <?php if (basename($_SERVER['PHP_SELF']) == 'applications.php') echo 'bg-[#595959]'; ?>">
                        <i data-feather="file-text" class="w-5 h-5"></i>
                        <span>Job Applications</span>
                    </a>
                </li>
                <li>
                    <a href="case-studies.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition <?php if (basename($_SERVER['PHP_SELF']) == 'case-studies.php') echo 'bg-[#595959]'; ?>">
                        <i data-feather="folder" class="w-5 h-5"></i>
                        <span>Case Studies</span>
                    </a>
                </li>
                <li>
                    <a href="blogs.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition <?php if (basename($_SERVER['PHP_SELF']) == 'blogs.php') echo 'bg-[#595959]'; ?>">
                        <i data-feather="book" class="w-5 h-5"></i>
                        <span>Blogs</span>
                    </a>
                </li>
                <li>
                    <a href="categories.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition <?php if (basename($_SERVER['PHP_SELF']) == 'categories.php') echo 'bg-[#595959]'; ?>">
                        <i data-feather="layers" class="w-5 h-5"></i>
                        <span>Blog Categories</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php"
                        class="flex items-center gap-3 p-3 rounded hover:bg-[#595959] transition text-red-500">
                        <i data-feather="log-out" class="w-5 h-5"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <main id="mainContent" class="flex-1 text-white ml-64 min-h-screen">
        <div class="flex items-center justify-between h-20 border-b border-[#595959] px-8">
            <h1 class="text-2xl">Blogs</h1>
            <div class="flex items-center gap-3">
                <?php
                $user_id = $_SESSION['user_id'];
                $stmt = $conn->prepare("SELECT username, picture FROM users WHERE id = ?");
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $user = $stmt->get_result()->fetch_assoc();
                $picture = !empty($user['picture']) ? $user['picture'] : '../images/default_avatar.png';
                ?>
                <span class="font-semibold"><?php echo htmlspecialchars($user['username']); ?></span>
                <img src="<?php echo $picture; ?>" class="w-10 h-10 rounded-full border-2 border-[var(--secondary-color)]">
            </div>
        </div>

        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Blog Management</h2>
                <button onclick="openBlogModal()" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded text-white">+ Add New Blog</button>
            </div>

            <div class="overflow-x-auto">
                <table id="blog_table" class="display cell-border stripe hover w-full text-left">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM blogs ORDER BY id DESC");
                        while ($row = $result->fetch_assoc()) {
                            $imgSrc = !empty($row['blog_image']) ? $row['blog_image'] : '../images/default_blog.png';
                            $statusClass = $row['status'] === 'active' ? 'bg-green-600' : 'bg-red-600';
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>" . htmlspecialchars($row['blog_title']) . "</td>
                                <td><img src='{$imgSrc}' class='w-16 h-10 object-cover rounded'></td>
                                <td><button class='status-btn px-2 py-1 rounded text-xs {$statusClass}' data-id='{$row['id']}' data-status='{$row['status']}'>" . ucfirst($row['status']) . "</button></td>
                                <td>{$row['created_at']}</td>
                                <td class='flex gap-2'>
                                    <a href='blogs-edit.php?id={$row['id']}' class='bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-sm text-white'>Edit</a>
                                    <button class='delete-btn bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-sm text-white' data-id='{$row['id']}'>Delete</button>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

<div id="blogModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div id="blogModalContent" class="bg-[#202020] p-8 rounded-lg shadow-lg w-[90%] max-w-[1100px] h-[90%] overflow-y-auto text-white">
        <h2 class="text-2xl font-bold mb-6 text-center border-b border-gray-700 pb-4">Add New Blog</h2>
        
        <form id="blogForm" method="POST" action="process.php" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div>
                <label class="block mb-1">Blog Title</label>
                <input type="text" id="blog_title" name="blog_title" required oninput="generateSlug(this.value)" 
                    class="w-full p-2 rounded bg-gray-800 border border-gray-600 focus:border-[var(--secondary-color)] outline-none">
            </div>
            <div>
                <label class="block mb-1">URL Slug (Professional Link)</label>
                <input type="text" id="blog_slug" name="slug" required 
                    class="w-full p-2 rounded bg-gray-900 border border-gray-700 text-gray-400 outline-none">
                <small class="text-gray-500 text-xs">qonkar.com/blog/<strong>your-slug</strong></small>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 font-semibold text-lg text-[var(--secondary-color)]">Blog Content / Description</label>
                <textarea name="blog_description" id="blog_description_editor" 
                    class="w-full h-96 p-4 rounded bg-gray-800 border border-gray-600 focus:border-[var(--secondary-color)] outline-none resize-y"></textarea>
            </div>

            <div>
                <label class="block mb-1">Meta Description (SEO)</label>
                <input type="text" name="meta_description" 
                    class="w-full p-2 rounded bg-gray-800 border border-gray-600 focus:border-[var(--secondary-color)] outline-none">
            </div>
            <div>
                <label class="block mb-1">Featured Image</label>
                <input type="file" name="blog_image" accept="image/*" required 
                    class="w-full p-1.5 rounded bg-gray-800 border border-gray-600 cursor-pointer">
            </div>

            <div>
                <label class="block mb-1">Categories (Hold Ctrl/Cmd to select multiple)</label>
                <select name="category_ids[]" multiple required 
                    class="w-full p-2 rounded bg-gray-800 border border-gray-600 h-32 focus:border-[var(--secondary-color)] outline-none">
                    <?php
                    $cats = $conn->query("SELECT id, blog_category_title FROM blogs_category WHERE status = 'active'");
                    while ($c = $cats->fetch_assoc()) {
                        echo "<option value='{$c['id']}'>" . htmlspecialchars($c['blog_category_title']) . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block mb-1">Status</label>
                    <select name="status" class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1">Allow Comments</label>
                    <select name="is_comment_allowed" class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>

            <input type="hidden" name="action" value="new_blog">
            <div class="col-span-2 flex justify-end gap-4 mt-6 pt-6 border-t border-gray-700">
                <button type="button" onclick="closeBlogModal()" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 rounded transition">Cancel</button>
                <button type="submit" class="px-8 py-2 bg-green-600 hover:bg-green-700 rounded font-bold transition shadow-lg">Publish Blog</button>
            </div>
        </form>
    </div>
</div>
</main>

<script src="https://cdn.tiny.cloud/1/betkqvu1btuzlsz0q2cd5l1xwj4mgrj85fameut2juha0j4n/tinymce/6/tinymce.min.js"></script>
<script>
    $(document).ready(function() {
        if ( ! $.fn.DataTable.isDataTable( '#blog_table' ) ) {
            $('#blog_table').DataTable({ 
                "pageLength": 10, 
                "order": [[0, "desc"]] 
            });
        }
        feather.replace();
    });

    function generateSlug(text) {
        const slug = text.toLowerCase()
            .replace(/[^\w ]+/g, '')     // Remove special characters
            .replace(/ +/g, '-');        // Replace spaces with dashes
        document.getElementById('blog_slug').value = slug;
    }

    function openBlogModal() {
        document.getElementById("blogModal").classList.remove("hidden");
        document.getElementById("blogModal").classList.add("flex");
        
        tinymce.init({ 
            selector: 'textarea[name="blog_description"]', 
            height: 400,
            menubar: true,
            plugins: ['advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'],
            toolbar: 'undo redo | blocks | bold italic underline | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | link image | removeformat | help',
            
            // 1. Load the Google Font into the TinyMCE iframe
            content_css: 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap',
            
            // 2. Set the default font-family to Cormorant Garamond
            content_style: `
                @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap');
                body { 
                    font-family: 'Cormorant Garamond', serif; 
                    font-size: 19px; 
                    line-height: 1.6; 
                    color: #333; 
                }
            `,
            
            link_default_target: '_blank',
            convert_urls: false,
            setup: function (editor) {
                editor.on('change', function () {
                    tinymce.triggerSave(); 
                });
            }
        });
    }

    function closeBlogModal() {
        document.getElementById("blogModal").classList.add("hidden");
        tinymce.remove('textarea[name="blog_description"]');
    }
</script>
</body>
</html>