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
    <script src="<?= base_url('assets/home/'); ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>js/mdb.min.js"></script>
    <title>Kuis</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="row">
        <h4 class="text-center" style="font-family: rubik; font-size: 35px">
          <a
            href="<?= base_url('kuis/back'); ?>"
            class="btn btn-light btn-sm position-absolute top-0 start-0 mt-4"
            style="margin-left: 20px"
            ><i class="fa fa-arrow-left"></i
          ></a>
          KUIS
        </h4>
        <div class="col-lg-12">
          <div class="card shadow-0">
              <div class="card-body">
                <?php $j = 1; $i = 1; foreach($kuis as $k){ ?>
                   <?= $k->soal; ?>
                   <input type="hidden" id="id_soal" name="id_soal" value="<?= $k->id_soal; ?>">
                   <div class="row">
                   <div class="btn-group">
                    <?php $option = ['A','B','C','D','E']; foreach ($option as $o) { ?>
                        <input type="radio" value="<?= $o; ?>" class="btn-check" name="options" id="options<?= $j++; ?><?= $o ?>" autocomplete="off"/>
                        <label class="btn btn-success" for="options<?= $i++; ?><?= $o; ?>"><?= $o; ?></label>
                    <?php } ?>
                    </div>
                </div>
                <?php } ?>
                    <?= $this->pagination->create_links(); ?>
                <a href="<?= base_url('kuis/skor'); ?>" onclick="return confirm('Apakah anda yakin sudah selesai?')" class="btn btn-danger"><i class="fa fa-stop"></i> Selesai</a>

              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>

    $('input:radio').on('click', function(){
        var jawaban = $(this).val();
        var id_soal = $('#id_soal').val();
        
        $.ajax({
            url : "<?= base_url('kuis/save_jawaban'); ?>",
            method : "POST",
            data : {id_soal : id_soal, jawaban : jawaban},
            success : function(d){
                console.log(d);
            }
        });

    });
  </script>
</html>
