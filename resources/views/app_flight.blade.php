<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="{{ url('http://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
      <!--Import materialize.css-->
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{ url('css/materialize.min.css') }} "  media="screen,projection"/>
      <style media="screen">
        .fonts{
          font-family: 'Raleway', sans-serif;
          color: #ee6e73;
        }
        .font{

            font-family: 'Raleway', sans-serif;
        }
        .head-logo{
            padding-right: 20px;
            font-weight: bold;
        }
        .logo-api{
          padding-left: 50px;
          font-size: 20pt;
          font-family: 'Raleway', serif;
          font-weight: bold;
        }
      </style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content"width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <nav>
          <div class="nav-wrapper red lighten-2">

            <a class="logo-api" href="{{ url('/') }}" class="brand-logo left">API-ticket.com </a>
            <ul class="right hide-on-med-and-down head-logo">
              <li><a class="font" href="{{ url('master/currency') }}">Currency</a></li>
              <li><a class="font" href="{{ url('master/country') }}">Country</a></li>
              <li><a class="font" href="{{ url('master/language') }}">Language</a></li>
              <li><a class="font" href="{{ url('master/airport') }}">Airport</a></li>

            </ul>
          </div>
        </nav>

      <div class="container">
    @yield('content')
    </div>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



      @yield('footer')

    </body>
  </html>
