<?php
include_once '../controller/c_user.php';
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
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            
            <tbody>
                <?php 
                if (isset($users) && is_array($users)):
                    foreach ($users as $data): ?>
                <tr>
                    <td data-label="ID User"><?=$data->id_user?></td>
                    <td data-label="Username"><?=$data->username?></td>
                    <td data-label="Email"><?=$data->email?></td>
                    <td data-label="No Telepon"><?=$data->no_telepon?></td>
                    <td data-label="Alamat"><?=$data->alamat?></td>
                    <td data-label="Role"><?=$data->role?></td> 
                    
                    <td data-label="Aksi" style="text-align : center;"> 
                    
                       <div class="action-buttons">
                         
                         <a href="../controller/c_user.php?aksi=edit&id_user=<?= $data->id_user; ?>" class="btn btn-warning">Update</a>
                         
                         <a href="../controller/c_user.php?aksi=hapus&id_user=<?= $data->id_user; ?>" 
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
                        <td colspan="7" style="text-align: center;">Tidak ada data pengguna</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table> 
    </div> 
</body>
</html>