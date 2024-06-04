<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h4 class="card-title">List Siswa</h4>
                <div class="btn-tambah-siswa">
                    <a href="<?= base_url('siswa/tambah_siswa') ?>" class="btn btn-primary"><i class="ti-user mr-2"></i>Tambah</a>
                </div>
            </div>    
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Poto</th>
                                <th style="width: 10%;">No NIS</th>
                                <th style="width: 10%;">Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No Handphone</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($siswa as $siswa): ?>
                            <tr>
                                <td>
                                    <?php if ($siswa->poto_siswa): ?>
                                        <img src="<?= base_url('uploads/' . $siswa->poto_siswa) ?>" alt="<?= esc($siswa->nama_siswa) ?>" width="50">
                                    <?php endif; ?>
                                </td>
                                <td><?= esc($siswa->no_nis) ?></td>
                                <td><?= esc($siswa->nama_siswa) ?></td>
                                <td><?= esc($siswa->jenis_kelamin) ?></td>
                                <td><?= esc($siswa->alamat_siswa) ?></td>
                                <td><?= esc($siswa->email) ?></td>
                                <td><?= esc($siswa->no_hp) ?></td>
                                <td>
                                    <a href="<?= base_url('siswa/detail_siswa/' . $siswa->id_siswa) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="<?= base_url('siswa/delete_siswa/' . $siswa->id_siswa) ?>" method="post" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
