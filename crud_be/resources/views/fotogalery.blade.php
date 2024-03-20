<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <a href="login" class="btn btn-danger">Log Out</a>
    </div>

    <h1 class="text-center mt-4 mb-4">Foto Galery</h1>

    <div class="container">
        <a href="/tambahfoto" class="btn btn-success mb-4">Tambah +</a>
        <div class="row">
            @foreach ($data as $row)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('fotogalery/' . $row->foto) }}" class="card-img-top" alt=""
                            style="width:287px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->judulfoto }}</h5>
                            <td>{{ $row->deskripsifoto }}</td>
                            <td>{{ $row->created_at->format('D M Y') }}</td>
                            <br>
                            <a href="/deletefoto/{{ $row->id }}" class="btn btn-danger">Delete</a>
                            <a href="/tampilfoto/{{ $row->id }}" class="btn btn-primary">edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
