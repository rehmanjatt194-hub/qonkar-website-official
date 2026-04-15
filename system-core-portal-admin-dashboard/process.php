    <?php
    require_once("database_config.php");

    if (isset($_POST['user']) && $_POST['user'] == "new_user") {

        echo  $username = $_POST['username'] ?? '';
        echo  $email    = $_POST['email'] ?? '';
        echo  $password = $_POST['password'] ?? '';
        echo  $status   = $_POST['status'] ?? 'active';


        // die;
        // Hash password
        $hashedPassword = md5($password);

        // Handle file upload
        $picturePath = null;
        if (!empty($_FILES['picture']['name'])) {
            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            $picturePath = $targetDir . basename($_FILES['picture']['name']);
            move_uploaded_file($_FILES['picture']['tmp_name'], $picturePath);
        }

        // Insert into DB
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, picture, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $email, $hashedPassword, $picturePath, $status);

        if ($stmt->execute()) {
            header("location:users.php?msg=Successfully_Added_New_User");
            exit();
        } else {
            header("location:users.php?msg=Somethin_Went_Wrong");
            exit();
        }

        $stmt->close();
        $conn->close();
    } else if (isset($_POST['action']) && $_POST['action'] === 'toggle_status') {
        $id = intval($_POST['id']);
        $status = $_POST['status'];

        $stmt = $conn->prepare("UPDATE users SET status=? WHERE id=?");
        $stmt->bind_param("si", $status, $id);

        if ($stmt->execute()) {
            echo "Update Successfully";
        } else {
            echo "Something Went Wrong";
        }
        exit;
    } else if (isset($_POST['action']) && $_POST['action'] === "toggle_message_status") {
        $id = intval($_POST['id']);
        $status = $_POST['status'];

        $stmt = $conn->prepare("UPDATE messages SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);

        if ($stmt->execute()) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false]);
        }

        $stmt->close();
        exit();
    } else if (isset($_POST['action']) && $_POST['action'] === 'new_job') {
        $title = $conn->real_escape_string($_POST['job_title']);
        $type = $conn->real_escape_string($_POST['job_type']);
        $description = $conn->real_escape_string($_POST['job_description']);
        $status = isset($_POST['job_status']) ? $_POST['job_status'] : 'open';
        $location = isset($_POST['location']) ? $_POST['location'] : 'Nawabshah';
        
        // Handle Slug: Use provided slug or generate from title
        $slug = !empty($_POST['slug']) ? createSlug($_POST['slug']) : createSlug($title);
    
        $sql = "INSERT INTO jobs (job_title, slug, job_type, location, job_description, job_status) 
                VALUES ('$title', '$slug', '$type','$location', '$description', '$status')";
    
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('✅ Job added successfully'); window.location.href='jobs.php';</script>";
        } else {
            echo "<script>alert('❌ Error: " . $conn->error . "'); window.history.back();</script>";
        }
    } else if (isset($_POST['action']) && $_POST['action'] === 'update_job') {
    $id = intval($_POST['job_id']);
    $title = $conn->real_escape_string($_POST['job_title']);
    $type = $conn->real_escape_string($_POST['job_type']);
    $description = $conn->real_escape_string($_POST['job_description']);
    $status = $conn->real_escape_string($_POST['job_status']);
    $location = $conn->real_escape_string($_POST['location']);
    $slug = !empty($_POST['slug']) ? createSlug($_POST['slug']) : createSlug($title);

    $sql = "UPDATE jobs SET 
            job_title='$title', 
            slug='$slug', 
            job_type='$type', 
            location='$location', 
            job_description='$description', 
            job_status='$status' 
            WHERE job_id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Job updated successfully'); window.location.href='jobs.php';</script>";
    } else {
        echo "<script>alert('❌ Error: " . $conn->error . "'); window.history.back();</script>";
    }
    } else if (isset($_POST['action']) && $_POST['action'] === 'toggle_job_status') {
        $id = intval($_POST['id']);
        $status = $conn->real_escape_string($_POST['status']);

        $sql = "UPDATE jobs SET job_status='$status' WHERE job_id=$id";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "error" => $conn->error]);
        }
        exit;
    }else if (isset($_POST['action']) && $_POST['action'] === 'delete_job') {
        $id = intval($_POST['id']);
    
        // Standard delete query using prepared statement for security
        $stmt = $conn->prepare("DELETE FROM jobs WHERE job_id = ?");
        $stmt->bind_param("i", $id);
    
        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => $conn->error]);
        }
        $stmt->close();
        exit();
    
    }else if ($_POST['action'] === 'update_job') {
            $job_id = $_POST['job_id'];
            $job_title = $_POST['job_title'];
            $job_type = $_POST['job_type'];
            $location = $_POST['location'];
            $job_description = $_POST['job_description'];
            $job_status = $_POST['job_status'];
    
            $stmt = $conn->prepare("UPDATE jobs SET job_title=?, job_type=?, location=?, job_description=?, job_status=?, updated_at=NOW() WHERE job_id=?");
            $stmt->bind_param("sssssi", $job_title, $job_type, $location, $job_description, $job_status, $job_id);
    
            if ($stmt->execute()) {
                header("Location: jobs.php?success=Job updated successfully");
                exit();
            } else {
                header("Location: jobs.php?error=Failed to update job");
                exit();
            }
    } else if (isset($_POST['action']) && $_POST['action'] === "update_application_status") {
        $id = intval($_POST['id']);
        $status = $_POST['status'];

        $allowed = ['shortlist', 'reject']; // only valid updates
        if (!in_array($status, $allowed)) {
            echo json_encode(["success" => false, "error" => "Invalid status"]);
            exit;
        }

        $stmt = $conn->prepare("UPDATE job_applications SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);

        if ($stmt->execute()) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "error" => $conn->error]);
        }

        $stmt->close();
        exit();
    } else if ($_POST['action'] === 'new_case_study') {
        $brand_name = $_POST['brand_name'];
        $short_description = $_POST['short_description'];
        $status = $_POST['status'];
        $link_of_case_study = $_POST['link_of_case_study'];
        $category_ids = $_POST['category_ids'] ?? []; // multiple category IDs

        // Upload mockup image
        $mockup_target = "images/case-studies/" . basename($_FILES['mockup_image']['name']);
        move_uploaded_file($_FILES['mockup_image']['tmp_name'], "../" . $mockup_target);

        // Upload background image (optional)
        $background_target = "images/case-studies/background.png"; // default
        if (!empty($_FILES['background_image']['name'])) {
            $background_target = "images/case-studies/background/" . basename($_FILES['background_image']['name']);
            move_uploaded_file($_FILES['background_image']['tmp_name'], "../" . $background_target);
        }

        // Insert into case_studies
        $stmt = $conn->prepare("INSERT INTO case_studies (mockup_image, background_image, brand_name, short_description, status, link_of_case_study) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $mockup_target, $background_target, $brand_name, $short_description, $status, $link_of_case_study);

        if ($stmt->execute()) {
            $case_study_id = $conn->insert_id; // Get the last inserted case study ID

            // Insert into bridge table
            if (!empty($category_ids)) {
                $bridge_stmt = $conn->prepare("INSERT INTO case_study_category_bridge (case_study_id, category_id) VALUES (?, ?)");
                foreach ($category_ids as $cat_id) {
                    $bridge_stmt->bind_param("ii", $case_study_id, $cat_id);
                    $bridge_stmt->execute();
                }
                $bridge_stmt->close();
            }

            header("Location: case-studies.php?success=1");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else if ($_POST['action'] === 'toggle_case_status') {
        $id = $_POST['id'];
        $status = $_POST['status'];
        $conn->query("UPDATE case_studies SET status='$status' WHERE id=$id");
        echo json_encode(['success' => true]);
        exit();
    } else if ($_POST['action'] === 'delete_case_study') {
        $id = intval($_POST['id']);

        // 1️⃣ Get the file paths before deleting
        $stmt = $conn->prepare("SELECT mockup_image, background_image FROM case_studies WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($mockup_image, $background_image);
        $stmt->fetch();
        $stmt->close();

        if ($mockup_image) {
            $mockup_path = "../" . $mockup_image;
            if (file_exists($mockup_path)) {
                unlink($mockup_path); // 🗑️ delete mockup image
            }
        }

        if ($background_image) {
            $bg_path = "../" . $background_image;
            if (file_exists($bg_path) && $background_image !== "images/case-studies/background.png") {
                unlink($bg_path); // 🗑️ delete background image (if not default)
            }
        }

        // 2️⃣ Delete from bridge table (optional, if you use it)
        $conn->query("DELETE FROM case_study_category_bridge WHERE case_study_id = $id");

        // 3️⃣ Delete from main table
        $delete = $conn->query("DELETE FROM case_studies WHERE id = $id");

        if ($delete) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete record']);
        }
        exit();
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'add_blog_category') {
        $title = trim($_POST['blog_category_title']);
        $status = $_POST['status'];

        if (!empty($title)) {
            $stmt = $conn->prepare("INSERT INTO blogs_category (blog_category_title, status) VALUES (?, ?)");
            $stmt->bind_param("ss", $title, $status);

            if ($stmt->execute()) {
                $_SESSION['success'] = "Blog category added successfully!";
            } else {
                $_SESSION['error'] = "Failed to add blog category.";
            }

            $stmt->close();
        } else {
            $_SESSION['error'] = "Category title cannot be empty.";
        }

        header("Location: categories.php");
        exit();
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'toggle_blog_status') {
        $id = intval($_POST['id']);
        $status = $_POST['status'];

        $stmt = $conn->prepare("UPDATE blogs_category SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);
        $response = ["success" => $stmt->execute()];
        echo json_encode($response);
        exit();
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'delete_blog_category') {
        $id = intval($_POST['id']);

        $stmt = $conn->prepare("DELETE FROM blogs_category WHERE id = ?");
        $stmt->bind_param("i", $id);
        $response = ["success" => $stmt->execute()];
        echo json_encode($response);
        exit();
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'new_blog') {
        $title = $_POST['blog_title'];
        $slug = $_POST['slug']; // New Slug field
        $desc = $_POST['blog_description'];
        $meta_desc = $_POST['meta_description'];
        $status = $_POST['status'];
        $is_comment_allowed = $_POST['is_comment_allowed'];
        $categories = isset($_POST['category_ids']) ? $_POST['category_ids'] : [];
    
        // Ensure slug is unique/clean just in case
        $slug = preg_replace("/[^a-z0-9-]/", "", strtolower(str_replace(' ', '-', $slug)));
    
        // Handle image upload
        $targetDir = "uploads/blogs/";
        if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);
    
        $fileName = time() . "_" . preg_replace("/[^a-zA-Z0-9.]/", "_", basename($_FILES["blog_image"]["name"]));
        $targetFilePath = $targetDir . $fileName;
    
        if (move_uploaded_file($_FILES["blog_image"]["tmp_name"], $targetFilePath)) {
            
            $conn->begin_transaction();
    
            try {
                // UPDATED: Added 'slug' to column list and bind_param
                $stmt = $conn->prepare("INSERT INTO blogs (blog_title, slug, blog_image, blog_description, meta_description, status, is_comment_allowed) VALUES (?, ?, ?, ?, ?, ?, ?)");
                
                // "ssssssi" = 6 strings, 1 integer
                $stmt->bind_param("ssssssi", $title, $slug, $targetFilePath, $desc, $meta_desc, $status, $is_comment_allowed);
                $stmt->execute();
                $blog_id = $stmt->insert_id;
    
                // Insert categories
                if (!empty($categories)) {
                    $map = $conn->prepare("INSERT INTO blog_category_map (blog_id, category_id) VALUES (?, ?)");
                    foreach ($categories as $cat_id) {
                        $map->bind_param("ii", $blog_id, $cat_id);
                        $map->execute();
                    }
                }
    
                $conn->commit();
                header("Location: blogs.php?success=Blog published successfully");
                exit();
    
            } catch (Exception $e) {
                $conn->rollback();
                die("❌ Database Error: " . $e->getMessage());
            }
        } else {
            die("❌ File upload failed.");
        }
    }else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'update_blog') {
        $id = $_POST['id'];
        $title = $_POST['blog_title'];
        $desc = $_POST['blog_description'];
        $meta_desc = $_POST['meta_description'];
        $status = $_POST['status'];
        $is_comment_allowed = $_POST['is_comment_allowed'];
        $categories = $_POST['category_ids'] ?? [];
        
        // Handle Slug (sanitize and fallback)
        $slug = $_POST['slug'] ?? '';
        if (empty($slug)) {
            $slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $title));
        } else {
            $slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $slug));
        }
    
        // Handle Optional Image Upload
        if (!empty($_FILES["blog_image"]["name"])) {
            $targetDir = "uploads/blogs/";
            // Ensure directory exists
            if (!file_exists("../" . $targetDir)) {
                mkdir("../" . $targetDir, 0777, true);
            }
            
            $fileName = time() . "_" . basename($_FILES["blog_image"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            
            // Upload file (noting the ../ to exit the admin folder)
            if (move_uploaded_file($_FILES["blog_image"]["tmp_name"], "../" . $targetFilePath)) {
                $stmt = $conn->prepare("UPDATE blogs SET blog_title=?, slug=?, blog_image=?, blog_description=?, meta_description=?, status=?, is_comment_allowed=? WHERE id=?");
                $stmt->bind_param("ssssssii", $title, $slug, $targetFilePath, $desc, $meta_desc, $status, $is_comment_allowed, $id);
            } else {
                die("❌ Image upload failed.");
            }
        } else {
            // Update without changing image
            $stmt = $conn->prepare("UPDATE blogs SET blog_title=?, slug=?, blog_description=?, meta_description=?, status=?, is_comment_allowed=? WHERE id=?");
            $stmt->bind_param("sssssii", $title, $slug, $desc, $meta_desc, $status, $is_comment_allowed, $id);
        }
    
        if ($stmt->execute()) {
            // Update Categories (Delete old mappings and insert new ones)
            $del_stmt = $conn->prepare("DELETE FROM blog_category_map WHERE blog_id = ?");
            $del_stmt->bind_param("i", $id);
            $del_stmt->execute();
    
            if (!empty($categories)) {
                foreach ($categories as $cat_id) {
                    $map = $conn->prepare("INSERT INTO blog_category_map (blog_id, category_id) VALUES (?, ?)");
                    $map->bind_param("ii", $id, $cat_id);
                    $map->execute();
                }
            }
            header("Location: blogs.php?success=Blog Updated Successfully");
            exit();
        } else {
            die("❌ Update failed: " . $conn->error);
        }
    } else if ($_POST['action'] === 'toggle_blog_status') {
        $id = intval($_POST['id']);
        $status = $_POST['status'];

        $stmt = $conn->prepare("UPDATE blogs SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);

        echo json_encode(["success" => $stmt->execute()]);
        exit();
    } else if ($_POST['action'] === 'delete_blog') {
        $id = intval($_POST['id']);

        // Delete blog image from folder too (optional but recommended)
        $imgQuery = $conn->prepare("SELECT blog_image FROM blogs WHERE id = ?");
        $imgQuery->bind_param("i", $id);
        $imgQuery->execute();
        $result = $imgQuery->get_result();
        if ($row = $result->fetch_assoc()) {
            $filePath = "../" . $row['blog_image'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Delete blog (blog_category_map will auto-delete due to ON DELETE CASCADE)
        $stmt = $conn->prepare("DELETE FROM blogs WHERE id = ?");
        $stmt->bind_param("i", $id);

        echo json_encode([
            "success" => $stmt->execute(),
            "message" => $stmt->execute() ? "Blog deleted successfully" : "Failed to delete blog"
        ]);
        exit();
    }
