<?php
require_once("database_config.php");
session_start();
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
    <title>Jobs Management - Dashboard</title>
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
        
        /* DataTables Custom Dark Styling */
        .dataTables_wrapper { color: white !important; }
        table.dataTable { background-color: #111 !important; color: white !important; border-color: #595959 !important; }
        .dataTables_filter input { background-color: #222; border: 1px solid #555; color: white; padding: 5px; border-radius: 5px; }
        .dataTables_length select { background-color: #222; color: white; }
    </style>
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
    <main id="mainContent" class="flex-1 ml-64 text-white relative transition-all duration-300">
        <div class="flex items-center justify-between h-20 border-b border-[#595959] px-8">
            <h1 class="text-2xl">Jobs Management</h1>
            <div class="flex items-center gap-3">
                <?php
                $user_id = $_SESSION['user_id'];
                $stmt = $conn->prepare("SELECT username, picture FROM users WHERE id = ?");
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $user = $stmt->get_result()->fetch_assoc();
                $picture = !empty($user['picture']) ? $user['picture'] : '../images/default_avatar.png';
                ?>
                <span class="font-semibold text-lg"><?php echo htmlspecialchars($user['username']); ?></span>
                <img src="<?php echo $picture; ?>" class="w-12 h-12 rounded-full object-cover border-2 border-[var(--secondary-color)]">
            </div>
        </div>

        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Manage Postings</h2>
                <button onclick="openJobModal()" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded text-white font-bold">+ Add New Job</button>
            </div>

            <div class="overflow-x-auto">
                <table id="jobs_table" class="display cell-border stripe hover w-full">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Job Title</th>
                            <th>Slug</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM jobs ORDER BY job_id DESC");
                        while ($row = $result->fetch_assoc()) {
                            $statusClass = $row['job_status'] === 'open' ? 'bg-green-600' : 'bg-red-600';
                            $statusText = ucfirst($row['job_status']);
                            
                            echo "<tr>
                                <td>{$row['job_id']}</td>
                                <td>" . htmlspecialchars($row['job_title']) . "</td>
                                <td class='text-gray-400 text-xs'>" . htmlspecialchars($row['slug']) . "</td>
                                <td>" . htmlspecialchars($row['job_type']) . "</td>
                                <td>" . htmlspecialchars($row['location']) . "</td>
                                <td>
                                    <button class='status-btn px-3 py-1 rounded text-white text-xs $statusClass' 
                                            data-id='{$row['job_id']}' data-status='{$row['job_status']}'>$statusText</button>
                                </td>
                                <td>
                                    <div class='flex gap-2'>
                                        <button class='edit-btn bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs' 
                                            data-id='{$row['job_id']}'
                                            data-title=\"" . htmlspecialchars($row['job_title']) . "\"
                                            data-slug=\"" . htmlspecialchars($row['slug']) . "\"
                                            data-type=\"" . htmlspecialchars($row['job_type']) . "\"
                                            data-location=\"" . htmlspecialchars($row['location']) . "\"
                                            data-description=\"" . htmlspecialchars($row['job_description']) . "\"
                                            data-status='{$row['job_status']}'>Edit</button>
                                        
                                        <button class='delete-btn bg-red-600 hover:bg-red-800 text-white px-3 py-1 rounded text-xs' 
                                            data-id='{$row['job_id']}'>Delete</button>
                                    </div>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div id="jobModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
        <div id="jobModalContent" class="bg-[#202020] p-8 rounded-lg shadow-lg w-[90%] max-w-4xl text-white transform transition-all scale-95 opacity-0">
            <h2 class="text-2xl font-bold mb-6 text-center">Job Details</h2>
            <form id="jobForm" method="POST" action="process.php" class="grid grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div>
                        <label class="block mb-1">Job Title</label>
                        <input type="text" name="job_title" id="job_title_field" required class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                    </div>
                    <div>
                        <label class="block mb-1 text-blue-400">Slug (URL Path)</label>
                        <input type="text" name="slug" id="slug_field" required class="w-full p-2 rounded bg-gray-800 border border-blue-900 focus:border-blue-400 outline-none">
                    </div>
                    <div>
                        <label class="block mb-1">Job Type</label>
                        <input type="text" name="job_type" required class="w-full p-2 rounded bg-gray-800 border border-gray-600" placeholder="Remote, Full-time...">
                    </div>
                    <div>
                        <label class="block mb-1">Location</label>
                        <input type="text" name="location" required class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                    </div>
                    <div>
                        <label class="block mb-1">Status</label>
                        <select name="job_status" class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                            <option value="open">Open</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block mb-1">Description</label>
                    <textarea id="job_description" name="job_description" rows="10" class="w-full p-2 rounded bg-gray-800 border border-gray-600"></textarea>
                </div>
                <input type="hidden" name="job_id" id="job_id">
                <input type="hidden" name="action" id="form_action" value="new_job">
                <div class="col-span-2 flex justify-end gap-4 mt-4">
                    <button type="button" onclick="closeJobModal()" class="px-6 py-2 bg-gray-600 rounded">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-green-600 rounded">Save Job</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/ryvk1usfyqderw2txs0dou9amtl85uai8kcrcsdrksjhv432/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>    
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            $('#jobs_table').DataTable({ "order": [[0, "desc"]] });
            tinymce.init({ selector: 'textarea#job_description', menubar: false });
            feather.replace();

            // Slug Auto-Generator Logic
            const titleInput = document.getElementById('job_title_field');
            const slugInput = document.getElementById('slug_field');

            titleInput.addEventListener('input', function() {
                if (document.getElementById("form_action").value === "new_job") {
                    let text = this.value.toLowerCase()
                        .trim()
                        .replace(/[^\w\s-]/g, '')
                        .replace(/[\s_-]+/g, '-')
                        .replace(/^-+|-+$/g, '');
                    slugInput.value = text;
                }
            });

            // Handle Modal Actions
            document.addEventListener("click", function(e) {
                // Delete
                if (e.target && e.target.classList.contains("delete-btn")) {
                    const id = e.target.getAttribute("data-id");
                    if (confirm("Are you sure?")) {
                        $.post("process.php", { action: "delete_job", id: id }, (res) => {
                            let data = JSON.parse(res);
                            if(data.success) location.reload();
                        });
                    }
                }

                // Edit
                if (e.target && e.target.classList.contains("edit-btn")) {
                    const btn = e.target;
                    document.getElementById("job_id").value = btn.getAttribute("data-id");
                    document.getElementsByName("job_title")[0].value = btn.getAttribute("data-title");
                    document.getElementsByName("slug")[0].value = btn.getAttribute("data-slug");
                    document.getElementsByName("job_type")[0].value = btn.getAttribute("data-type");
                    document.getElementsByName("location")[0].value = btn.getAttribute("data-location");
                    document.getElementsByName("job_status")[0].value = btn.getAttribute("data-status");
                    document.getElementById("form_action").value = "update_job";
                    tinymce.get("job_description").setContent(btn.getAttribute("data-description"));
                    openJobModal();
                }

                // Status Toggle
                if (e.target && e.target.classList.contains("status-btn")) {
                    let id = e.target.getAttribute("data-id");
                    let status = e.target.getAttribute("data-status") === "open" ? "closed" : "open";
                    $.post("process.php", { action: "toggle_job_status", id: id, status: status }, (res) => {
                         location.reload();
                    });
                }
            });
        });

        function openJobModal() {
            document.getElementById("jobModal").classList.remove("hidden");
            setTimeout(() => {
                document.getElementById("jobModalContent").classList.remove("scale-95", "opacity-0");
                document.getElementById("jobModalContent").classList.add("scale-100", "opacity-100");
            }, 50);
        }

        function closeJobModal() {
            document.getElementById("jobModalContent").classList.add("scale-95", "opacity-0");
            setTimeout(() => { 
                document.getElementById("jobModal").classList.add("hidden"); 
                document.getElementById("jobForm").reset();
                document.getElementById("form_action").value = "new_job";
                tinymce.get("job_description").setContent("");
            }, 200);
        }
    </script>
</body>
</html>