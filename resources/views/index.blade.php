<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">@lang('public.localization')</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">@lang('public.gallery')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">@lang('public.contact')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">@lang('public.about')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">@lang('public.service')</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="locale/en">English<i><img src="{{asset('img/english.png')}} " style="width: 30px; height:30px ; padding-left:10px;" alt=""></i></a></li>
                  <li><a class="dropdown-item" href="locale/mm">Mynamar<i><img src="{{asset('img/myanmar.png')}} " style="width: 30px; height:30px ; padding-left:3px;" alt=""></i></a></li>
                  {{-- <li>dfasdf</li> --}}
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>