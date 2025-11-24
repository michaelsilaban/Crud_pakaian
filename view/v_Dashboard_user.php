<?php
include_once '../controller/c_user(1).php';
include_once 'template/header_user.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Produk</title>
  <link rel="stylesheet" href="template/style.css">
    <style>
      //untuk pengaturan ukuran fto
        .product-image {
            max-width: 50px; 
            height: auto;
            display: block;
            margin: 0 auto;
        }
        
    </style>
</head>
<body>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Gambar</th>
          <th>ID Produk</th>
          <th>Jenis</th>
          <th>Ukuran</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      
      
      <tbody>
        <?php 
        // Perbaiki variabel yang dicek. Anda mengecek $produk dan $users, 
        // tetapi kemudian mengulang (loop) $users. Asumsikan Anda ingin me-loop $produk.
        // Jika data yang diulang adalah produk, variabel harus konsisten. 
        // Saya asumsikan $users dalam kode Anda sebenarnya berisi data produk ($produk).
        if (isset($users) && is_array($users)):
          foreach ($users as $data): ?>
        <tr>
          <td style="text-align: center;" data-label="Gambar">
            <?php 
              $image_path = isset($data->gambar) && !empty($data->gambar) 
                          ? $data->gambar
                          : '../asset/Kaos.jpeg';
            ?>
            <img src="<?= $image_path; ?>" alt="Gambar Produk <?= $data->kode_produk; ?>" class="product-image">
          </td>
          
          <td data-label="ID Produk"><?=$data->kode_produk?></td>
          <td data-label="Jenis"><?=$data->jenis_produk?></td>
          <td data-label="Ukuran"><?=$data->ukuran?></td>
          <td data-label="Harga"><?=$data->harga?></td>
          <td style="text-align : center;" data-label="Aksi"> 
          
           <div style="display: flex; gap: 5px; justify-content: center;">
             
             <a href="../controller/c_user(1).php?aksi=pesan&kode_produk=<?= $data->kode_produk; ?>" class="btn btn-warning">pesan</a>
             
           </div>
         </td>
        </tr>
        <?php 
          endforeach; 
        else:
        ?>
          <tr>
            <td colspan="6" style="text-align: center;">Tidak ada data produk</td> </tr> <?php endif; ?>
      </tbody>
    </table> </div> </body>
</html>