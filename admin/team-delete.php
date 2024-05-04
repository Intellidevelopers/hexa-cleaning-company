<?php  
require '../config/function.php';

$paramResult = checkParamId('id');
if(is_numeric($paramResult)){
    $userId = validate($paramResult);

    $user = getById('team', $userId);
    if($user){
        $userDeleteRes = deleteQuery('team', $userId);
        if($userDeleteRes){
            redirect('teams.php','Team Member Deleted Successfully');
        } else {
            redirect('teams.php','Failed to delete team Member');
        }
    } else {
        redirect('teams.php','Team Member not found');
    }
} else {
    redirect('teams.php',$paramResult);
}