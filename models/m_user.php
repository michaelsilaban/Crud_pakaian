<?php
include_once 'm_koneksi.php';

class m_user {
  
  function tampil_data()
  {
    $koneksi = new koneksi();
    $sql = "SELECT * FROM users";
    $query = mysqli_query($koneksi->koneksi, $sql);
    
    $result = [];
    if ($query->num_rows > 0 ) {
     while ($data = mysqli_fetch_object($query)) {
       $result[] = $data;
     }
     return $result;
    }else{
      return []; 
    }
  }

  function tampil_data_by_id($id_user) {
    $koneksi = new koneksi();
    $sql = "SELECT * FROM users WHERE id_user = '$id_user'";
    $query = mysqli_query($koneksi->koneksi, $sql);
    if ($query->num_rows > 0) {
        return mysqli_fetch_object($query);
    } else {
        return NULL;
    }
  }
  
  function tambah_data($username, $password, $email, $no_telepon, $alamat, $role) {
    $koneksi = new koneksi();
    $sql = "INSERT INTO users VALUES (NULL, '$username', '$password', '$email', '$no_telepon', '$alamat', '$role')";
    $query = mysqli_query($koneksi->koneksi, $sql);
    return $query;
  }

  
  function update_data($id, $username, $email, $no_telepon, $alamat, $role) {
    $koneksi = new koneksi();
    
    $sql = "UPDATE users SET 
            username = '$username', 
            email = '$email', 
            no_telepon = '$no_telepon', 
            alamat = '$alamat', 
            role = '$role' 
            WHERE id_user = '$id'";
            
    $query = mysqli_query($koneksi->koneksi, $sql);
    
    return $query;
  }
  
  function hapus_data($id) 
    {
        $koneksi = new koneksi(); 
        $sql = "DELETE FROM users WHERE id_user = '$id'"; 
        $result = mysqli_query($koneksi->koneksi, $sql);
        return $result;
    }
    
    function login($username)
    {
        $koneksi = new koneksi();
        

        $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$username'";
        $query = mysqli_query($koneksi->koneksi, $sql);
        
        if ($query && $query->num_rows > 0) {
            $data = mysqli_fetch_assoc($query);
            return $data; 
        } else {
            return NULL;
        }
    }
}


//================================================================================


class produk {
      function tampil_data_produk()
  {
    $koneksi = new koneksi();
    
    $sql = "SELECT * FROM produk";
    $query = mysqli_query($koneksi->koneksi, $sql);
    $result = [];
    if ($query->num_rows > 0 ) {
     while ($data = mysqli_fetch_object($query)) {
       $result[] = $data;
     }
     return $result;
    }else{
      return []; 
    }
  }

function tambah_data_produk($gambar, $kode_produk, $jenis_produk, $ukuran, $harga) {
  $koneksi = new koneksi();
  
    $sql = "INSERT INTO produk (gambar, kode_produk, jenis_produk, ukuran, harga) VALUES ('$gambar', '$kode_produk', '$jenis_produk', '$ukuran', '$harga')";
    
    $query = mysqli_query($koneksi->koneksi, $sql);
    
    return $query;
  }
  
  
  
  
  
  function tampil_data_id_produk($kode_produk) {
    $koneksi = new koneksi();
    
    $sql = "SELECT * FROM produk WHERE kode_produk = '$kode_produk'";
    
    $query = mysqli_query($koneksi->koneksi, $sql);
    
    if ($query->num_rows > 0) {
        return mysqli_fetch_object($query);
    } else {
        return NULL;
    }
  }


function hapus_data_produk($kode_produk) 
    {
        $koneksi = new koneksi(); 
        $sql = "DELETE FROM produk WHERE kode_produk = '$kode_produk'";
        $result = mysqli_query($koneksi->koneksi, $sql);
        
        return $result;
    }
    
}
    
    

class pemesanan {
  function tampil_data_pemesanan()
  {
    $koneksi = new koneksi();
    
    $sql = "SELECT * FROM pemesanan";
    $query = mysqli_query($koneksi->koneksi, $sql);
    $result = [];
    if ($query->num_rows > 0 ) {
     while ($data = mysqli_fetch_object($query)) {
       $result[] = $data;
     }
     return $result;
    }else{
      return []; 
    }
  }
  
  function checkout($kode_produk, $id_user, $tangal_transaksi, $jenis_produk, $jumlah, $harga) 
  {
      $koneksi = new koneksi(); 
      
      $sql = "INSERT INTO pemesanan (kode_produk, id_user, tangal_transaksi, jenis_produk, jumlah, harga) 
              VALUES ('$kode_produk', '$id_user', '$tangal_transaksi', '$jenis_produk', '$jumlah', '$harga')";
      
      $result = mysqli_query($koneksi->koneksi, $sql);
      
      return $result;
  }
  
  function selesai($id_transaksi) 
    {
        $koneksi = new koneksi(); 
        $sql = "DELETE FROM pemesanan WHERE id_transaksi = '$id_transaksi'"; 
        $result = mysqli_query($koneksi->koneksi, $sql);
        return $result;
    }
}



?>
