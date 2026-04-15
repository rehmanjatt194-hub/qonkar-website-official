<?php
session_start();
require_once("database_config.php");
if (!isset($_SESSION['user_id'])) { header("Location: index.php"); exit(); }

$id = $_GET['id'] ?? null;
if (!$id) { header("Location: blogs.php"); exit(); }

$stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$blog = $stmt->get_result()->fetch_assoc();

if (!$blog) { die("Blog not found."); }

// Get currently assigned categories
$cat_stmt = $conn->prepare("SELECT category_id FROM blog_category_map WHERE blog_id = ?");
$cat_stmt->bind_param("i", $id);
$cat_stmt->execute();
$assigned_cats = [];
$cat_res = $cat_stmt->get_result();
while($c = $cat_res->fetch_assoc()) { $assigned_cats[] = $c['category_id']; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog - <?php echo htmlspecialchars($blog['blog_title']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tiny.cloud/1/betkqvu1btuzlsz0q2cd5l1xwj4mgrj85fameut2juha0j4n/tinymce/6/tinymce.min.js"></script>
</head>
<body class="bg-[#080808] text-white p-10">
    <div class="max-w-6xl mx-auto bg-[#202020] p-8 rounded-lg shadow-xl border border-[#333]">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold">Edit Blog</h2>
            <a href="blogs.php" class="text-gray-400 hover:text-white flex items-center gap-2">
                <span>&larr; Back to List</span>
            </a>
        </div>

<form action="process.php" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-6">
    <input type="hidden" name="id" value="<?php echo $blog['id']; ?>">
    <input type="hidden" name="action" value="update_blog">

    <div>
        <label class="block mb-2 font-medium">Blog Title</label>
        <input type="text" id="blog_title" name="blog_title" 
               value="<?php echo htmlspecialchars($blog['blog_title']); ?>" 
               oninput="generateSlug(this.value)"
               required class="w-full p-3 rounded bg-gray-900 border border-gray-700 focus:border-blue-500 outline-none transition">
    </div>

    <div>
        <label class="block mb-2 font-medium">URL Slug (Editable)</label>
        <input type="text" id="blog_slug" name="slug" 
               value="<?php echo htmlspecialchars($blog['slug'] ?? ''); ?>" 
               required class="w-full p-3 rounded bg-gray-900 border border-gray-700 text-gray-400 focus:border-blue-500 outline-none transition">
        <small class="text-gray-500">Live Link: qonkar.com/blog/<strong><?php echo $blog['slug'] ?? 'slug'; ?></strong></small>
    </div>

    <div class="lg:col-span-2">
        <label class="block mb-2 font-medium text-blue-400">Blog Content / Description</label>
        <textarea name="blog_description" class="w-full h-96 p-4 rounded bg-gray-900 border border-gray-700 focus:border-blue-500 outline-none transition resize-y"><?php echo $blog['blog_description']; ?></textarea>
    </div>

    <div class="space-y-6">
        <div>
            <label class="block mb-2 font-medium">Meta Description (SEO)</label>
            <textarea name="meta_description" rows="4" class="w-full p-3 rounded bg-gray-900 border border-gray-700 focus:border-blue-500 outline-none transition"><?php echo htmlspecialchars($blog['meta_description']); ?></textarea>
        </div>

        <div>
            <label class="block mb-2 font-medium">Featured Image</label>
            <div class="mb-4 flex items-center gap-4">
                <div class="w-1/3">
                    <p class="text-xs text-gray-400 mb-2">Current Image:</p>
                    <img src="<?php echo !empty($blog['blog_image']) ? $blog['blog_image'] : '../images/default_blog.png'; ?>" 
                         class="w-full h-24 object-cover rounded border border-gray-700">
                </div>
                <div class="w-2/3">
                    <input type="file" name="blog_image" accept="image/*" class="w-full p-2 rounded bg-gray-900 border border-gray-700 text-sm">
                    <p class="text-xs text-gray-500 mt-1">Leave empty to keep current image.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="space-y-6">
        <div>
            <label class="block mb-2 font-medium">Categories</label>
            <select name="category_ids[]" multiple required class="w-full p-3 rounded bg-gray-900 border border-gray-700 h-40 focus:border-blue-500">
                <?php
                $cats = $conn->query("SELECT id, blog_category_title FROM blogs_category WHERE status = 'active'");
                while ($c = $cats->fetch_assoc()) {
                    $selected = in_array($c['id'], $assigned_cats) ? 'selected' : '';
                    echo "<option value='{$c['id']}' $selected>" . htmlspecialchars($c['blog_category_title']) . "</option>";
                }
                ?>
            </select>
            <p class="text-xs text-gray-500 mt-1">Hold Ctrl (Cmd) to select multiple categories.</p>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block mb-2 font-medium">Status</label>
                <select name="status" class="w-full p-3 rounded bg-gray-900 border border-gray-700 focus:border-blue-500">
                    <option value="active" <?php echo $blog['status'] == 'active' ? 'selected' : ''; ?>>Active</option>
                    <option value="inactive" <?php echo $blog['status'] == 'inactive' ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>
            <div>
                <label class="block mb-2 font-medium">Allow Comments</label>
                <select name="is_comment_allowed" class="w-full p-3 rounded bg-gray-900 border border-gray-700 focus:border-blue-500">
                    <option value="1" <?php echo $blog['is_comment_allowed'] == 1 ? 'selected' : ''; ?>>Yes</option>
                    <option value="0" <?php echo $blog['is_comment_allowed'] == 0 ? 'selected' : ''; ?>>No</option>
                </select>
            </div>
        </div>
    </div>

    <div class="lg:col-span-2 pt-6 border-t border-gray-700 flex justify-end gap-4">
        <a href="blogs.php" class="px-8 py-3 bg-gray-700 hover:bg-gray-600 rounded font-medium transition">Cancel</a>
        <button type="submit" class="px-12 py-3 bg-blue-600 hover:bg-blue-700 rounded font-bold shadow-lg transition">Update Blog Posting</button>
    </div>
</form>    </div>

<script>
  function generateSlug(text) {
    const slug = text.toLowerCase()
        .replace(/[^\w ]+/g, '')     // Remove special characters
        .replace(/ +/g, '-');        // Replace spaces with dashes
    document.getElementById('blog_slug').value = slug;
}

tinymce.init({
    selector: 'textarea[name="blog_description"]',
    height: 500,
    menubar: true,
    plugins: ['advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'],
    toolbar: 'undo redo | blocks fontfamily | bold italic underline | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | link image | removeformat | help',
    
    // 1. Load the Google Font stylesheet into the editor iframe
    content_css: 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap',
    
    // 2. Set the default font for the editor body
    content_style: `
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap');
        body { 
            font-family: 'Cormorant Garamond', serif; 
            font-size: 19px; 
            line-height: 1.6; 
            color: #333; 
        }
    `,

    // 3. Optional: Add it to the font selection dropdown
    font_family_formats: 'Cormorant Garamond=Cormorant Garamond, serif; Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Times New Roman=times new roman,times',

    link_default_target: '_blank',
    convert_urls: false,
    setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });
    }
});
</script>   
</body>
</html>