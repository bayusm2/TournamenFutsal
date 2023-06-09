<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$jumlahPemain = $_POST['jumlahPemain'];
$semester = $_POST['semester'];
$nowa = $_POST['nowa'];

if (empty($nama) || empty($prodi) || empty($semester) || empty($jumlahPemain) || empty($nowa)) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO pegawai(nama, prodi, semester, jumlahPemain, nowa) VALUES ('$nama', '$prodi', '$semester', '$jumlahPemain', '$nowa')");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}
