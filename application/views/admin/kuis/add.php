<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Kuis</h1>
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                <form action="<?= base_url('admin/kuis/add'); ?>" method="post">
                <div class="form-group">
                    <label><strong>Soal</strong></label>
                    <?= form_error('soal','<small class="text-danger">','</small>'); ?>
                    <textarea name="soal" id="soal" cols="30" rows="10" required><?= set_value('soal'); ?></textarea>
                </div>

<div class="form-group">
    <Label><strong>Jawaban</strong></Label>
    <table class="table table-bordered">
        <tr>
            <th>Opsi A <br><?= form_error('A','<small class="text-danger">','</small>'); ?></th>
            <td><textarea name="A" id="opsi_a" cols="30" rows="5"><?= set_value('A'); ?></textarea></td>
        </tr>
        <tr>
            <th>Opsi B <br><?= form_error('B','<small class="text-danger">','</small>'); ?></th>
            <td><textarea name="B" id="opsi_b" cols="30" rows="5"><?= set_value('B'); ?></textarea></td>
        </tr>
        <tr>
            <th>Opsi C <br><?= form_error('C','<small class="text-danger">','</small>'); ?></th>
            <td><textarea name="C" id="opsi_c" cols="30" rows="5"><?= set_value('C'); ?></textarea></td>
        </tr>
        <tr>
            <th>Opsi D <br><?= form_error('D','<small class="text-danger">','</small>'); ?></th>
            <td><textarea name="D" id="opsi_d" cols="30" rows="5"><?= set_value('D'); ?></textarea></td>
        </tr>
        <tr>
            <th>Opsi E <br><?= form_error('E','<small class="text-danger">','</small>'); ?></th>
            <td><textarea name="E" id="opsi_e" cols="30" rows="5"><?= set_value('E'); ?></textarea></td>
        </tr>
    </table>
</div>

                <div class="form-group">
                    <label><strong>Kunci Jawaban</strong></label>
                    <select name="jawaban" class="form-control" required>
                        <option value="">--Pilih salah satu--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>

                <div class="form-group">
                    <label><strong>Skor Soal</strong></label>
                    <input type="number" name="skor" class="form-control" value="<?= set_value('skor'); ?>" required>
                </div>

                <div class="form-group">
                    <label><strong>Penjelasan Jawaban</strong></label>
                    <?= form_error('penjelasan','<small class="text-danger">','</small>'); ?>
                    <textarea name="penjelasan" id="penjelasan" cols="30" rows="10"><?= set_value('penjelasan'); ?></textarea>
                </div>

                <a href="<?= base_url('admin/kuis'); ?>" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>
<script src="<?= base_url('assets/ckeditor_standard/ckeditor.js'); ?>"></script>
<script>
    CKEDITOR.replace('soal');
    CKEDITOR.replace('opsi_a');
    CKEDITOR.replace('opsi_b');
    CKEDITOR.replace('opsi_c');
    CKEDITOR.replace('opsi_d');
    CKEDITOR.replace('opsi_e');
    CKEDITOR.replace('penjelasan');
</script>
<!-- /.container-fluid -->
