<?php
    include 'koneksi.php';
    
    $id = $_POST['barang_id'];


    $sql = "DELETE FROM tbl_produk WHERE barang_id = $id";
    $isSuccess = $connect-> query($sql);

    if($isSuccess){
        $res['is_success'] = true;
        $res['message']= "Berhasi; hapus data produk";
    }

    echo json_encode($res);
?>