<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>css/mdb.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>fontawesome/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;800&display=swap"
      rel="stylesheet"
    />

    <style>
      #mulai {
        width: 100%;
        height: 40px;
      }
    </style>

    <script src="<?= base_url('assets/home/'); ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>js/mdb.min.js"></script>
    <title>Kuis</title>
  </head>
  <body style="background-color: #bfbfbf">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="card shadow border border-danger" style="margin-top: 100px;">
              <div class="card-body">
                  <h4 class="text-center">KUIS</h4>
                  <hr>
                  <form action="<?= base_url('kuis/to_kuis'); ?>" method="post">
                  <input type="text" name="name" class="form-control" id="name" id="input_name" placeholder="Masukkan Nama Anda" required style="height: 50px;">
                  <div style="margin: 30px 20px 20px 20px;"></div>
                  <button type="submit" class="btn btn-success btn-rounded" id="mulai">Mulai</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

  </body>
</html>
