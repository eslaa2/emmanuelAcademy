
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Emmanuel Academy | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
 <!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />
   <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
   <style>
       .container{
           padding: 50px; 
       }
   </style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  
  <a class="navbar-brand" href="#">Emmanuel Academy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>

@yield('content')
 
@yield('script')