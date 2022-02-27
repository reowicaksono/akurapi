<?php

    $connect = new mysqli("localhost","root", "", "akur_crud");

    if(!$connect){
        echo "koneksi gagal";
        exit();
    }
?>