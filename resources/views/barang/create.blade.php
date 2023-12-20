<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Input Data Barang</h1>

        <form method="POST" action="{{ route('barang.store') }}">
            @csrf

            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" name="kode_barang" id="kode_barang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jenis_varian">Jenis Varian</label>
                <input type="text" name="jenis_varian" id="jenis_varian" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="qty">Qty</label>
                <input type="number" name="qty" id="qty" class="form-control" required min="1">
            </div>

            <div class="form-group">
                <label for="harga_jual">Harga Jual</label>
                <input type="number" name="harga_jual" id="harga_jual" class="form-control" required min="0">
            </div>

            <button type="submit" class="btn btn-primary">Proses</button>
        </form>
    </div>
</body>
</html>
