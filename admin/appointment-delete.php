<?php  
require '../config/function.php';

$paramResult = checkParamId('id');
if(is_numeric($paramResult)){
    $userId = validate($paramResult);

    $user = getById('appointment', $userId);
    if($user){
        $userDeleteRes = deleteQuery('appointment', $userId);
        if($userDeleteRes){
            redirect('appointment.php','Message Deleted Successfully');
        } else {
            redirect('appointment.php','Failed to delete message');
        }
    } else {
        redirect('appointment.php','Message not found');
    }
} else {
    redirect('appointment.php',$paramResult);
}