<?php 
require '../config/function.php';

// Update Sellers details
if(isset($_POST['updateProfile'])){
    $full_name = validate($_POST['full_name']);
    $location = validate($_POST['location']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $language = validate($_POST['language']);
    $about = validate($_POST['about']);
    $mobile = validate($_POST['mobile']);

    $userId = validate($_POST['userId']);

    $user = getById('admin',$userId);
    if($user['status'] != 200){
        redirect('profile-edit.php?id='.$userId,'No Such Id Found');
    }

    if($full_name != '' || $email != '' || $location != '' || $password != '' || $language != '' || $about != '' || $mobile != '') {
        $query = "UPDATE admin SET
        full_name='$full_name',
        location='$location',
        email='$email',
        language='$language',
        about='$about',
        mobile='$mobile',
        password='$password'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('admin-profile.php','Profile Updated Successfully');
        }else{
            redirect('profile-edit.php','Something Went Wrong');
        }
    }
    else{
       redirect('profile-edit.php','Please fill all the inputs fields');
    }
}