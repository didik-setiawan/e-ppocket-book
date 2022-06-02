<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>css/mdb.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>fontawesome/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;800&display=swap"
      rel="stylesheet"
    />
    <script src="<?= base_url('assets/home/'); ?>js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url('assets/home/'); ?>js/mdb.min.js"></script> -->
    <title>Skor</title>
  </head>
  <body style="background-color: #c7c7c7">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card shadow-0 border border-primary" style="margin-top: 80px;">
            <div class="card-body text-center">
                <h4 class="text-center">KUIS</h4>
                  <hr>
                  <h5 class="text-center"><b><?= $this->session->userdata('name'); ?></b></h5>
                  <p style="margin-bottom: -5px;">Skor anda</p>
                  <p style="font-size: 50px;"><b><?= $skor->skor_akhir; ?></b></p>
                  <hr>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <a href="<?= base_url('kuis/back'); ?>" class="btn btn-warning btn-sm">Kembali ke halaman utama</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="<?= base_url('kuis/coba_kembali'); ?>" class="btn btn-success btn-sm">Ulangi Kuis</a>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
