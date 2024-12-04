<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?=$title;?></title>
        <meta content="HH Links EDU" name="description" />
        <meta content="Hirwa" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?=base_url();?>/assets/images/favicon.ico">

        <link href="<?=base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url();?>/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url();?>/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="pb-0">

        

        <!-- Begin page -->
        <div class="accountbg">
            
            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                
                                        <h3 class="text-center mt-0 m-b-15">
                                            <a href="#" class="logo logo-admin"><img src="<?=base_url();?>/assets/images/logo-dark.png" height="30" alt="logo"></a>
                                        </h3>
                
                                        <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>

                                        <?php
                                        if (!empty($this->session->flashdata('msg'))) {
                                            ?>
                                            <div class="alert alert-danger">
                                                <label class="alert-heading">Unable to login</label>
                                                <p><?php echo $this->session->flashdata('msg');?></p>
                                            </div>
                                            <?php
                                        }
                                        ?>
                
                                        <div class="p-2">
                                            <form class="form-horizontal m-t-20" method="post" action="<?=base_url();?>login/login_pro" id="frm_login">
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" name="email" required="" placeholder="Enter your Email" minlength="4">
                                                    </div>
                                                </div>
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="password" name="password" required="" placeholder="Enter your Password" minlength="6">
                                                    </div>
                                                </div>
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                                    </div>
                                                </div>
                
                                                <div class="form-group m-t-10 mb-0 row">
                                                    <div class="col-sm-7 m-t-20">
                                                        <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="<?=base_url();?>/assets/js/jquery.min.js"></script>
        <script src="<?=base_url();?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url();?>/assets/js/modernizr.min.js"></script>
        <script src="<?=base_url();?>/assets/js/detect.js"></script>
        <script src="<?=base_url();?>/assets/js/fastclick.js"></script>
        <script src="<?=base_url();?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url();?>/assets/js/jquery.blockUI.js"></script>
        <script src="<?=base_url();?>/assets/js/waves.js"></script>

        <!-- App js -->
        <script src="<?=base_url();?>/assets/js/app.js"></script>

    </body>
</html>
