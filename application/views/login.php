<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>logins/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <!--<div class="col-md-6 text-center mb-5">-->
                <!--    <bold><h2 class="text-center mb-4">Login Page</h2></bold>-->
                <!--</div>-->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                         <h5 class="text-center mb-4">Login Page</h5>
                        <h3 class="text-center mb-4">Have an account?</h3>
                        <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-danger">
                            <center><?php echo $this->session->flashdata('message'); ?></center>
                        </div>
                        <?php endif; ?>
                          <?php if ($this->session->flashdata('messages')): ?>
                        <div class="alert alert-success">
                            <center><?php echo $this->session->flashdata('messages'); ?></center>
                        </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url() ?>checkingusers" method="POST" class="login-form">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control rounded-left" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="password" class="form-control rounded-left"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="<?= base_url("registerpage") ?>">Register Now</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get
                                    Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url() ?>login/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>login/js/popper.js"></script>
    <script src="<?php echo base_url() ?>login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>login/js/main.js"></script>

</body>

</html>
