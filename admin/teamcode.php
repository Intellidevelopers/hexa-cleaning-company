<?php 
require '../config/function.php';


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