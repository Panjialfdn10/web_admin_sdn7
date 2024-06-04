<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Siswa</h4>
            <form class="forms-sample" id="formTambahSiswa" action="<?= base_url('siswa/post_siswa') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="number" class="form-control" id="nis" name="no_nis" placeholder="No NIS">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama_siswa" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" id="jk" name="jenis_kelamin">
                        <option>Laki Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat_siswa" placeholder="Alamat Siswa">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="poto_siswa" id="poto_siswa" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Siswa">
                </div>
                <div class="form-group">
                    <label for="no_hp">No Handphone</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Email Siswa">
                </div>
                <button type="submit" class="btn btn-primary mr-2 " id="tambahSiswa">Tambah</button>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('js\siswa.js') ?>"></script>
<?= $this->endSection(); ?>
