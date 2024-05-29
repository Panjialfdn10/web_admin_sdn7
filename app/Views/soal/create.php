<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Tambah Soal Pilihan Ganda</h4>
        <form class="forms-sample" id="formTambahSoalPilihanGanda" action="<?= base_url('soal/post_soal_pilihan_ganda') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Masukkan pertanyaan">
                </div>
                <div class="form-group">
                    <label for="pilihan_a">Pilihan A</label>
                    <input type="text" class="form-control" id="pilihan_a" name="pilihan_a" placeholder="Masukkan pilihan A">
                </div>
                <div class="form-group">
                    <label for="pilihan_b">Pilihan B</label>
                    <input type="text" class="form-control" id="pilihan_b" name="pilihan_b" placeholder="Masukkan pilihan B">
                </div>
                <div class="form-group">
                    <label for="pilihan_c">Pilihan C</label>
                    <input type="text" class="form-control" id="pilihan_c" name="pilihan_c" placeholder="Masukkan pilihan C">
                </div>
                <div class="form-group">
                    <label for="pilihan_d">Pilihan D</label>
                    <input type="text" class="form-control" id="pilihan_d" name="pilihan_d" placeholder="Masukkan pilihan D">
                </div>
                <div class="form-group">
                    <label for="jawaban">Jawaban Benar</label>
                    <select class="form-control" id="jawaban" name="jawaban">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary mr-2" id="tambahSoalPilihanGanda">Tambah</button>
        </form>
    </div>
</div>

<script src="<?= base_url('js\siswa.js') ?>"></script>
<?= $this->endSection(); ?>
