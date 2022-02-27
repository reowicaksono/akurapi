<?php
    include 'koneksi.php';

    // Inisial
    $namabarang = $_POST["namabarang"];
    $jumlahbarang = $_POST["jumlahbarang"];
    $hargabarang = $_POST["hargabarang"];

    // Query input
    $sql = "INSERT INTO tbl_produk(namabarang,hargabarang,jumlahbarang) VALUES ('$namabarang','$hargabarang', '$jumlahbarang')";

    // input ke db
    $isSuccess = $connect = $connect->query($sql);
    // Jika berhasil
    if($isSuccess){
        $res["isSuccess"] = true;
        $res["message"] = "Data berhasil ditambahkan";
    }else{
        $res["isSuccess"] = false;
        $res["message"] = "Data gagal ditambahkan";
    }

    // Tampilkan dalam bentuk json
    echo json_encode($res);
?>