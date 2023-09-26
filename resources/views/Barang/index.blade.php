<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Barang</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.') }}</td>
                <td>{{ $barang->stok }}</td>
                <td>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>



