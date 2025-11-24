<?php
include_once '../controller/c_user(1).php';
include_once 'template/header.php'; // Asumsi header.php menyediakan navbar/gaya dasar
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
                // Asumsi: Variabel yang diulang harus konsisten. Menggunakan $users sesuai kode asli.
                if (isset($users) && is_array($users)):
                    foreach ($users as $data): ?>
                <tr>
                    <td data-label="Gambar" style="text-align: center;">
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
                    <td data-label="Aksi" style="text-align : center;"> 
                    
                       <div style="display: flex; gap: 5px; justify-content: center;">
                         
                         <a href="../controller/c_user(1).php?aksi=hapus&kode_produk=<?= $data->kode_produk; ?>" 
                            onclick="return confirm('Anda yakin mau menghapus data ini ?')" 
                            name="hapus" 
                            class="btn btn-danger">Hapus</a>
                       
                       </div>
                     </td>
                </tr>
                <?php 
                    endforeach; 
                else:
                ?>
                    <tr>
                        <td colspan="6" style="text-align: center;">Tidak ada data produk</td> </tr>
                <?php endif; ?>
            </tbody>
        </table> 
    </div> 
</body>
</html>