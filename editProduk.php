<?php
    include 'koneksi.php';
    // Inisialisasi
    $id = $_POST["barang_id"];
    $namabarang = $_POST["namabarang"];
    $hargabarang = $_POST["harga barang"];
    $jumlahbarang = $_POST["jumlahbarang"];

    $sql = "UPDATE tbl_produk SET namabarang = '$namabarang', hargabarang ='$hargabarang', jumlahbarang = '$jumlahbarang' WHERE barang_id = '$id'";
    // Input query
    $isSuccess = $connect->query($sql);
    // Jika berhasil
    if($isSuccess){
        $res['is_success']= true;
        $res['message'] = "Berhasil mengubah data produk $namabarang";
    }else{
        $res['is_success']= true;
        $res['message'] = "Gagal mengubah data";
    }

    // Ubah ke json
    echo json_encode($res);

?>