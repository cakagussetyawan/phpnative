<?php

// konfigurasi koneksi
$host       =  "34.101.185.159";
$dbuser     =  "postgres";
$dbpass     =  "qwerty";
$port       =  "5432";
$dbname     =  "pds-2018";

// script koneksi php postgree
$link = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass); 
 
if($link)
{
    echo "Koneksi Berhasil";
}else
{
    echo "Gagal melakukan Koneksi";
}
?>