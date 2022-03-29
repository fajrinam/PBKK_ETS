<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <title>Sistem Rumah Sakit TC</title>
      </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">Rumah Sakit TC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/rekam-medis">Rekam Medis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/rekam-medis-pasien">Rekam Medis Pasien</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/rekam-medis-dokter">Rekam Medis Dokter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/form-rekam-medis">Rekam Medis Form</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-3">
        @yield('container')
        <br/>
        <h1>Selamat Datang di Rumah Sakit TC</h1>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>