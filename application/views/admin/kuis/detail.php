<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Detail kuis</h1>
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <?= $kuis->soal; ?>
                  <div class="row ml-1">
                      A.<?= $kuis->opsi_a; ?>
                  </div>
                  <div class="row ml-1">
                      B.<?= $kuis->opsi_b; ?>
                  </div>
                  <div class="row ml-1">
                      C.<?= $kuis->opsi_c; ?>
                  </div>
                  <div class="row ml-1">
                      D.<?= $kuis->opsi_d; ?>
                  </div>
                  <div class="row ml-1">
                      E.<?= $kuis->opsi_e; ?>
                  </div>
                  <p>Jawaban : <strong><?= $kuis->kunci_jawaban; ?></strong></p>
                  <p><strong>Penjelasan Jawaban : </strong></p>
                  <?= $kuis->penjelasan; ?>
                  <p>Skor per soal : <strong><?= $kuis->skor_soal; ?></strong></p>
                  <a href="<?= base_url('admin/kuis'); ?>" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- /.container-fluid -->
