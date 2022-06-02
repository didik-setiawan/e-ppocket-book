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

  <div class="container mt-3 mb-5">
      <div class="row">
                <h4 class="text-center" style="font-family: rubik; font-size: 35px">
                    KUIS
                </h4>
            
          <div class="col-lg col-md col-sm">
                <div class="card shadow-0 border border-danger">
                    <div class="card-body">
                    <?php foreach($kuis as $k){ ?>
                        <div class="badge badge-primary"> Soal Kuis </div>
                        <input type="hidden" name="id_soal" id="id_soal" value="<?= $k->id_soal; ?>">
                        <input type="hidden" name="skor" id="skor" value="<?= $k->skor_soal; ?>">
                        <input type="hidden" name="kunci" id="kunci" value="<?= $k->kunci_jawaban; ?>">
                        <?= $k->soal; ?>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault1"
                                        value="A"
                                    />
                                    A. <label class="form-check-label" for="flexRadioDefault1"> <?= $k->opsi_a ?> </label>
                                </div>

                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault2"
                                        value="B"
                                    />
                                    B. <label class="form-check-label" for="flexRadioDefault2"> <?= $k->opsi_b ?> </label>
                                </div>

                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault3"
                                        value="C"
                                    />
                                    C. <label class="form-check-label" for="flexRadioDefault3"> <?= $k->opsi_c ?> </label>
                                </div>

                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault4"
                                        value="D"
                                    />
                                    D. <label class="form-check-label" for="flexRadioDefault4"> <?= $k->opsi_d ?> </label>
                                </div>

                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault5"
                                        value="E"
                                    />
                                    E. <label class="form-check-label" for="flexRadioDefault5"> <?= $k->opsi_e ?> </label>
                                </div>
                        
                                <?= $this->pagination->create_links(); ?>

                                <?php if($soal_terakhir->id_soal == $k->id_soal){ ?>
                                    <a href="<?= base_url('kuis/skor'); ?>" class="btn btn-success" onclick="return confirm('Apakah anda yakin sudah selesai?')" id="btn-selesai"><i class="fa fa-stop"></i> Selesai</a>
                                <?php } ?>
                    <?php } ?>


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
        var kunci_jawaban = $('#kunci').val();

        if(jawaban == kunci_jawaban){
            var score = $('#skor').val();
        } else {
            var score = 0;
        }

        $.ajax({
            url : "<?= base_url('kuis/input_jawaban'); ?>",
            method : "POST",
            data : {id_soal : id_soal, skor : score},
            success : function(d){
                console.log(d);
            }
        });

    });


</script>
</html>