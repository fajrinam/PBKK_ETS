<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Rekam Medis Form</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3 class="card-title text-center mt-5">
                        Rekam Medis Form
                    </h3>
                    <div class="card-body">
                        <!-- menambahkan query string warna dengan value biru -->
                        <form method="POST" action="{{route('proses-form-medis',['id' => '99','warna' => 'biru'])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Pasien</label>
                                <input type="text" class="form-control" id="pasien" name="pasien">
                            </div>
                            <div class="form-group">
                                <label for="city">Nama Dokter</label>
                                <input type="text" class="form-control" id="dokter" name="dokter">
                            </div>
                            <div class="form-group">
                                <label for="name">Kondisi Kesehatan</label>
                                <input type="text" class="form-control" id="kondisi" name="kondisi">
                            </div>
                            <div class="form-group">
                                <label for="city">Suhu Tubuh</label>
                                <input type="text" class="form-control" id="suhu" name="suhu">
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <br/>
    <br/>
</body>
</html>