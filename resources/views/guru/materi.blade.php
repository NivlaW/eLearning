<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning STIBA</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/stb.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
        type="text/css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=1980, initial-scale=1">
    <meta name="viewport" content="width=1280, initial-scale=1">
    <meta name="viewport" content="width=720, initial-scale=1">
    <meta name="viewport" content="width=320, initial-scale=1">
</head>

<body>
    <navbar class="ats">
        <div class="ts">
            <div class="row">
                <div class="col-5">
                    <a class="col-5" href="eler.html" style="text-decoration: none;">
                        <img src="{{ asset('image/stb.png') }}" class="stb">
                        <div class="tlss">
                            <h2 style="margin-bottom: 0!important;">STIBA</h2>
                            <p>E-Learning</p>
                        </div>
                    </a>
                </div>
                <div class="col-5">
                    <a href="login.html" class="bttn">Admin</a>
                </div>
            </div>

    </navbar>

    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/guru">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/guru/kelas">Kelas</a></li>
                <li class="breadcrumb-item active">Materi</li>
            </ol>
        </div>
        <div class="col-lg-4 d-wide-screen">
            <input type="text" class="keySearch" id="keySearch" onkeyup="searchContent()"
                placeholder="Cari materi">
            <div class="card position-sticky sticky-top direct-chat direct-chat-warning card-content-list"
                id="accordion">
                <!-- Conversations are loaded here -->
                <div style="height:auto;">
                    <ul class="products-list product-list-in-card" id="listContent">

                        <li class="item p-3 bg-blue-adinusa text-white" id="heading_96">
                            <div class="card-tools row">

                                <!-- Collapse Button -->
                                <button type="button" class="btn btn-tool btn-sm col-1 btn-collapse active"
                                    data-bs-toggle="collapse" data-bs-target="#collapse_96" aria-expanded="true"
                                    aria-controls="collapse_96">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <div class="col-9">
                                    <h5 style="font-weight: bold;">
                                        <a href="kelas.html" class="text-white">{{ $kelas->nama }}</a>
                                    </h5>
                                </div>
                                <div class="col-2 justify-content-end">
                                    <div class="d-flex justify-content-end">
                                        <button class="float-right btn2 edit"
                                            onclick="document.getElementById('id2').style.display='block'"
                                            style="width:auto;">
                                            <i class="fas fa-plus fa-lg"></i>
                                            <span class="tooltiptext" style="font-weight: 500;">Add</span>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="float-right btn2 edit"
                                            onclick="document.getElementById('id3').style.display='block'"
                                            style="width:auto;">
                                            <i class="fas fa-cog fa-lg"></i>
                                            <span class="tooltiptext" style="font-weight: 500;">Setting</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <div id="collapse_96" class="collapse show" aria-labelledby="heading_96"
                            data-parent="#accordion">
                            @foreach ($gabungan as $key => $gabungan)
                                <li class="item p-3 ">
                                    <div class="card-body">
                                        <div class="row">
                                            <span class="offset-2"></span>
                                            <h6 class="col-9">
                                                <a href="
                                                 @if ($gabungan->getTable() ==
                                                    'materi')
                                                    {{ url('/guru/kelas/' . $kelas->id . '/materi/' . $gabungan->id) }}"
                                                    class="judul">{{ $gabungan->judul }}
                                                @else
                                                    {{ url('/guru/kelas/' . $kelas->id . '/tugas/' . $gabungan->id) }}"
                                                    class="judul">{{ $gabungan->judul }}
                            @endif
                            </a>
                            </h6>
                        </div>
                </div>
                </li>
                @endforeach
            </div>
            </ul>
        </div>
    </div>
    </div>
    <div class="col-md-12 col-lg-8">
        <div class="card">
            <div class="card-header">
                <h1>{{ $kelas->nama }}</h1>
            </div>

            <div class="card-body" id="course-content">
                @php
                    strip_tags(htmlspecialchars_decode($kelas->deskripsi));
                    echo $kelas->deskripsi;
                @endphp
            </div>

            <div class="card-footer">
                <a href="admin2.html" class="btn bg-maroon float-right ">
                    Selanjutnya
                    <i class="fa fa-caret-right"></i>
                </a>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                    class="btn float-right edt">
                    Edit
                    <i class="fas fa-pen fa-sm edtknn"></i>
                </button>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div id="id01" class="modal">
        <form class="modal-content" action="/action_page.php">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <div class="container">
                <h1>Silahkan Edit</h1>
                <hr align="left">
                <label for="email"><b>Nama Materi</b></label>
                <input class="mtr" type="text" placeholder="Judul Materi" required>
                <div class="mb-4">
                    <div>
                        <div>
                            <b>Isi Materi</b>
                            <label>Silahkan isi materi</label>
                            <div class="form-group">
                                <textarea id="froala-editor">
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix d-flex justify-content-end">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <button type="submit" class="sbmbtn">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div id="id2" class="modal">
        <form class="mdl-content" action="{{ url('/guru/kelas/' . $kelas->id . '/materi/create') }}" method="POST"
            id="add">
            @csrf
            <input type="hidden" name="id_kelas" value="{{ $kelas->id }}">
            <span onclick="document.getElementById('id2').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <div class="container">
                <h1>Silahkan Tambahkan</h1>
                <hr align="left">
                <div>
                    <label>
                        <input type="radio" name="type-tugas" id="radio-materi" checked />
                        <span>Materi</span>
                    </label>
                    <label>
                        <input type="radio" name="type-tugas" id="radio-tugas" />
                        <span>Tugas</span>
                    </label>
                </div>
                <label for="email"><b>Judul</b></label>
                <input class="mtr" type="text" placeholder="Judul" name="judul" required>
                <div>
                    <b>Isi Materi</b>
                    <label>Silahkan isi materi</label>
                    <div class="form-group">
                        <textarea id="froala-editor" name="isi">
                  </textarea>
                    </div>
                </div>
            </div>
            <div class="clearfix d-flex justify-content-end">
                <button type="button" onclick="document.getElementById('id2').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <button type="submit" class="sbmbtn">Submit</button>
            </div>
        </form>
    </div>
    <div id="id3" class="modal">
        <form class="mdl-content" action="/action_page.php">
            <span onclick="document.getElementById('id3').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <div class="container">
                <h1>Silahkan Setting</h1>
                <hr align="left">
                <label for="email"><b>Judul</b></label>
                <input class="mtr" type="text" placeholder="Judul" required>
            </div>
            <div class="clearfix d-flex justify-content-end">
                <button type="button" onclick="document.getElementById('id3').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <button type="submit" class="sbmbtn">Submit</button>
            </div>
        </form>
        <form>
            <label for="email"><b>Hapus Materi atau Tugas</b></label>
            <button class="btn bg-transparent btn-lg text-dark dltbtn text-start">Delete</button>
        </form>
    </div>

    <script>
        new FroalaEditor('textarea#froala-editor')
    </script>
    <script src="{{ asset('js/kelas.js') }}"></script>
</body>

</html>
