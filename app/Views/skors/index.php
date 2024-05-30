<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h4 class="card-title">Skors</h4>
            </div>    
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>ID Siswa</th>
                                <th>Nama Siswa</th>
                                <th>Skor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($skors) && is_array($skors)): ?>
                                <?php foreach ($skors as $skor): ?>
                                    <tr>
                                        <td><?= esc($skor->id_siswa) ?></td>
                                        <td><?= esc($skor->nama_siswa) ?></td>
                                        <td><?= esc($skor->skors) ?></td>
                                        <td>
                                            <a href="<?= base_url('soal/detail_soal/' . $skor->id_skors); ?>" class="btn btn-sm btn-warning">Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4">No data found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
