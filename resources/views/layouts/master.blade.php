
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('portfolio/custom.css')}}">

  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" href="{{asset('portfolio/logo1.PNG')}}" >

  <title>Kalam's Portfolio</title>
</head>

<body>

  <nav id="topNav" class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">

        <span><img src="{{asset('portfolio/logo1.PNG')}}" width="30" height="30"></span><span>Kalam Ahmed</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a role="button"  href="" class="btn btn-success"> Resume </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/kalam714" target="_blank"><img src="{{asset('portfolio/git.jpg')}}" width="30" height="30" class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.linkedin.com/in/kalam-ahmed-6602701a1/" target="_blank"><img src="{{asset('portfolio/linkdin.jpg')}}" width="30" height="30" class="d-inline-block align-top"></a>
          </li>
          <li>
            <a role="button" href="" class="btn btn-primary">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
   @yield('content')
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
