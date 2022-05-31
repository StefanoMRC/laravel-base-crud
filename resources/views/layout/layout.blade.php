<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Comic</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Fumetti</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('book.index')}}">Lista fumetti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('book.create')}}">Inserisci nuovo fumetto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container-fluid">
      @yield('cont')  
    </div>
    
    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>