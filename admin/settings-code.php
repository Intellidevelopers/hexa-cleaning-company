<?php 
require '../config/function.php';


// Update Setting
if (isset($_POST['updateSetting'])) {
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
}