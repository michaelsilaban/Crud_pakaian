<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../template/style.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-white">
                    <h3 class="mb-0">Update Data Pengguna</h3>
                </div>
                <div class="card-body">
                    <form action="../controller/c_user.php?aksi=update" method="POST">
                        
                        <input type="hidden" name="id_user" value="<?php echo htmlspecialchars($users->id_user); ?>">

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required 
                                placeholder="Masukkan username" 
                                value="<?php echo ($users->username); ?>">
                        </div>
                      
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required 
                                placeholder="example@domain.com" 
                                value="<?php echo ($users->email); ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="no_tlp" class="form-label">No Telepon</label>
                            <input type="tel" class="form-control" id="no_tlp" name="no_tlp" 
                                placeholder="Masukkan nomor telepon"
                                value="<?php echo ($users->no_telepon); ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" 
                                placeholder="Masukkan alamat lengkap"><?php echo ($users->alamat); ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <p class="form-control-static fw-bold <?php echo ($users->role == 'admin' ? 'text-danger' : 'text-success'); ?>">
                                <?php echo strtoupper(($users->role)); ?>
                            </p>
                            
                            <input type="hidden" name="role" value="<?php echo ($users->role); ?>">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-warning btn-lg">Update Data</button>
                            <a href="../view/v_tampil_data.php" class="btn btn-outline-secondary">Batal / Kembali</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

