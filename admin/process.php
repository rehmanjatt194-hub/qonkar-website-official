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

        $sql = "INSERT INTO jobs (job_title, job_type, job_description, job_status) 
            VALUES ('$title', '$type', '$description', '$status')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('✅ Job added successfully'); window.location.href='jobs.php';</script>";
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
    }
