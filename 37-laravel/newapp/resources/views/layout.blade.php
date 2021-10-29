<!doctype html>
<html lang="en">
  <head>
    <title>Laravel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" >

  </head>
  <body>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-dark ">
  <header class="container masthead mb-auto">
    <div class="row inner">
        <div class="col-md-4"><h3 class="masthead-brand text-light">Cover</h3></div>
        <div class="col-md-8">
            <nav class="nav nav-masthead justify-content-center">
                <a class=" text-light nav-link active" href="#">Home</a>
                <a class=" text-light nav-link" href="#">Features</a>
                <a class=" text-light nav-link" href="#">Contact</a>
            </nav>
        </div>
    </div>
  </header>

  @yield('information')
  @yield('body')


  <footer class="mastfoot mt-auto bg-black">
    <div class="inner text-light text-center">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  <script src="{{ asset('assets/js/main.js') }}" ></script>
</html>

