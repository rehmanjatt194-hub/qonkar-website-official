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


    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <!-- jQuery + DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Buttons extension -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

    <!-- JSZip (needed for CSV export) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>


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
            // ✅ Existing job status toggle
            if (e.target && e.target.classList.contains("status-btn")) {
                e.preventDefault();

                let jobId = e.target.getAttribute("data-id");
                let currentStatus = e.target.getAttribute("data-status");

                let newStatus = currentStatus === "open" ? "closed" : "open";

                fetch("process.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: "action=toggle_job_status&id=" + jobId + "&status=" + newStatus
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert("❌ Error updating job status");
                        }
                    })
                    .catch(error => console.error("⚠️ Fetch Error:", error));
            }

            // ✅ New: Handle application status update (Shortlist / Reject)
            if (e.target && (e.target.classList.contains("shortlist-btn") || e.target.classList.contains("reject-btn"))) {
                e.preventDefault();

                let appId = e.target.getAttribute("data-id");
                let newStatus = e.target.classList.contains("shortlist-btn") ? "shortlist" : "reject";

                fetch("process.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: "action=update_application_status&id=" + appId + "&status=" + newStatus
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert("❌ Error updating application status");
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
        <!-- Appliations Table -->
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Job Applications</h2>


            </div>

            <div class="overflow-x-auto">
                <table id="applications_table" class="display cell-border stripe hover w-full">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Applicant Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Job Title</th>
                            <th>Status</th>
                            <th>Resume</th>
                            <th>Applied On</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $result = $conn->query("SELECT * FROM job_applications ORDER BY id DESC");
                        while ($row = $result->fetch_assoc()) {
                            $statusText = ucfirst($row['status']);
                            $statusHTML = "";

                            if ($row['status'] === 'pending') {
                                // Show Pending badge + two action buttons
                                $statusHTML = "
    <div class='flex flex-col items-center justify-center'>
        <span class='px-3 py-1 rounded text-white bg-yellow-600 hover:bg-yellow-700 mb-2'>
            Pending
        </span>
        <div class='flex gap-2'>
            <button class='shortlist-btn bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded'
                    data-id='{$row['id']}'>
                Shortlist
            </button>
            <button class='reject-btn bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded'
                    data-id='{$row['id']}'>
                Reject
            </button>
        </div>
    </div>
";
                            } elseif ($row['status'] === 'shortlist') {
                                $statusHTML = "
    <div class='flex items-center justify-center'>
        <span class='px-3 py-1 rounded text-white bg-green-600 hover:bg-green-700'>
            {$statusText}
        </span>
    </div>";
                            } elseif ($row['status'] === 'reject') {
                                $statusHTML = "
    <div class='flex items-center justify-center'>
        <span class='px-3 py-1 rounded text-white bg-red-600 hover:bg-red-700'>
            {$statusText}
        </span>
    </div>";
                            }

                            $resumeBtn = "<a href='../" . htmlspecialchars($row['resume']) . "' 
                     download 
                     class=' hover:bg-blue-600 text-white px-3 py-1 rounded'>
                     📃
                  </a>";

                            echo "<tr class='app-row cursor-pointer' 
            data-details='" . json_encode($row, JSON_HEX_APOS | JSON_HEX_QUOT) . "'>
            <td>{$row['id']}</td>
            <td>" . htmlspecialchars($row['name']) . "</td>
            <td>" . htmlspecialchars($row['email']) . "</td>
            <td>" . htmlspecialchars($row['phone_number']) . "</td>
            <td>" . htmlspecialchars($row['job_title']) . "</td>
            <td>{$statusHTML}</td>
            <td>{$resumeBtn}</td>
            <td>{$row['created_at']}</td>
        </tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>

                </table>
            </div>
        </div>

        <!-- Modal -->
        <div id="appModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 text-black">
            <div class="bg-white rounded shadow-lg w-11/12 md:w-2/3 lg:w-1/2 p-6 relative">
                <!-- Close button -->
                <button id="closeAppModal" class="absolute top-2 right-2 text-gray-600 hover:text-black">&times;</button>

                <h2 class="text-xl font-semibold mb-4">Application Details</h2>
                <div id="modalContent" class="space-y-2"></div>
            </div>
        </div>





    </main>


    <script>
        $(document).ready(function() {
            $('#applications_table').DataTable({
                "pageLength": 5,
                "order": [
                    [0, "desc"]
                ],
                "language": {
                    "search": "Search Applications:",
                    "lengthMenu": "Show _MENU_ entries"
                },
                dom: 'Bfrtip', // enable buttons section
                buttons: [{
                    extend: 'csv',
                    text: '⬇ Download CSV',
                    className: 'bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded'
                }]
            });

            // Open modal on row click
            $(document).on("click", ".app-row", function() {
                let data = $(this).data("details");
                let content = `
            <p><strong>Name:</strong> ${data.name}</p>
            <p><strong>Email:</strong> ${data.email}</p>
            <p><strong>Phone:</strong> ${data.phone_number}</p>
            <p><strong>Country:</strong> ${data.country ?? ''}</p>
            <p><strong>City:</strong> ${data.city ?? ''}</p>
            <p><strong>Job Title:</strong> ${data.job_title}</p>
            <p><strong>Portfolio:</strong> <a href="${data.portfolio_link}" target="_blank">${data.portfolio_link}</a></p>
            <p><strong>LinkedIn:</strong> <a href="${data.linkedin}" target="_blank">${data.linkedin}</a></p>
            <p><strong>Message:</strong><br>${data.message ?? ''}</p>
            <p><strong>Status:</strong> ${data.status}</p>
            <p><strong>Applied On:</strong> ${data.created_at}</p>
        `;
                $("#modalContent").html(content);
                $("#appModal").removeClass("hidden").addClass("flex");
            });

            // Close modal
            $("#closeAppModal").on("click", function() {
                $("#appModal").addClass("hidden").removeClass("flex");
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