<?php

include '../koneksi.php';

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];
$kd_mk = $_POST['kd_mk'];

if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', npm='$npm', alamat='$alamat' where id=$id");
} else {
    mysqli_query($conn, "INSERT INTO mahasiswa values('', '$nama', '$npm', '$alamat')");
}


header("location:../input-mhs.php");
