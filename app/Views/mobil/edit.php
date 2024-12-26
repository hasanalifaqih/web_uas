<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Edit Mobil</h1>
        </div>
        <div class="card-body">
            <form action="/mobil/update/<?= $mobil['id'] ?>" method="post">
                <div class="mb-3">
                    <label for="nama_mobil" class="form-label">Nama Mobil</label>
                    <input 
                        type="text" 
                        id="nama_mobil" 
                        name="nama_mobil" 
                        class="form-control" 
                        value="<?= $mobil['nama_mobil'] ?>" 
                        required>
                </div>
                <div class="mb-3">
                    <label for="merek" class="form-label">Merek</label>
                    <input 
                        type="text" 
                        id="merek" 
                        name="merek" 
                        class="form-control" 
                        value="<?= $mobil['merek'] ?>" 
                        required>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input 
                        type="number" 
                        id="tahun" 
                        name="tahun" 
                        class="form-control" 
                        value="<?= $mobil['tahun'] ?>" 
                        required>
                </div>
                <div class="mb-3">
                    <label for="harga_sewa" class="form-label">Harga Sewa (Rp)</label>
                    <input 
                        type="number" 
                        id="harga_sewa" 
                        name="harga_sewa" 
                        class="form-control" 
                        value="<?= $mobil['harga_sewa'] ?>" 
                        required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/mobil" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>