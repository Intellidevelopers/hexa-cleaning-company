<?php 
require '../config/function.php';

if (isset($_POST['book'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $message = $_POST['message'];

    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO contact_messages (name, email, phone, category, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $phone, $category, $message);
    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($result) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}


// Update Advert details
if(isset($_POST['updateAdvert'])){
    $advert_title = validate($_POST['advert_title']);
    $advert_description = validate($_POST['advert_description']);
    $created_date = validate($_POST['created_date']);

    $userId = validate($_POST['userId']);

    $user = getById('advert',$userId);
    if($user['status'] != 200){
        redirect('advert-edit.php?id='.$userId,'No Such Id Found');
    }

    if($advert_title != '' || $advert_description != '' || $created_date != '') {
        $query = "UPDATE advert SET
        advert_title='$advert_title',
        advert_description='$advert_description',
        created_date='$created_date'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('advert.php','User Updated Successfully');
        }else{
            redirect('create-advert.php','Something Went Wrong');
        }
    }
    else{
       redirect('create-advert.php','Please fill all the inputs fields');
    }
}