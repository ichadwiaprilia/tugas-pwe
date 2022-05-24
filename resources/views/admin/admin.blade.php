<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container p-5 ">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nomor Telepon</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                </tr>
                @foreach ($data as $d)
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{ $d->nama_admin }}</td>
                <td>{{ $d->no_telp }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->password }}</td>
                <td>
                <form action="{{route('admin.edit', $d->id) }}" method="GET">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </form>

            </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>