<?php  
require '../config/function.php';

$paramResult = checkParamId('id');
if(is_numeric($paramResult)){
    $userId = validate($paramResult);

    $user = getById('pricing', $userId);
    if($user){
        $userDeleteRes = deleteQuery('pricing', $userId);
        if($userDeleteRes){
            redirect('pricing.php','Plan Deleted Successfully');
        } else {
            redirect('pricing.php','Failed to delete plan');
        }
    } else {
        redirect('pricing.php','Plan not found');
    }
} else {
    redirect('pricing.php',$paramResult);
}