<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login - E-Learning STIBA</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=1980, initial-scale=1" />
    <meta name="viewport" content="width=768, initial-scale=1" />
    <meta name="viewport" content="width=320, initial-scale=1" />
  </head>

  <body>
    <header class="ats">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-5 mx-auto text-center">
            <img src="{{ asset('image/stb.png') }}" class="stb" />
          </div>
        </div>
      </div>
    </header>
    <div class="container lpsa">
      <div class="ppp mx-auto">
        <div class="msk text-center">
          <div class="dpn">
            <h1 class="h4 text-gray-900 font-weight-bold">Selamat Datang Di E-Learning</h1>
            <p>Silahkan Login Dengan Username Dan Password Yang Anda Miliki</p>
          </div>
        </div>
        <form class="user" action="" method="POST">
          <input type="hidden" name="_token" value="#" style="outline: none; box-shadow: none" />
          <div class="form-group row">
            <label for="inputUsername" class="col-sm-2 d-none d-sm-block col-form-label text-right"><i class="fas fa-user"></i></label>
            <div class="col-sm-9 col-12">
              <input type="text" autocomplete="off" autocomplete class="form-control" id="inputUsername" placeholder="Username" name="username" value="" />
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 d-none d-sm-block col-form-label text-right"><i class="fas fa-lock"></i></label>
            <div class="col-sm-9 col-12">
              <div class="input-group mb-2" id="show_hide_password">
                <input type="password" name="password" autocomplete="off" class="form-control" id="inputPassword" onclick="myFunction" placeholder="Password" value="" />
                <div class="input-group-append">
                  <a style="margin-left: 6px; margin-top: 6px; color: #5a5c69" href="#"><i class="fas fa-eye-slash toggle-password" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          <br />
          <div class="form-group row">
            <div class="col-sm-10 offset-sm-1">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script>
      $(document).ready(function () {
        $("#login-card").show();
        setTimeout(function () {
          window.location.href = "#";
        }, 900000);
        $("#show_hide_password a").on("click", function (event) {
          event.preventDefault();
          if ($("#show_hide_password input").attr("type") == "text") {
            $("#show_hide_password input").attr("type", "password");
            $("#show_hide_password i").addClass("fa-eye-slash");
            $("#show_hide_password i").removeClass("fa-eye");
          } else if ($("#show_hide_password input").attr("type") == "password") {
            $("#show_hide_password input").attr("type", "text");
            $("#show_hide_password i").removeClass("fa-eye-slash");
            $("#show_hide_password i").addClass("fa-eye");
          }
        });
      });
      $("form.user").submit(function () {
        window.ubk.blockLoading.init();
      });
    </script>
  </body>
</html>
