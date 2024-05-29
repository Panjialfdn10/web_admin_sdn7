<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>


<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail Soal</h4>
            <form class="forms-sample" id="formEditSoal" action="<?= base_url('soal/update_soal/'.$soal->id_soal) ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Masukkan pertanyaan" value="<?= $soal->pertanyaan ?>">
                </div>
                <div class="form-group">
                    <label for="pilihan_a">Pilihan A</label>
                    <input type="text" class="form-control" id="pilihan_a" name="pilihan_a" placeholder="Masukkan pilihan A" value="<?= $soal->pilihan_a ?>">
                </div>
                <div class="form-group">
                    <label for="pilihan_b">Pilihan B</label>
                    <input type="text" class="form-control" id="pilihan_b" name="pilihan_b" placeholder="Masukkan pilihan B" value="<?= $soal->pilihan_b ?>">
                </div>
                <div class="form-group">
                    <label for="pilihan_c">Pilihan C</label>
                    <input type="text" class="form-control" id="pilihan_c" name="pilihan_c" placeholder="Masukkan pilihan C" value="<?= $soal->pilihan_c ?>">
                </div>
                <div class="form-group">
                    <label for="pilihan_d">Pilihan D</label>
                    <input type="text" class="form-control" id="pilihan_d" name="pilihan_d" placeholder="Masukkan pilihan D" value="<?= $soal->pilihan_d ?>">
                </div>
                <div class="form-group">
                    <label for="jawaban">Jawaban Benar</label>
                    <select class="form-control" id="jawaban" name="jawaban">
                        <option value="A" <?= ($soal->jawaban == 'A') ? 'selected' : ''; ?>>A</option>
                        <option value="B" <?= ($soal->jawaban == 'B') ? 'selected' : ''; ?>>B</option>
                        <option value="C" <?= ($soal->jawaban == 'C') ? 'selected' : ''; ?>>C</option>
                        <option value="D" <?= ($soal->jawaban == 'D') ? 'selected' : ''; ?>>D</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2" id="editSoal">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>