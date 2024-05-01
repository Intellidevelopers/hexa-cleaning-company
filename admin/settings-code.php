<?php 
require '../config/function.php';


// Update Faq details
if(isset($_POST['updateSettings'])){
    $title = validate($_POST['title']);
    $url = validate($_POST['url']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $address = validate($_POST['address']);
    $copyright = validate($_POST['copyright']);

    $userId = validate($_POST['userId']);

    $user = getById('setting',$userId);
    if($user['status'] != 200){
        redirect('settings.php?id='.$userId,'No Such Id Found');
    }

    if($title != '' || $url != '') {
        $query = "UPDATE setting SET
        title='$title',
        url='$url',
        email='$email',
        phone='$phone',
        address='$address',
        copyright='$copyright'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('settings.php','settings Updated Successfully');
        }else{
            redirect('settings.php','Something Went Wrong');
        }
    }
    else{
       redirect('settings.php','Please fill all the inputs fields');
    }
}