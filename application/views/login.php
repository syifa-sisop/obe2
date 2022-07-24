
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url()?>assets/registrasi/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/registrasi/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>assets/registrasi/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/registras/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>assets/registrasi/css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Form Login</h2>
                    <?php echo $this->session->flashdata('message') ?>
                    <form action="<?= base_url();?>C_registrasi/masuk" method="POST" class="register-form" id="login-form">

                        <div class="input-group">
                            <input class="input--style-3 js-datepicke" type="text" placeholder="Email" name="email" autocomplete="off">
                            <i class="zmdi zmdi-account-circle input-icon"></i>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicke" type="password" placeholder="Password" name="password" autocomplete="off">
                            <i class="zmdi zmdi-key input-icon"></i>
                        </div>

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Login</button><br><br><hr><br>
                            <a href="<?php echo base_url("C_registrasi") ?>" class="signup-image-link">Create an account</a><br>
                            <a href="<?php echo base_url("C_dashboard") ?>" class="signup-image-link">Back to Home</a><br>
                            <a href="<?php echo base_url('Lupa_password') ?>">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url()?>assets/registrasi/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url()?>assets/registrasi/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url()?>assets/registrasi/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/registrasi/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>assets/registrasi/js/global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->