<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h4 class="card-title">List Soal</h4>
                <div class="btn-tambah-soal">
                    <a href="<?= base_url('soal/tambah_soal') ?>" class="btn btn-primary"><i class="ti-menu mr-2"></i>Tambah</a>
                </div>
            </div>    
        </div>
        <div class="row mt-3">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Pertanyaan</th>
                            <th style="width: 15%;">Pilihan A</th>
                            <th style="width: 15%;">Pilihan B</th>
                            <th style="width: 15%;">Pilihan C</th>
                            <th style="width: 15%;">Pilihan D</th>
                            <th style="width: 10%;">Jawaban Benar</th>
                            <th style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($soal as $row) : ?>
                            <tr>
                                <td><?= $row->pertanyaan ?></td>
                                <td><?= $row->pilihan_a ?></td>
                                <td><?= $row->pilihan_b ?></td>
                                <td><?= $row->pilihan_c ?></td>
                                <td><?= $row->pilihan_d ?></td>
                                <td><?= $row->jawaban ?></td>
                                <td>
                                    <a href="<?= base_url('soal/detail_soal/' . $row->id_soal); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="<?= base_url('soal/delete_soal/' . $row->id_soal) ?>" method="post" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
