<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- jquery Datatables CSS -->
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <!-- https://datatables.net/examples/styling/bootstrap5.html -->
  <style>
    a {
      text-decoration: unset;
    }
  </style>
  <title>@yield('title') | Raj Technologies Pvt Ltd</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Laravel Dev Tools</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('httplist')}}">HTTP Status Code</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clearcache')}}">Clear Cache</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('routeslist')}}">Routes List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('routeslist',['only'=>'api'])}}">API Routes List</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid mt-2">
    @yield('content')
  </div>
  <footer class="fixed-bottom">
    <p class="text-center">
      <small>
        Laravel Tools by <a class="text-primary" href="http://rajtechnologies.com" target="_black">Raj Technologies Pvt Ltd</a>
        Created By <a class="text-success" href="http://bhargavraviya.medium.com" target="_black">Bhargav Raviya</a>
      </small>
    </p>
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  @yield('script-footer')
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable();
    });
  </script>
</body>

</html>