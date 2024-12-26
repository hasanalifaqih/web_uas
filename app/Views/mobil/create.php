<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h1 class="h4 mb-0">Tambah Mobil</h1>
        </div>
        <div class="card-body">
            <form action="/mobil/store" method="post">
                <div class="mb-3">
                    <label for="nama_mobil" class="form-label">Nama Mobil</label>
                    <input 
                        type="text" 
                        id="nama_mobil" 
                        name="nama_mobil" 
                        class="form-control" 
                        placeholder="Masukkan nama mobil" 
                        required>
                </div>
                <div class="mb-3">
                    <label for="merek" class="form-label">Merek</label>
                    <input 
                        type="text" 
                        id="merek" 
                        name="merek" 
                        class="form-control" 
                        placeholder="Masukkan merek mobil" 
                        required>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input 
                        type="number" 
                        id="tahun" 
                        name="tahun" 
                        class="form-control" 
                        placeholder="Masukkan tahun produksi" 
                        required>
                </div>
                <div class="mb-3">
                    <label for="harga_sewa" class="form-label">Harga Sewa (Rp)</label>
                    <input 
                        type="number" 
                        id="harga_sewa" 
                        name="harga_sewa" 
                        class="form-control" 
                        placeholder="Masukkan harga sewa per hari" 
                        required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/mobil" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
