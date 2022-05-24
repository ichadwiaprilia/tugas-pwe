<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelanggan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <form action="{{ route('pelanggan.store')  }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nm_pel" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nm_pel" name="nm_pel">
        </div>
        <div class="mb-3">
            <label for="no_telp_pel" class="form-label">No Telepon</label>
            <input type="text" class="form-control" name="no_telp_pel" id="no_telp_pel">
        </div>
        <div class="mb-3">
            <label for="almt_pel" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="almt_pel" name="almt_pel"  >
        </div>
        <div class="mb-3">
            <label for="no_rek" class="form-label">No Rekening</label>
            <input type="text" class="form-control" id="no_rek" name="no_rek"  >
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html>