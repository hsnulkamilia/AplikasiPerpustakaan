<!-- resources/views/anggota/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Anggota Form</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('anggota.store') }}" method="POST">
    @csrf
    <table class="table">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control" name="nama" required></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td><input type="text" class="form-control" name="no_hp" required></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" class="form-control" name="email" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" class="form-control" name="alamat" required></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
