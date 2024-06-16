<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail Materi</h4>
            <form class="forms-sample" id="formTambahSiswa" action="<?= base_url('materi/update_materi/' . $materi->idMateri) ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="namaMateri">Nama Materi</label>
                    <input type="text" class="form-control" id="namaMateri" name="namaMateri" placeholder="Masukan Nama Materi" value="<?= esc($materi->namaMateri) ?>">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="imageMateri" id="imageMateri" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2 " id="tambahMateri">Tambah</button>
            </form>
        </div>
    </div>
</div>

<!-- <script src="<?= base_url('js\siswa.js') ?>"></script> -->
<?= $this->endSection(); ?>
