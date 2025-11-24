<?php
include_once '../models/m_user.php';


$produk = new produk(); // objek kelas produk

try { 
    if (isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];

        if ($aksi == 'tambah') {
            $gambar = $_POST['gambar'];
            $kode_produk = $_POST['kode_produk'];
            $jenis_produk = $_POST['jenis_produk']; 
            $ukuran = $_POST['ukuran'];
            $harga = $_POST['harga'];

            $result = $produk->tambah_data_produk($gambar,$kode_produk, $jenis_produk, $ukuran, $harga);
            
            if ($result) {
                echo "<script>alert('Data produk Berhasil Ditambahkan');window.location='../view/v_data_produk_fadmin.php'</script>";
            } else {
                echo "<script>alert('Data produk gagal ditambahkan');window.location='../view/v_data_produk_fadmin.php'</script>";
            }
        }
        

        else if ($aksi == 'hapus') {
          if (isset($_GET['kode_produk'])) {
            $id = $_GET['kode_produk'];
            $result = $produk->hapus_data_produk($id); 
            
            if ($result) {
              echo "<script>alert('Data Berhasil Dihapus');window.location='../view/v_data_produk_fadmin.php'</script>";
              
            } else {
              echo "<script>alert('Data gagal dihapus');window.location='../view/v_data_produk_fadmin.php'</script>";
              
            }
            
          } else {
            echo "<script>alert('Error: ID pengguna untuk dihapus tidak ditemukan');window.location='../view/v_tampil_data.php'</script>";
            }
        }

        else if ($aksi == 'pesan') {
            if (isset($_GET['kode_produk'])) {
                $kode_produk = $_GET['kode_produk']; 
                $data_produk = $produk->tampil_data_id_produk($kode_produk); 

                if (!empty($data_produk)) {
                    
                    require_once '../view/v_pesan_produk.php'; 
                    
                } else {
                    echo "<script>alert('Error: Data produk tidak ditemukan');window.location='../view/v_Dashboard_user.php'</script>";
                }
            } else {
                echo "<script>alert('Error: Kode produk untuk dipesan tidak ditemukan');window.location='../view/v_Dashboard_user.php'</script>";
            }
        }
        // ------------------------------------------------------------------------

        
        
     }$users = $produk->tampil_data_produk();
      //  require_once '../view/v_data_barang_fadmin.php'; 
    
} catch (Exception $e) {
    echo $e->getMessage();
}


?>
