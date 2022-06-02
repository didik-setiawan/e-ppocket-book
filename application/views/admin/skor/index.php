<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Skor</h1>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body table-responsive">

                    <?php if($this->session->flashdata('scs')){ ?>
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong><?= $this->session->flashdata('scs'); ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                    <?php } else if($this->session->flashdata('err')){ ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong><?= $this->session->flashdata('err'); ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                    <?php } ?>

                    <table class="table table-bordered table-hover" id="tableSkor">
                        <thead>
                            <tr class="bg-dark text-light">
                                <th>#</th>
                                <th>Name</th>
                                <th>Score</th>
                                <th>Time</th>
                                <th><i class="fa fa-cogs"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach($skor as $s){ ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $s->nama_siswa ?></td>
                                <td><?= $s->skor ?></td>
                                <td><?= date('d M Y / H:i:s' , $s->time); ?></td>
                                <td>
                                    <a href="<?= base_url('admin/skor/del_skor/') . $s->id_hasil; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"><i class="fa fa-trash"></i></a>
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
<script>
    $('#tableSkor').dataTable();
</script>