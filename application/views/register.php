<!doctype html>
<html lang="en">

<head>
    <title>Register Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="logins/css/style.css">
    <style>
        .error-message {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}
        
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
               
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                         <h5 class="text-center mb-4">Register Page</h5>
                        <h3 class="text-center mb-4">Please Create an account</h3>
                        <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <center><?php echo $this->session->flashdata('error'); ?></center>
                        </div>
                        <?php endif; ?>
                         <?php if ($this->session->flashdata('errors')): ?>
                        <div class="alert alert-success">
                            <center><?php echo $this->session->flashdata('errors'); ?></center>
                        </div>
                        <?php endif; ?>
                        <form action="checkvalidation" method="POST" class="login-form">
                            <div class="form-group">
                                <input type="text" name="custom_username" class="form-control rounded-left"
                                    placeholder="custom_username" pattern="[A-Za-z0-9]+" title="White spaces and other sign like =,+,- are not allowed" required>
                                      <center><p class="error-message"><?php echo form_error('custom_username'); ?></p></center>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control rounded-left" placeholder="Email"
                                    required>
                                  <center><p class="error-message"><?php echo form_error('email'); ?></p></center>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="password" class="form-control rounded-left"
                                    placeholder="Password" required>

                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50" style="margin-left: -15px !important;">
                                    <a href="<?= base_url("/") ?>"><label class="checkbox-wrap checkbox-primary">Back To Site

                                        </label></a>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="loginpage">Login Here?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="Next" class="btn btn-primary rounded submit p-3 px-5">Get
                                    Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="login/js/jquery.min.js"></script>
    <script src="login/js/popper.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>

</body>

</html>
