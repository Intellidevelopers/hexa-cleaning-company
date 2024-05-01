<?php

    require '../config/function.php';

?>

<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo2/ecommerce/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 18:40:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="/images/favicon.png">
    <title>Settings | DashLite Admin Template</title>
    <link rel="stylesheet" href="assets/css/dashlitee5ca.css?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="assets/css/themee5ca.css?ver=3.2.3">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        
                    </div>
                </div>
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Settings</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="card">
                                        <div class="card-inner">
                                            <h5 class="card-title">Website Setting</h5>
                                            <p>Here is your basic settings of your website.</p>
                                            <?=  alertMessage(); ?>
                                        
                                            <form action="settings-code.php" class="gy-3 form-settings" method="POST">
                                                <?php
                                                $setting = getById('setting',1);
                                                ?>

                                                <input type="hidden" name="settingId" value="<?= $setting['data']['id'] ?? 'insert'?>">

                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group"><label class="form-label"
                                                                for="site-name">Website Title</label><span
                                                                class="form-note">Specify the title of your
                                                                website.</span></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" value="<?= $setting['data']['title'] ?? ""?>" name="title" id="title" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group"><label class="form-label"
                                                                for="site-email">Site Email</label><span
                                                                class="form-note">Specify the email address of your
                                                                website.</span></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" value="<?= $setting['data']['email'] ?? ""?>" name="email" id="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group"><label class="form-label"
                                                                for="site-copyright">Site Copyright</label><span
                                                                class="form-note">Copyright information of your
                                                                website.</span></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" value="<?= $setting['data']['copyright'] ?? ""?>" name="copyright" id="copyright">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group"><label class="form-label"
                                                                for="site-phone">Phone</label><span
                                                                class="form-note">Phone number of your
                                                                website.</span></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" value="<?= $setting['data']['phone'] ?? ""?>" name="phone" id="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group"><label class="form-label"
                                                                for="site-copyright">Site Address</label><span
                                                                class="form-note">Address information of your
                                                                company.</span></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" value="<?= $setting['data']['address'] ?? ""?>" name="address" id="address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group"><label class="form-label">Main
                                                                Website</label><span class="form-note">Specify the URL
                                                                if your main website is external.</span></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" value="<?= $setting['data']['url'] ?? ""?>" name="url" name="url">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row g-3">
                                                    <div class="col-lg-7 offset-lg-5">
                                                        <div class="form-group mt-2">
                                                            <button type="submit" name="updateSetting" class="btn btn-lg btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    
    
    <script src="assets/js/bundlee5ca.js?ver=3.2.3"></script>
    <script src="assets/js/scriptse5ca.js?ver=3.2.3"></script>
    <script src="assets/js/demo-settingse5ca.js?ver=3.2.3"></script>
</body>
<!-- Mirrored from dashlite.net/demo2/ecommerce/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 18:40:14 GMT -->

</html>