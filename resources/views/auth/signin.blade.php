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
  <title>Login</title>
</head>

<body>

@if(session()->has('success'))
  <!-- Toast -->
  <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
    <div class="toast-container position-absolute top-0 start-50 translate-middle-x p-3" id="toastPlacement">
      <div class="toast">
        <div class="toast-header">
        <i class="bi bi-check-square-fill p-1"></i>
          <strong class="me-auto">Pendaftaran Berhasil</strong>

        </div>
        <div class="toast-body">
          Silahkan Login
        </div>
      </div>
    </div>
  </div>
@endif
  <!-- main -->
  <section class="py-5">
    <div class="container">
      <div class="row g-0 mx-4 mx-lg-0 ">
        <div class="col-lg-5">
          <div class="container p-5">
            <a href="/">
              <i class="bi bi-house-door-fill"></i>
            </a>
            <h1 class="text-center text-white py-4">Masuk</h1>

            <!-- Form -->
            <form action="/signin" class="text-white py-1" method="POST">
            @csrf
              <div class="mb-3">
                <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Ketik Email" value="{{old('email')}}">
                @error("email")
                <p class="text-danger ps-3">
                  {{$message}}
                </p>
                @enderror
              </div>
              <div class="mb-3">
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Ketik Password">
                @error("password")
                <p class="text-danger ps-3">
                  {{$message}}
                </p>
                @enderror
              </div>
              <a href="" class="text-decoration-none text-dark">
                <p class="text-end">
                  Lupa kata sandi?
                </p>
              </a>
              <div class="d-flex justify-content-center pt-4 pb-3">
                <button class="btn btn-secondary">Masuk</button>
              </div>
            </form>
            <a href="/register" class="text-decoration-none text-reset">
              <p class="text-center">
                Belum memiliki akun?
              </p>
            </a>
          </div>
        </div>
        <div class="col-lg-7 d-none d-lg-flex justify-content-center d-md-none col2">
          <img src="img/Secure login-pana(1).svg" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $(".toast").toast({
        delay: 3000
      });
      $(".toast").toast("show");
    })
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