<?php

require_once('function/helper.php');
require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
if ($_SESSION["id"] == null) {
    header("location: " . BASE_URL);
    exit();
}

$id = isset($_GET['id']) ? ($_GET['id']) : false;

$pegawai = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id = $id"));

$error =  isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;

?>


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <?php
                if ($error == "true") : ?>
                    <div class="alert alert-danger" role="alert">
                        Proses gagal, pastikan semuar formulir terisi
                    </div>
                <?php endif; ?>
                <div class="row">
                    <h1 style="text-align: center; color: #185ADB;">Form Edit Pegawai</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_edit.php' ?>">
                    <input name="id" value="<?= $pegawai['id'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Tim</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <select id="prodi" name="prodi" required> ==$0
                            <option value="AB">AB</option>
                            <option value="BI">BI</option>
                            <option value="AK">AK</option>
                            <option value="AP">AP</option>
                            <option value="TKA">TKA</option>
                            <option value="TRO">TRO</option>
                            <option value="TL">TL</option>
                            <option value="TI">TI</option>
                            <option value="TKK">TKK</option>
                        </select value="<?= $pegawai['prodi'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <select id="semester" name="semester" required> ==$0
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                        </select value="<?= $pegawai['semester'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jumlahPemain" class="form-label">Jumlah Pemain</label>
                        <select id="jumlahPemain" name="jumlahPemain" required> ==$0
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select value="<?= $pegawai['jumlahPemain'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nowa" class="form-label">No WA Official tim</label>
                        <input type="number" class="form-control" id="nowa" name="nowa" value="<?= $pegawai['nowa'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>