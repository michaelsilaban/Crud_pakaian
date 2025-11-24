<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../template/style.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-white">
                    <h3 class="mb-0">Pesan Produk</h3>
                </div>
                <div class="card-body">
                    <form action="../controller/c_user(2).php?aksi=checkout" method="POST">
                        
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="text" class="form-control" id="gambar" name="gambar"
                                value="<?php echo htmlspecialchars($data_produk->gambar); ?>" readonly>
                        </div>
                        
                        
                        
                        <div class="mb-3">
                            <label for="id_user" class="form-label">ID User (Pemilik Produk)</label>
                            <input type="text" class="form-control" id="id_user" name="id_user" 
                                value="" required>
                        </div>



                        <div class="mb-3">
                            <label for="kode_produk" class="form-label">Kode Produk</label>
                            <input type="text" class="form-control" id="kode_produk" name="kode_produk"
                                value="<?php echo htmlspecialchars($data_produk->kode_produk); ?>" readonly>
                        </div>
                        
                        
                        
                        
                        <div class="mb-3">
                            <label for="id_user" class="form-label">Tanggal Transaksi (hari ini)</label>
                            <input type="date" class="form-control" id="id_user" name="tangal_transaksi" 
                                value="" required>
                        </div>
                        
                        
                        <div class="mb-3">
                            <label for="jenis_produk" class="form-label">Jenis</label>
                            <input type="text" class="form-control" id="jenis_produk" name="jenis_produk"
                                value="<?php echo htmlspecialchars($data_produk->jenis_produk); ?>" readonly>
                        </div>
                      

                        <div class="mb-3">
                            <label for="ukuran" class="form-label">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran" name="ukuran" 
                                value="<?php echo htmlspecialchars($data_produk->ukuran); ?>" readonly>
                        </div>
                        
                          <div class="mb-3">
                            <label for="jumlah_pesan" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah_pesan" name="jumlah" 
                                placeholder="Masukkan Jumlah Yang Ingin Di Pesan"
                                min="1" required>
                          </div>
                        
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" 
                                value="<?php echo htmlspecialchars($data_produk->harga); ?>" readonly>
                          </div>
                          
                          
                          <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-warning btn-lg">Pesan Produk</button>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
