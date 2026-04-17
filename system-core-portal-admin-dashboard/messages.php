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
        document.addEventListener("click", function(e) {
            if (e.target && e.target.classList.contains("status-btn")) {
                e.preventDefault();

                let msgId = e.target.getAttribute("data-id");
                let currentStatus = e.target.getAttribute("data-status");

                // Toggle status
                let newStatus = currentStatus === "read" ? "unread" : "read";

                fetch("process.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: "action=toggle_message_status&id=" + msgId + "&status=" + newStatus
                    })
                    .then(data => {
                        if (data.success) {
                            location.reload(); // Refresh after update
                        } else {
                            location.reload(); // Refresh after update

                        }
                    })
                    .catch(error => console.error("⚠️ Fetch Error:", error));
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
                <h2 class="text-2xl font-bold">Messages</h2>
            </div>
            <div id="messageAlert" class="hidden mb-4 p-2 rounded text-sm"></div>
            <div class="overflow-x-auto">
                <table id="messages_table" class="display cell-border stripe hover w-full">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Budget</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC"); // fetch newest first

                        while ($row = $result->fetch_assoc()) {
                            $status = $row['status'];
                            $statusOrder = ($status === 'unread') ? 0 : 1;            // unread -> 0 (comes first)
                            $createdTs = strtotime($row['created_at']);              // numeric timestamp for reliable sorting

                        $originalMessage = htmlspecialchars($row['message']);
                        $shortMessage = (strlen($originalMessage) > 15) ? mb_substr($originalMessage, 0, 15) . '...' : $originalMessage;

                            $statusClass = $status === 'read'
                                ? 'bg-green-600 hover:bg-green-700'
                                : 'bg-yellow-600 hover:bg-yellow-700';
                            $statusText = ucfirst($status);

                            $statusBtn = "<button class='status-btn px-3 py-1 rounded text-white {$statusClass}' 
                                    data-id='{$row['id']}' data-status='{$row['status']}'>$statusText</button>";
                            
                                                        echo "<tr class='message-row cursor-pointer'
                                data-id='{$row['id']}'
                                data-name='" . htmlspecialchars($row['full_name']) . "'
                                data-email='" . htmlspecialchars($row['email']) . "'
                                data-phone='" . htmlspecialchars($row['phone_number']) . "'
                                data-subject='" . htmlspecialchars($row['subject']) . "'
                                data-budget='" . htmlspecialchars($row['budget']) . "'
                                data-message='" . htmlspecialchars($row['message']) . "'
                                data-created='" . htmlspecialchars($row['created_at']) . "'
                                data-status='{$row['status']}' >
                                <td>" . intval($row['id']) . "</td>
                                <td>" . htmlspecialchars($row['full_name']) . "</td>
                                <td>" . htmlspecialchars($row['email']) . "</td>
                                <td>" . htmlspecialchars($row['phone_number']) . "</td>
                                <td>" . htmlspecialchars($row['subject']) . "</td>
                                <td>" . htmlspecialchars($row['budget']) . "</td>
                                
                                <td>" . $shortMessage . "</td>
                                <td data-order='{$statusOrder}'>" . $statusBtn . "</td>
                                <td data-order='{$createdTs}'>" . htmlspecialchars($row['created_at']) . "</td>
                            </tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Message Modal -->
        <div id="messageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white text-black rounded shadow-lg w-11/12 md:w-2/3 lg:w-1/2 p-6 relative">
                <!-- Close button -->
                <button id="closeModal" class="absolute top-2 right-2 text-gray-600 hover:text-black">&times;</button>

                <h2 class="text-xl font-semibold mb-4">Message Details</h2>
                <div id="modalContent" class="space-y-2">
                    <!-- Content will be injected here -->
                </div>
            </div>
        </div>



    </main>



    <script>
        // Message Modal
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("messageModal");
            const closeModal = document.getElementById("closeModal");
            const modalContent = document.getElementById("modalContent");

            // When row clicked
            document.querySelectorAll(".message-row").forEach(row => {
                row.addEventListener("click", function() {
                    const id = this.dataset.id;
                    const name = this.dataset.name;
                    const email = this.dataset.email;
                    const phone = this.dataset.phone;
                    const subject = this.dataset.subject;
                    const budget = this.dataset.budget;
                    const message = this.dataset.message;
                    const created = this.dataset.created;
                    const status = this.dataset.status;

                    modalContent.innerHTML = `
                <p><strong>ID:</strong> ${id}</p>
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Phone:</strong> ${phone}</p>
                <p><strong>Subject:</strong> ${subject}</p>
                <p><strong>Budget:</strong> ${budget}</p>
                <p><strong>Message:</strong><br>${message}</p>
                <p><strong>Status:</strong> ${status}</p>
            `;

                    modal.classList.remove("hidden");
                    modal.classList.add("flex");

                    // Optional: Ajax call to mark as "read"
                    if (status === "unread") {
                        fetch("mark_read.php", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/x-www-form-urlencoded"
                            },
                            body: "id=" + id
                        });
                        this.dataset.status = "read"; // update local row data
                    }
                });
            });

            // Close modal
            closeModal.addEventListener("click", () => {
                modal.classList.add("hidden");
                modal.classList.remove("flex");
            });

            // Close when clicking outside content
            modal.addEventListener("click", e => {
                if (e.target === modal) {
                    modal.classList.add("hidden");
                    modal.classList.remove("flex");
                }
            });
        });
        // Data Table
        $(document).ready(function() {
            $('#messages_table').DataTable({
                responsive: true,
                pageLength: 10,
                lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
                order: [
                    [0, "desc"]
                ], // Sort by ID (latest first)
                columnDefs: [{
                        targets: [6],
                        orderable: false
                    }, // Disable sorting for "Message"
                    {
                        targets: [7],
                        orderable: false
                    } // Disable sorting for "Status"
                ],
                language: {
                    search: "🔍 Search Messages:",
                    lengthMenu: "Show _MENU_ entries",
                    info: "Showing _START_ to _END_ of _TOTAL_ messages",
                    infoEmpty: "No messages available",
                    zeroRecords: "No matching messages found"
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