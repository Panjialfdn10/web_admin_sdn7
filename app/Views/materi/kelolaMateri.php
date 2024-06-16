<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Kelola Materi</h4>
            <form class="forms-sample" id="formKelolaMateri" action="<?= base_url('materi/post_kelolaMateri') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="namaMateri">Nama Materi</label>
                    <input class="form-control" id="namaMateri" name="namaMateri" value="<?= esc($materi->namaMateri) ?>" disabled>
                    <input type="hidden" name="idMateri" value="<?= esc($materi->idMateri) ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"><?= isset($detailMateri->deskripsiKontenMateri) ? esc($detailMateri->deskripsiKontenMateri) : '' ?></textarea>
                </div>
                <div class="form-group">
                    <label for="ciriCiri">Ciri Ciri</label>
                    <input class="form-control" id="ciriCiri" name="ciriCiri" placeholder="Masukkan Ciri Cirinya" value="<?= isset($detailMateri->ciriCiriKontenMateri) ? esc($detailMateri->ciriCiriKontenMateri) : '' ?>">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="imageHabitat" id="imageHabitat" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2" id="kelolaMateri">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
