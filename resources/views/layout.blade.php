<!DOCTYPE html>
<html lang="en">
<head>
  <title>First Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/progress-bar.css') }}">
  <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
  <script src="{{ URL::asset('js/jQuery-plugin-progressbar.js') }}"></script>
</head>
<body>

  <div class="container-fluid">
  <div class="row">
    <div class="col-md-2 navbar">
      <nav class="">
        <ul class="nav flex-column">
          <li><center>
            <img src="{{ URL::asset('images/logo.png') }}" alt="" width="100px" height="100px">
          </center></li>
          <li class="nav-item"><a href="{{ route('pages.index') }}" class="nav-link"> <i class="fas fa-home mr-3"></i> Home</a></li>
          <li class="nav-item"><a href="{{ route('pages.library') }}" class="nav-link"> <i class="fas fa-book mr-3"></i> Library</a></li>
          <li class="nav-item"><a href="#stack" class="nav-link"> <i class="fab fa-stack-overflow mr-3"></i> IUT Stack</a></li>
          <li class="nav-item"><a href="#coding" class="nav-link"> <i class="fas fa-code mr-3"></i> IUT Coding</a></li>
          <li class="nav-item"><a href="{{ route('pages.canteen') }}" class="nav-link"> <i class="fas fa-coffee mr-3"></i> Canteen</a></li>
          <li class="nav-item"><a href="#hub" class="nav-link"> <i class="fab fa-hubspot mr-3"></i> IUT Hub</li></a>
          <li class="nav-item"><a href="#booking" class="nav-link"> <i class="far fa-calendar-check mr-3"></i> Booking</a></li>
          <li class="nav-item"><a href="#lost&found" class="nav-link"> <i class="fab fa-sistrix mr-3"></i> Lost and found</a></li>
          <li class="nav-item"><a href="#job" class="nav-link"> <i class="fas fa-credit-card mr-3"></i> Job vacancy</a></li>
          <li class="nav-item"><a href="http://eclass.inha.uz/" class="nav-link"> <i class="fab fa-etsy mr-3"></i> Eclass</a></li>
          <li class="nav-item"><a href="https://mail.inha.uz/" class="nav-link"> <i class="fas fa-at mr-3"></i> Outlook Web</a></li>
          <li class="nav-item"><a href="#about" class="nav-link"> <i class="fas fa-user-astronaut mr-3"></i> About</a></li>
        </ul>
      </nav>
    </div>

    <div class="col-md-7 content">
      @yield('content')
    </div>
    <div class="col-md-3 sidebar">
      <div class="cornercont">
          <a href='{{ route('logout') }}' class="cornericon"><i class="menu fas fa-bars mr-3" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"></i></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        <a href='#' class="cornericon"><i class="bell fas fa-bell mr-3"></i></a>
        <a href='#' class="cornericon"><i class="message fas fa-envelope mr-3"></i></a>
    </div>
    <div class="userbox" align="center">
      <div class="progress-bar" id="circle">
        <script type="text/javascript">
            $(".progress-bar").loading();
        </script> 
        <img src="{{ URL::asset('images/user.png') }}" class="userphoto">
      </div>
    <a href="#account" class="name"><b>{{ Auth::user()->name }}</b></a>
      <h6 id="id">{{Auth::user()->Id_number}}</h6>
      <p id="mail">{{Auth::user()->email}}</p>

    </div>
  </div>
    </div>
</div>
</body>
</html>
