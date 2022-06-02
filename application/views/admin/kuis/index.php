<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Kuis</h1>
  <?php if($this->session->flashdata('msg')){ ?>
  <div class="alert alert-success"><?= $this->session->flashdata('msg'); ?></div>
  <?php } ?>
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                <a href="<?= base_url('admin/kuis/add'); ?>" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Kuis</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Soal Kuis</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach($kuis as $k){ ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $k->soal; ?></td>
                            <td>
                                <a href="<?= base_url('admin/kuis/delete/') . $k->id_soal; ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                <a href="<?= base_url('admin/kuis/edit/') . $k->id_soal; ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                                <a href="<?= base_url('admin/kuis/detail/') . $k->id_soal; ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Detail</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- /.container-fluid -->
