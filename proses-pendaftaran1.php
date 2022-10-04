<?php
include("Koneksi.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $JK = $_POST['jk'];
    $agama = $_POST['agama'];

    $sql = "INSERT INTO tb_daftar SET (nama, tempat, tanggal, alamat, jk, agama) VALUES ('$nama','$tempat','$tanggal','$alamat','$jk','$agama')";
    $query = mysqli_query($db,$sql);

    if($query){
        header ('Location: tabel-daftar.php?status=sukses');
    } else {
        header ('Location: form-pendaftaran.php?status=gagal');
    }
}
?>
<!--Nama: Aura Sefilia Hikmawati-->