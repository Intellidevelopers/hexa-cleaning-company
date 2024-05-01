<?php  
require '../config/function.php';

$paramResult = checkParamId('id');
if(is_numeric($paramResult)){
    $userId = validate($paramResult);

    $user = getById('faq', $userId);
    if($user){
        $userDeleteRes = deleteQuery('faq', $userId);
        if($userDeleteRes){
            redirect('faq.php','Post Deleted Successfully');
        } else {
            redirect('faq.php','Failed to delete post');
        }
    } else {
        redirect('faq.php','Post not found');
    }
} else {
    redirect('faq.php',$paramResult);
}