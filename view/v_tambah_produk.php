<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Produk</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../template/style.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Tambah Data Produk Baru</h3> </div>
                <div class="card-body">
                    <form action="../controller/c_user(1).php?aksi=tambah" method="POST">
                      
                      <div class="mb-3">
                            <label for="jenis_produk" class="form-label">Gambar</label>
                            <input type="text" class="form-control" id="Kode_ produk" name="gambar" required placeholder="Sesuaikan Dengan Format Gambar">
                        </div>
                      
                       <div class="mb-3">
                            <label for="jenis_produk" class="form-label">Kode produk</label>
                            <input type="text" class="form-control" id="Kode_ produk" name="kode_produk" required placeholder="Masukkan jenis produk">
                        </div>
                        
                        <div class="mb-3">
                            <label for="jenis_produk" class="form-label">Jenis Produk</label>
                            <input type="text" class="form-control" id="jenis_produk" name="jenis_produk" required placeholder="Masukkan jenis produk">
                        </div>
                        
                        <div class="mb-3">
                            <label for="ukuran" class="form-label">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran" name="ukuran" required placeholder="Masukkan ukuran">
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required placeholder="Masukkan harga">
                            
                            </div>
                            
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg">Simpan Data</button>
                            <a href="../view/v_data_produk_fadmin.php" class="btn btn-outline-secondary">Batal / Kembali</a>
                            
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
