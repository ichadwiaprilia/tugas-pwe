<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <form action="{{ route('barang.store')  }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_brg" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_brg" name="nama_brg" >
        </div>
        <div class="mb-3">
            <label for="hrg_brg" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" name="hrg_brg" id="hrg_brg">
        </div>
        <div class="mb-3">
            <label for="gambar_brg" class="form-label">Gambar Barang</label>
            <input type="text" class="form-control" name="gambar_brg" id="gambar_brg">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html>