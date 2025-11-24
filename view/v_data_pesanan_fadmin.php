<?php
include_once '../controller/c_user(2).php';
include_once 'template/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Pengguna</title>
  <link rel="stylesheet" href="template/style.css">
</head>
<body>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID Pemesanan</th>
          <th>Kode Produk</th>
          <th>ID User</th>
          <th>Tanggal Transaksi</th>
          <th>Jenis Produk</th>
          <th>Jumlah</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      
      
      <tbody>
        <?php 
        if (isset($pemesanan) && is_array($users)):
          foreach ($users as $data): ?>
        <tr>
          <td><?=$data->id_transaksi?></td>
          <td><?=$data->kode_produk?></td>
          <td><?=$data->id_user?></td>
          <td><?=$data->tangal_transaksi?></td>
          <td><?=$data->jenis_produk?></td>
          <td><?=$data->jumlah?></td>
          <td><?=$data->harga?></td>   
          <td style="text-align : center;"> 
          
           <div style="display: flex; gap: 5px; justify-content: center;">
             
             <a href="../controller/c_user(2).php?aksi=selesai&id_transaksi=<?= $data->id_user; ?>" 
                onclick="return confirm('Anda Yakin Pesanan Ini Sudah Selesai??')" 
                name="SELESAI" 
                class="btn btn-danger">SELESAI</a>
            
           </div>
         </td>
        </tr>
        <?php 
          endforeach; 
        else:
        ?>
          <tr>
            <td colspan="7" style="text-align: center;">Tidak ada data pengguna</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table> </div> </body>
</html>
