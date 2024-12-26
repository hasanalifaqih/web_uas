<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary">Daftar Mobil</h1>
        <a href="/mobil/create" class="btn btn-lg btn-success shadow">Tambah Mobil</a>
    </div>

    <form action="/mobil/search" method="post" class="mb-4">
        <div class="input-group">
            <input 
                type="text" 
                name="keyword" 
                class="form-control form-control-lg" 
                placeholder="Cari mobil..."
                aria-label="Cari mobil"
            >
            <button class="btn btn-lg btn-primary" type="submit">
                <i class="bi bi-search"></i> Cari
            </button>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Nama Mobil</th>
                    <th>Merek</th>
                    <th>Tahun</th>
                    <th>Harga Sewa</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($mobils)): ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">Tidak ada data mobil tersedia.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($mobils as $mobil): ?>
                        <tr>
                            <td><?= $mobil['nama_mobil'] ?></td>
                            <td><?= $mobil['merek'] ?></td>
                            <td><?= $mobil['tahun'] ?></td>
                            <td>Rp <?= number_format($mobil['harga_sewa'], 0, ',', '.') ?></td>
                            <td class="text-center">
                                <a href="/mobil/edit/<?= $mobil['id'] ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <a href="/mobil/delete/<?= $mobil['id'] ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus mobil ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
