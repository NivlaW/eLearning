<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning STIBA - Daftar Materimu </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../image/stb.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/murid/fkt.css') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</head>

<body>
    <navbar class="ats">
        <div class="ts">
            <div class="row">
                <div class="col-5">
                    <a class="col-5" href="/murid" style="text-decoration: none;">
                        <img src="../image/stb.png" class="stb">
                        <div class="tlss">
                            <h2 style="margin-bottom: 0!important;">STIBA</h2>
                            <p>E-Learning</p>
                        </div>
                    </a>
                </div>
                <div class="col-5">
                    <a href="login.html" class="bttn">Siswa</a>
                </div>
            </div>
    </navbar>
    <div class="fkt text-center">
        <h1>KELASMU</h1>
    </div>
    <div class="container">
        @foreach ($kelas as $kelas)
            <div class="dft">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="dropdown">
                                    <a class="dropdown-toggle " role="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu m-0 p-0" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="{{ url('/murid/kelas/' . $kelas->id) }}">Masuk
                                            Kelas</a>
                                        <a class="dropdown-item" href="#">xxxxxxxxxx</a>
                                        <a class="dropdown-item" href="#">xxxxxxxxxxxx</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title">{{ $kelas->nama }}</h5>
                            <div class="bar">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 10%;border-radius: 5px;">10%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mm">
    </div>
</body>

</html>
