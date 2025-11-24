<?php
include_once '../models/m_user.php';


$pemesanan = new pemesanan();

try { 
    if (isset($_GET['aksi'])) {
      $aksi = $_GET['aksi'];
        if ($aksi == 'checkout') {
            $id_user = $_POST['id_user'];
            $kode_produk = $_POST['kode_produk'];
            $tangal_transaksi = $_POST['tangal_transaksi']; 
            $jenis_produk = $_POST['jenis_produk'];
            $jumlah = $_POST['jumlah'];
            $harga = $_POST['harga'];

            $result = $pemesanan->checkout( $id_user, $kode_produk, $tangal_transaksi, $jenis_produk, $jumlah, $harga);
            
            if ($result) {
                echo "<script>alert('Data produk Berhasil Ditambahkan');window.location='../view/v_daftar_pesanan.php'</script>";
            } else {
                echo "<script>alert('Data produk gagal ditambahkan');window.location='../view/v_daftar_pesanan.php'</script>";
            }
        } 
        
        
        else if ($aksi == 'selesai') {
          if (isset($_GET['id_transaksi'])) {
            $id_transaksi = $_GET['id_transaksi'];
            $result = $pemesanan->selesai($id_transaksi); 
            
            if ($result) {
              echo "<script>alert('Pesanan Berhasil di Selesaikan');window.location='../view/v_data_pesanan_fadmin.php'</script>";
              
            } else {
              echo "<script>alert('Pesanan Gagal di Selesaikan');window.location='../view/v_data_pesanan_fadmin.php'</script>";
              
            }
            
          } else {
            echo "<script>alert('Error: ID pemesanan untuk diselesaikan tidak ditemukan');window.location='../view/v_data_pesanan_fadmin.php'</script>";
            }
        }
        
     }
     $users = $pemesanan->tampil_data_pemesanan();
    
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
