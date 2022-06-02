<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Settings Account</h1>
  <?php if($this->session->flashdata('err_msg')){ ?>
    <div class="alert alert-danger"><?= $this->session->flashdata('err_msg'); ?></div>
    <?php } else if($this->session->flashdata('msg')){  ?>
        <div class="alert alert-success"><?= $this->session->flashdata('msg'); ?></div>
    <?php } ?>
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Nama & Email</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Foto</a>
                        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Password</a>
                    </div>
                </nav>
                <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form action="<?= base_url('admin/settings_account/email'); ?>" method="post">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="<?= $admin->nama; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="<?= $admin->email; ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <?= form_open_multipart('admin/settings_account/foto'); ?>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-1 col-form-label">Foto</label>
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/user/') . $admin->img; ?>" width="150px" class="img-thumbnail">
                                </div>
                                <div class="col-sm-8">
                                <input type="file" class="form-control" name="foto" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <form action="<?= base_url('admin/settings_account/password'); ?>" method="post">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password Lama</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="old_pass" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password Baru</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="new_pass1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="new_pass2" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- /.container-fluid -->
