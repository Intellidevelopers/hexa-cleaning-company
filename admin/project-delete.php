<?php  
require '../config/function.php';

$paramResult = checkParamId('id');
if(is_numeric($paramResult)){
    $userId = validate($paramResult);

    $user = getById('projects', $userId);
    if($user){
        $userDeleteRes = deleteQuery('projects', $userId);
        if($userDeleteRes){
            redirect('projects.php','Project Deleted Successfully');
        } else {
            redirect('projects.php','Failed to delete project');
        }
    } else {
        redirect('projects.php','Project not found');
    }
} else {
    redirect('projects.php',$paramResult);
}