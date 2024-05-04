<?php 
require '../config/function.php';


// Create User
if(isset($_POST['createPlan'])) {
    $title = validate($_POST['title']);
    $amount = validate($_POST['amount']);
    $time_rate = validate($_POST['time_rate']);
    $url = validate($_POST['url']);
    $service_1 = validate($_POST['service_1']);
    $service_2 = validate($_POST['service_2']);
    $service_3 = validate($_POST['service_3']);
    $service_4 = validate($_POST['service_4']);
    $service_5 = validate($_POST['service_5']);

    if($title != '' && $url != '' && $amount != '' && $time_rate != '' && $service_1 != '' && $service_2 != '' && $service_3 != '' && $service_4 != '' && $service_5 != '') {
        $query = "INSERT INTO pricing (title,url,amount,time_rate,service_1,service_2,service_3,service_4,service_5) 
                    VALUE ('$title','$url','$amount','$time_rate','$service_1','$service_2','$service_3','$service_4','$service_5')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('pricing.php','Plan Added Successfully');
        }else{
            redirect('create-plan.php','Something Went Wrong');
        }
    }
    else{
       redirect('create-plan.php','Please fill all the inputs fields');
    }
}

// Update Pricing
if(isset($_POST['updatePlan'])){
    // Validate and retrieve form data
    $title = validate($_POST['title']);
    $amount = validate($_POST['amount']);
    $time_rate = validate($_POST['time_rate']);
    $url = validate($_POST['url']);
    $service_1 = validate($_POST['service_1']);
    $service_2 = validate($_POST['service_2']);
    $service_3 = validate($_POST['service_3']);
    $service_4 = validate($_POST['service_4']);
    $service_5 = validate($_POST['service_5']);

    $userId = validate($_POST['userId']);

    $user = getById('pricing', $userId);
    if($user['status'] != 200){
        redirect('pricing-edit.php?id='.$userId, 'No Such Id Found');
    }

    // Check if all fields are not empty
    if($title != '' && $url != '' && $amount != '' && $time_rate != '' && $service_1 != '' && $service_2 != '' && $service_3 != '' && $service_4 != '' && $service_5 != '') {
        // Update query
        $query = "UPDATE pricing SET
        title='$title',
        amount='$amount',
        service_1='$service_1',
        url='$url',
        time_rate='$time_rate'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('pricing.php', 'Post Updated Successfully');
        } else {
            redirect('pricing-edit.php?id='.$userId, 'Something Went Wrong');
        }
    } else {
        redirect('pricing-edit.php?id='.$userId, 'Please fill all the input fields');
    }
}
