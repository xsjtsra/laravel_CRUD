<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    @extends('layouts.main')

    @section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3 class="mt-3">Selamat Datang, {{ Auth::user()->nama }}</h3>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
        <div class="col ">
          <div class="card h-100 bg-info text-white">
            <img src="{{ ('img/mawar.jpg') }}" height="200px" width="365px" class="rounded mt-4 ms-4"> 
            <div class="card-body">
              <h5 class="card-title">Mawar</h5>
              <p class="card-text">Nama latin: Rosa</p>
              <p class="card-text">Makna: Cinta</p>
              <p class="card-text">Manfaat: Menurunkan berat badan berlebih, mengurangi stress, dan meredakan gejala wasir</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-primary text-white">
            <img src="{{ ('img/lavender.jpg') }}" height="200px" width="365px" class="rounded mt-4 ms-4"> 
            <div class="card-body">
                <h5 class="card-title">Lavender</h5>
                <p class="card-text">Nama latin: Lavandula</p>
                <p class="card-text">Makna: Keindahan</p>
                <p class="card-text">Manfaat: Mencegah gigitan nyamuk, meredakan insomnia, dan mengatasi kecemasan</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-info text-white">
            <img src="{{ ('img/asoka.jpg') }}" height="200px" width="365px" class="rounded mt-4 ms-4"> 
            <div class="card-body">
                <h5 class="card-title">Asoka</h5>
                <p class="card-text">Nama latin: Saraca asoca</p>
                <p class="card-text">Makna: Bebas dari kesedihan</p>
                <p class="card-text">Manfaat: Mengobati disentri, melancarkan haid, dan meredakan stress</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-primary text-white">
            <img src="{{ ('img/daisy.jpg') }}" height="200px" width="365px" class="rounded mt-4 ms-4"> 
            <div class="card-body">
                <h5 class="card-title">Daisy</h5>
                <p class="card-text">Nama latin: Aster</p>
                <p class="card-text">Makna: Kebijaksanaan</p>
                <p class="card-text">Manfaat: Meredakan infeksi pada luka, perangkal racun, dan antitoksin perangkal racun</p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100 bg-info text-white">
                <img src="{{ ('img/bugenvil.jpg') }}" height="200px" width="365px" class="rounded mt-4 ms-4"> 
              <div class="card-body">
                <h5 class="card-title">Bugenvil</h5>
                <p class="card-text">Nama latin: Bougainvillea</p>
                <p class="card-text">Makna: Kasih sayang</p>
                <p class="card-text">Manfaat: mengobati masalah pencernaan, seperti diare, asam lambung, atau sakit perut</p>
              </div>
            </div>
          </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    @endsection

</body>
</html>