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
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script> <!-- For icons -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


    <style>
        :root {
            --primary-color: #3F89C9;
            --secondary-color: #2FADC3;
            --tertiary-color: #85D55C;
            --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color), var(--tertiary-color));
            --body-bg: #080808;
        }

        body {
            background-color: var(--body-bg);
        }

        .gradient-border {
            background: var(--gradient);
            border-radius: 20px;
            padding: 2px;
        }

        .card-inner {
            border-radius: 18px;
            background-color: #111;
            padding: 20px;
        }

        .sidebar {
            transition: all 0.3s;
        }

        .sidebar.collapsed {
            width: 20;
        }
    </style>

    <script>
        // Status toggle (Active <-> Inactive)
        document.addEventListener("click", function(e) {
            if (e.target && e.target.classList.contains("status-btn")) {
                e.preventDefault(); // still prevent unwanted default

                let userId = e.target.getAttribute("data-id");
                let currentStatus = e.target.getAttribute("data-status");

                // Toggle status
                let newStatus = currentStatus === "active" ? "inactive" : "active";

                fetch("process.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: "action=toggle_status&id=" + userId + "&status=" + newStatus
                    })
                    .then(data => {
                        if (data.success) {
                            location.reload(); // 🚀 reload the page after update
                        } else {
                            alert("❌ Error: ");
                            location.reload(); // 🚀 reload the page after update

                        }
                    })
                    .catch(error => console.error("⚠️ Fetch Error:", error));
            }
        });
    </script>
</head>

<body>
    <!-- Side Bar -->
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

    <!-- Main Content -->
    <main id="mainContent" class="flex-1 ml-64 text-white relative transition-all duration-300">
        <!-- Top Header Bar with Border -->
        <div class="flex items-center justify-between h-20 border-b border-[#595959] px-8">
            <!-- Dashboard Title -->
            <h1 class="text-2xl ">Users</h1>

            <!-- User Info Top Right -->
            <div class="flex items-center gap-3">
                <?php


                $user_id = $_SESSION['user_id'];
                $stmt = $conn->prepare("SELECT username, picture FROM users WHERE id = ?");
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $user = $result->fetch_assoc();

                $username = $user['username'];
                $picture = !empty($user['picture']) ? $user['picture'] : '../images/default_avatar.png';
                ?>
                <!-- Username -->
                <span class="font-semibold text-lg"><?php echo htmlspecialchars($username); ?></span>
                <!-- Circle Image -->
                <img src="<?php echo $picture; ?>" alt="User Avatar"
                    class="w-12 h-12 rounded-full object-cover border-2 border-[var(--secondary-color)]">
            </div>
        </div>

        <!-- User Dashboard Content -->
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Users Management</h2>
                <!-- Button to open modal -->
                <button onclick="openUserModal()"
                    class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded text-white">
                    + Add New User
                </button>
            </div>
            <div id="userMessage" class="hidden mb-4 p-2 rounded text-sm"></div>
            <div class="overflow-x-auto">
                <table id="users_table" class="display cell-border stripe hover w-full">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "qonkar_db");
                        if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

                        $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
                        while ($row = $result->fetch_assoc()) {
                            $statusClass = $row['status'] === 'active' ? 'bg-green-600 hover:bg-green-700' : 'bg-red-600 hover:bg-red-700';
                            $statusText = ucfirst($row['status']);

                            $statusBtn = "<button class='status-btn px-3 py-1 rounded text-white $statusClass' 
                data-id='{$row['id']}' 
                data-status='{$row['status']}'>$statusText</button>";

                            $picture = !empty($row['picture']) ? $row['picture'] : "../images/default_avatar.png";

                            echo "<tr>
                            <td>{$row['id']}</td>
                            <td><img src='{$picture}' class='w-10 h-10 rounded-full object-cover'></td>
                            <td>" . htmlspecialchars($row['username']) . "</td>
                            <td>" . htmlspecialchars($row['email']) . "</td>
                            <td  >{$statusBtn}</td>
                            <td>{$row['created_at']}</td>
                            <td>{$row['updated_at']}</td>
                          </tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <!-- User Modal for New Registration -->
    <div id="userModal"
        class="fixed inset-0 bg-black/50 flex items-center justify-center hidden transition-opacity duration-300">

        <!-- Modal Content -->
        <div id="userModalContent"
            class="bg-[#202020] p-6 rounded-lg shadow-lg w-full max-w-md text-white relative transform transition-all duration-300 scale-95 opacity-0">

            <h2 class="text-xl font-bold mb-4">Register New User</h2>
            <form id="userForm" method="POST" action="process.php" enctype="multipart/form-data" class="space-y-4">
                <div>
                    <label class="block mb-1">Username</label>
                    <input type="text" name="username" required class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                </div>
                <div>
                    <label class="block mb-1">Email</label>
                    <input type="email" name="email" required class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                </div>
                <div>
                    <label class="block mb-1">Password</label>
                    <input type="password" name="password" required class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                </div>
                <div>
                    <label class="block mb-1">Picture</label>
                    <input type="file" name="picture" accept="image/*" class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                </div>
                <div>
                    <label class="block mb-1">Status</label>
                    <select name="status" class="w-full p-2 rounded bg-gray-800 border border-gray-600">
                        <option value="active" selected>Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <input type="hidden" name="user" value="new_user">

                <div class="flex justify-end gap-3 mt-4">
                    <button type="button" class="px-4 py-2 bg-gray-600 rounded">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded">Save</button>
                </div>
            </form>

            <!-- Close button -->
            <button onclick="closeUserModal()" class="absolute top-2 right-2 text-gray-400 hover:text-white">✕</button>
        </div>
    </div>


    <script>
        //Modal
        function openUserModal() {
            const modal = document.getElementById("userModal");
            const content = document.getElementById("userModalContent");

            modal.classList.remove("hidden");

            setTimeout(() => {
                content.classList.remove("opacity-0", "scale-95");
                content.classList.add("opacity-100", "scale-100");
            }, 50);
        }

        function closeUserModal() {
            const modal = document.getElementById("userModal");
            const content = document.getElementById("userModalContent");

            content.classList.remove("opacity-100", "scale-100");
            content.classList.add("opacity-0", "scale-95");

            setTimeout(() => {
                modal.classList.add("hidden");
            }, 300); // match duration-300
        }


        // Data Table
        $(document).ready(function() {
            $('#users_table').DataTable({
                "pageLength": 5,
                "order": [
                    [0, "desc"]
                ],
                "language": {
                    "search": "Search Users:",
                    "lengthMenu": "Show _MENU_ entries"
                }
            });
        });

        // SideBar
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('sidebarToggle');
        const sidebarLogo = document.getElementById('sidebarLogo');
        const mainContent = document.getElementById('mainContent');
        feather.replace();

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('w-20');
            sidebar.classList.toggle('overflow-hidden');

            // Toggle text visibility
            sidebar.querySelectorAll('span').forEach(span => {
                span.classList.toggle('hidden');
            });

            // Adjust main content margin
            if (sidebar.classList.contains('w-20')) {
                mainContent.classList.remove('ml-64');
                mainContent.classList.add('ml-20');

                sidebarLogo.src = "../images/qonkar_q.png";
                sidebarLogo.classList.remove('w-32');
                sidebarLogo.classList.add('w-10');

                toggleBtn.innerHTML = feather.icons['chevron-right'].toSvg({
                    class: "w-5 h-5"
                });
            } else {
                mainContent.classList.remove('ml-20');
                mainContent.classList.add('ml-64');

                sidebarLogo.src = "../images/qonkar_logo.png";
                sidebarLogo.classList.remove('w-10');
                sidebarLogo.classList.add('w-32');

                toggleBtn.innerHTML = feather.icons['chevron-left'].toSvg({
                    class: "w-5 h-5"
                });
            }
        });
    </script>

</body>

</html>