<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>


<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail Siswa</h4>
            <form action="<?= base_url('siswa/update_siswa/' . $siswa->id_siswa) ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" id="nis" name="no_nis" value="<?= $siswa->no_nis ?>" placeholder="No NIS">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama_siswa" value="<?= $siswa->nama_siswa ?>" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" id="jk" name="jenis_kelamin">
                        <option <?= $siswa->jenis_kelamin == 'Laki Laki' ? 'selected' : '' ?>>Laki Laki</option>
                        <option <?= $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat_siswa" value="<?= $siswa->alamat_siswa ?>" placeholder="Alamat Siswa">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="poto_siswa" id="poto_siswa" class="file-upload-default">
                    <input type="hidden" name="existing_poto" value="<?= $siswa->poto_siswa ?>">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    <div class="tampilkan-gambar">
                        <?php if ($siswa->poto_siswa): ?>
                            <img src="<?= base_url($siswa->poto_siswa) ?>" alt="<?= $siswa->nama_siswa ?>" width="100">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $siswa->email ?>" placeholder="Masukan Email Siswa">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>