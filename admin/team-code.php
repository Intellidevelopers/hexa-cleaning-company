<?php 
require '../config/function.php';


// Create Team
if(isset($_POST['createTeam'])) {
    $name = validate($_POST['name']);
    $position = validate($_POST['position']);
    $instagram = validate($_POST['instagram']);
    $facebook = validate($_POST['facebook']);
    $twitter = validate($_POST['twitter']);

    // Image upload
    $image = $_FILES["team_image"]['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["team_image"]["tmp_name"]);
    if($check !== false) {
        if(move_uploaded_file($_FILES['team_image']['tmp_name'], $target_file)) {
            // Image uploaded successfully, continue with database insertion
            $query = "INSERT INTO team (name,position,instagram,facebook,twitter,team_image) 
                        VALUES ('$name', '$position','$instagram','$facebook','$twitter','$image')";
            $result = mysqli_query($conn, $query);

            if($result) {
                redirect('teams.php', 'Team Member Added Successfully');
            } else {
                redirect('create-team.php', 'Something Went Wrong');
            }
        } else {
            redirect('create-team.php', 'Failed to upload image');
        }
    } else {
        redirect('create-team.php', 'File is not an image');
    }
} else {
    redirect('create-team.php', 'Please fill all the input fields');
}


// Update Team
if(isset($_POST['updateTeam'])){
    // Validate and retrieve form data
    $name = validate($_POST['name']);
    $position = validate($_POST['position']);
    $instagram = validate($_POST['instagram']);
    $facebook = validate($_POST['facebook']);
    $twitter = validate($_POST['twitter']);

    $userId = validate($_POST['userId']);

    $user = getById('team', $userId);
    if($user['status'] != 200){
        redirect('team-edit.php?id='.$userId, 'No Such Id Found');
    }

    // Check if all fields are not empty
    if($name != '' && $facebook != '' && $position != '' && $instagram != '' && $twitter != '') {
        // Update query
        $query = "UPDATE team SET
        name='$name',
        position='$position',
        twitter='$twitter',
        facebook='$facebook',
        instagram='$instagram'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('teams.php', 'Team Member Updated Successfully');
        } else {
            redirect('team-edit.php?id='.$userId, 'Something Went Wrong');
        }
    } else {
        redirect('team-edit.php?id='.$userId, 'Please fill all the input fields');
    }
}
