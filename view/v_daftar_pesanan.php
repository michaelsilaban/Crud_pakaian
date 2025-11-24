<?php
include_once '../controller/c_user(2).php';
include_once 'template/header_user.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pesanan Anda</title>
    <link rel="stylesheet" href="template/style.css">
</head>
<body>
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Kode Produk</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jenis Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            
            <tbody>
                <?php 
                // Asumsi: $users adalah variabel yang berisi data pemesanan
                if (isset($users) && is_array($users)):
                    foreach ($users as $data): ?>
                <tr>
                    <td data-label="ID User"><?=$data->id_user?></td>
                    <td data-label="Kode Produk"><?=$data->kode_produk?></td>
                    <td data-label="Tanggal Transaksi"><?=$data->tangal_transaksi?></td>
                    <td data-label="Jenis Produk"><?=$data->jenis_produk?></td>
                    <td data-label="Jumlah"><?=$data->jumlah?></td>
                    <td data-label="Harga"><?=$data->harga?></td>
                    
                    <td data-label="Aksi" style="text-align : center;"> 
                        <div style="display: flex; gap: 5px; justify-content: center;">
                           </div>
                    </td>
                </tr>
                <?php 
                    endforeach; 
                else:
                ?>
                    <tr>
                        <td colspan="7" style="text-align: center;">Tidak ada data pemesanan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table> 
    </div> 
    
    </body>
</html>