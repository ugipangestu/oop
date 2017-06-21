<?php

include "config.php";
include "class_anggota.php";   //instansiasi setting propertis database
$db = new Config();
$db->koneksi();   //koneksi mysql via method
$dt = new Anggota();

//proses hapus data
if (isset($_GET['aksi']) == "hapus") {
    $dt->hapusdata($_GET['id']);
}
?>