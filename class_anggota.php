<?php

class Anggota {
    var $nama;
    var $alamat;
    var $telpon;

    function tampildata() {
        $query = "select * from anggota";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }

    function tambahdata($nama, $alamat, $telpon) {
        $query = "INSERT INTO anggota(nama, alamat, telpon) VALUES ('$nama','$alamat','$telpon')";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:index.php');
        } else {
            die("Data gagal Disimpan");
        }
    }

    function hapusdata($id) {
        $query = "DELETE FROM anggota WHERE id_anggota='$id'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:index.php');
        } else {
            die("data gagal dihapus");
        }
    }

    function caridata($cari) {
        $query = "select * from anggota where nama like '%$cari%' or alamat like '%$cari%' or telpon like '%$cari%'";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }

}

?>
