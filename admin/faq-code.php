<?php 
require '../config/function.php';

// Create Faq
if(isset($_POST['createFaq'])) {
    $question = validate($_POST['question']);
    $answer = validate($_POST['answer']);

    if($question != '' || $answer != '') {
        $query = "INSERT INTO faq (question, answer) 
                    VALUE ('$question','$answer')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('faq.php','Faq Added Successfully');
        }else{
            redirect('create-faq.php','Something Went Wrong');
        }
    }
    else{
       redirect('create-faq.php','Please fill all the inputs fields');
    }
}

// Update Faq details
if(isset($_POST['updateFaq'])){
    $question = validate($_POST['question']);
    $answer = validate($_POST['answer']);

    $userId = validate($_POST['userId']);

    $user = getById('faq',$userId);
    if($user['status'] != 200){
        redirect('faq-edit.php?id='.$userId,'No Such Id Found');
    }

    if($question != '' || $answer != '') {
        $query = "UPDATE faq SET
        question='$question',
        answer='$answer'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('faq.php','faq Updated Successfully');
        }else{
            redirect('create-faq.php','Something Went Wrong');
        }
    }
    else{
       redirect('create-faq.php','Please fill all the inputs fields');
    }
}