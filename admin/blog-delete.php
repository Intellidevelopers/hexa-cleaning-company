<?php  
require '../config/function.php';

$paramResult = checkParamId('id');
if(is_numeric($paramResult)){
    $userId = validate($paramResult);

    $user = getById('blog', $userId);
    if($user){
        $userDeleteRes = deleteQuery('blog', $userId);
        if($userDeleteRes){
            redirect('blog.php','Post Deleted Successfully');
        } else {
            redirect('blog.php','Failed to delete post');
        }
    } else {
        redirect('blog.php','Post not found');
    }
} else {
    redirect('blog.php',$paramResult);
}