<?php 
require '../config/function.php';


// Update Setting
/*if (isset($_POST['updateSetting'])) {
    // Validate and sanitize input values


    $title = validate($_POST['title']);
    $url = validate($_POST['url']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $address = validate($_POST['address']);
    $copyright = validate($_POST['copyright']);

    // Validate user ID (assuming the ID is passed as 'userId' via POST)
    $settingId = validate($_POST['settingId']);

    // Check if user ID is provided and valid
    if ($settingId == 'insert') {
        $query = "INSERT INTO setting (title, url, email, phone, address, copyright) 
        VALUES ('$title', '$url', '$email', '$phone', '$address', '$copyright')";
        $result = mysqli_query($conn, $query);
    }

    if($result){
        redirect('settings.php', 'Settings Updated Successfully');
    }else{
        redirect('settings.php', 'Something Went Wrong');
    }
} */


// Update User details
if(isset($_POST['updateSettings'])){
    $title = validate($_POST['title']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $url = validate($_POST['url']);
    $copyright = validate($_POST['copyright']);
    $address = validate($_POST['address']);

    $userId = validate($_POST['userId']);

    $user = getById('setting',$userId);
    if($user['status'] != 200){
        redirect('settings.php?id='.$userId,'No Such Id Found');
    }

    if($title != '' || $email != '' || $phone != '' || $url != '' || $copyright != '' || $address != '') {
        $query = "UPDATE setting SET
        title='$title',
        copyright='$copyright',
        email='$email',
        address='$address',
        phone='$phone',
        url='$url'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('settings.php','User Updated Successfully');
        }else{
            redirect('settings.php','Something Went Wrong');
        }
    }
    else{
       redirect('settings.php','Please fill all the inputs fields');
    }
}