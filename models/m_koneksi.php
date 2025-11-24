<?php

class koneksi {
  
private $host = "localhost",
        $username = "root",
        $pass = "",
        $db = "pakaian";
    public $koneksi;
    
    
   // membuat konstrak yg dimana fungsi ini akan dijalankan otomatis ketika kita membuat objek dari kelas koneksi
    function __construct()
    {
      $this->koneksi = mysqli_connect($this->host, $this->username, $this->pass, $this->db, 3306);
      
      if ($this->koneksi) {
    //   echo "koneksi kedatabase " . $this->$db . " berhasil";
        
        //mengembalikan nilai true jika koneksi database berhasil
        return $this->koneksi;
        
      }  else {
        echo "koneksi gagal";
      }
      
    }
}

$koneksi = new koneksi();