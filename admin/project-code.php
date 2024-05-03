<?php 
require '../config/function.php';


// Create Posts
if(isset($_POST['createProject'])) {
    $title = validate($_POST['title']);
    $professional = validate($_POST['professional']);

    // Image upload
    $image = $_FILES["project_image"]['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["project_image"]["tmp_name"]);
    if($check !== false) {
        if(move_uploaded_file($_FILES['project_image']['tmp_name'], $target_file)) {
            // Image uploaded successfully, continue with database insertion
            $query = "INSERT INTO projects (title,professional,project_image) 
                        VALUES ('$title', '$professional','$image')";
            $result = mysqli_query($conn, $query);

            if($result) {
                redirect('projects.php', 'Project Added Successfully');
            } else {
                redirect('create_project.php', 'Something Went Wrong');
            }
        } else {
            redirect('create_project.php', 'Failed to upload image');
        }
    } else {
        redirect('create_project.php', 'File is not an image');
    }
} else {
    redirect('create_project.php', 'Please fill all the input fields');
}