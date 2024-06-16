<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h4 class="card-title">Materi</h4>
                <div class="btn-tambah-siswa">
                    <a href="<?= base_url('materi/tambah_materi') ?>" class="btn btn-primary"><i class="ti-book mr-2"></i>Tambah Materi</a>
                </div>
            </div>    
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 20%;">Poto</th>
                                <th style="width: 50%;">Nama Materi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($materi as $materi): ?>
                            <tr>
                                <td>
                                    <?php if ($materi->imageMateri): ?>
                                        <img src="<?= base_url('uploads/' . $materi->imageMateri) ?>" width="50">
                                    <?php endif; ?>
                                </td>
                                <td><?= esc($materi->namaMateri) ?></td>
                                <td>
                                    <a href="<?= base_url('materi/kelola_materi/' . $materi->idMateri) ?>" class="btn btn-primary btn-sm">Kelola Materi</a>
                                    <a href="<?= base_url('materi/detail_materi/' . $materi->idMateri) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="<?= base_url('materi/delete_materi/' . $materi->idMateri) ?>" method="post" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
