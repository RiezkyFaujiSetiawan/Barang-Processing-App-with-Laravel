<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1>Detail Barang</h1>
        
        <table class="table">
            <tbody>
                <tr>
                    <th>Kode Barang</th>
                    <td>{{ $barang->kode_barang }}</td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td>{{ $barang->nama_barang }}</td>
                </tr>
                <tr>
                    <th>Jenis Varian</th>
                    <td>{{ $barang->jenis_varian }}</td>
                </tr>
                <tr>
                    <th>Qty</th>
                    <td>{{ $barang->qty }}</td>
                </tr>
                <tr>
                    <th>Harga Jual</th>
                    <td>{{ $barang->harga_jual }}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-4">
            <h3>Total Harga: {{ $total_harga }}</h3>
            <h3>Potongan Harga: {{ $potongan_harga }} ({{ ($potongan_harga / $total_harga) * 100 }}%)</h3>
            <h3>Harga Dibayar: {{ $harga_dibayar }}</h3>
        </div>
    </div>
</body>
</html>

