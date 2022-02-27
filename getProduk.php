<?php
    include 'koneksi.php';

    $sql = "SELECT * FROM tbl_produk";
    $result = $connect->query($sql);

    // Jika ada field
    if($result->num_rows > 0){
        $res["isSuccess"] = true;
        $res["message"] = "Data berhasil didapatkan";
        $res["data"] = array();

        // Ambil data
        while($row = $result->fetch_assoc()){
            // ambil satu satu
            $res["data"][] = $row;
        }
    }else{
        $res["isSuccess"] = false;
        $res["message"] = "Gagal didapatkan";
        $res["data"] = null;
    }
    // Tampilkan dalam bentuk Json
    echo json_encode($res);

?>