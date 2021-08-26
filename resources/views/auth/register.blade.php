<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/auth.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <title>Daftar</title>
</head>

<body>
  <section class="py-4">
    <div class="container pt-2">
      <div class="row g-0 mx-4 mx-lg-0 ">
        <div class="col-lg-7 d-none d-lg-flex justify-content-center d-md-none col3">
          <img src="img/Secure login-pana(1).svg" alt="">
        </div>
        <div class="col-lg-5">
          <div class="container p-5">
            <div class="text-end">
              <a href="/" class="">
                <i class="bi bi-house-door-fill"></i>
              </a>
            </div>
            <h1 class="text-center text-white py-1">Daftar</h1>
            <form action="/register" class="text-white py-1" method="post">
            @csrf
              <div class="mb-1">
                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                @error("nama")
                <p class="text-danger ps-3">
                  {{$message}}
                </p>
                @enderror
              </div>
              <div class="mb-1">
                <input type="email" class="form-control" name="email" placeholder="Email Unpad">
                @error("email")
                <p class="text-danger ps-3">
                  {{$message}}
                </p>
                @enderror
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" name="npm" placeholder="NPM">
                @error("npm")
                <p class="text-danger ps-3">
                  {{$message}}
                </p>
                @enderror
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" name="program_studi" placeholder="Program Studi">
                @error("prodi")
                <p class="text-danger ps-3">
                  {{$message}}
                </p>
                @enderror
              </div>
              <div class="input-group mb-1">
                <input type="password" class="form-control" name="password" id="mypassword" placeholder="Password">
                <span class="input-group-text bg-white">
                  <i class="bi bi-eye-fill" id="show" onclick="password()"></i>
                  <i class="bi bi-eye-slash" id="hide" onclick="password()"></i>
                </span>
              </div>
              @error("password")
              <p class="text-danger ps-3">
                {{$message}}
              </p>
              @enderror
              <div class="input-group">
                <input type="password" name="confirmationpass" class="form-control" id="mypasswordc" placeholder="Konfirmasi Password">
                <span class="input-group-text bg-white">
                  <i class="bi bi-eye-fill" id="showc" onclick="passwordc()"></i>
                  <i class="bi bi-eye-slash" id="hidec" onclick="passwordc()"></i>
                </span>
              </div>
              @error("confirmationpass")
              <p class="text-danger ps-3 mt-1">
                {{$message}}
              </p>
              @enderror

              <div class="d-flex justify-content-center pt-4 pb-3">
                <button class="btn btn-secondary">Daftar</button>
              </div>
            </form>
            <a href="/signin" class="text-decoration-none text-reset">
              <p class="text-center">
                Sudah memiliki akun?
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->
  <script>
    function password(){
      var pass = document.getElementById('mypassword')
      if (pass.type === "password"){
        pass.type = "text";
        document.getElementById('show').style.display = "none";
        document.getElementById('hide').style.display = "inline-block";
      }
      else{
        pass.type = "password";
        document.getElementById('hide').style.display = "none";
        document.getElementById('show').style.display = "inline-block";
      }
    }
    function passwordc(){
      var pass = document.getElementById('mypasswordc')
      if (pass.type === "password"){
        pass.type = "text";
        document.getElementById('showc').style.display = "none";
        document.getElementById('hidec').style.display = "inline-block";
      }
      else{
        pass.type = "password";
        document.getElementById('hidec').style.display = "none";
        document.getElementById('showc').style.display = "inline-block";
      }
    }
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>