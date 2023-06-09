<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$jumlahPemain = $_POST['jumlahPemain'];
$semester = $_POST['semester'];
$nowa = $_POST['nowa'];
$id = $_POST['id'];

if (empty($nama) || empty($prodi) || empty($jumlahPemain) || empty($semester) || empty($nowa)) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit&id=' . $id . '&emptyform=true');
} else {
    mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', prodi = '$prodi', jumlahPemain='$jumlahPemain', semester = '$semester',nowa = '$nowa' WHERE id='$id'");
    header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');
}
