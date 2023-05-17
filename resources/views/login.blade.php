<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Apps</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>

<body class="img js-fullheight" style="background-image: url('https://i.ibb.co/VmPLbW0/bg.jpg');">
  <section class="ftco-section">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-1">
          <h2 class="heading-section">Login</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="login-wrap p-0 mb-5">

            @if(session('error'))
            <div class="alert alert-danger">
              <b>Opps!</b> {{session('error')}}
            </div>
            @endif

            <form action="{{ route('actionlogin') }}" class="signin-form" method="post">
              @csrf
              <div class="form-group mt-4">
                <input type="username" name="username" class="form-control" placeholder="Username" required>
              </div>

              <div class="form-group mt-4">
                <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>

              <div class="form-group mt-4">
                <button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>