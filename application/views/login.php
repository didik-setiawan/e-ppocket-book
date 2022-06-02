<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Pocket Book - Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/dashboard/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/dashboard/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                      
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                        <?php if($this->session->flashdata('err_msg')){ ?>
                                        <div class="alert alert-danger p-0">
                                            <strong><?= $this->session->flashdata('err_msg'); ?></strong>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <form class="user" action="<?= base_url('login'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                                <?= form_error('email','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                                <?= form_error('password','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                         
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/dashboard/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/dashboard/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/dashboard/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/dashboard/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>