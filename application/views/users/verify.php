<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Identity</title>
</head>

<body>
    <h1>Verify Identity</h1>
	<form action="<?php echo base_url('forward')?>" method="post">
        <input type="hidden" name="custom_username" value="<?= $custom_username ?>">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Submit</button>
    </form>
</body>

</html> -->

<!doctype html>
<html lang="en">

<head>
    <title>Verify Identity</title>
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
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Sitesaverhub confirmation </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Please Enter Password You Used When Registration</h3>
                        <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-danger">
                            <center><?php echo $this->session->flashdata('message'); ?></center>
                        </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url('forward')?>" method="post">
                          <input type="hidden" name="custom_username" value="<?= $custom_username ?>">
                            <div class="form-group d-flex">
                                <input type="password" name="password" class="form-control rounded-left"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-md-col-6">
                                    <a href="./">Back to Sitesaverhub</a>
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

