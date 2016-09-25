<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KPMG LUNCH APP</title>

  <!-- Material Design Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="{{asset("css/mdb2.css")}}" rel="stylesheet">

  <!-- Template style -->
  <link href="{{asset("css/style-2.css")}}" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar z-depth-2 info-color">
    <div class="container ">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand waves-effect waves-light" href="#">KPMG Lunch</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ route('order') }}" class="waves-effect waves-light">Order <span class="sr-only">(current)</span></a>
          </li>
          <li class=""><a href="{{ route('orderHistory') }}" class="waves-effect waves-light">Order History</a>
          </li>
          <li class=""><a href="#products" class="waves-effect waves-light">Health Tips</a>
          </li>

        </ul>
        <form class="navbar-form navbar-right waves-effect waves-light">
          <div class="form-group">
          @if (auth()->user() == true)
              <a href="{{ route('signout')}}" class="btn btn-primary">Log Out</a>
          @else
              <a href="{{ route('login')}}" class="btn btn-primary">Login</a>
          @endif
          </div>
        </form>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Intro section -->
    <div class="row intro-row">
      <div class="col-md-3 ">
        <!-- <img class="img-responsive z-depth-2 featured-img " src="img/project2.png" alt=""> -->
        <img src="{{asset("img/download.png")}}" class="img-responsive" alt="Image">
      </div>
      <div class="col-md-9">


        <h4>KPMG LUNCH APP</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!--/. Intro section -->

    <hr>



    <!-- Content Row -->
    <div class="row">
      <!-- /.col-md-4 -->
      <div class="col-md-12">
        <div class="card hoverable">
          <div class="card-content">
            <p>
              @yield('content')
            </p>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->




  <!-- Footer -->
  <footer class="page-footer info-color darken-1" if="footer">
    <div class="footer-copyright">
      <div class="container">
        <div class="col-md-10 col-md-offset-1"> © 2015 Copyright <a href="#">Azim A. Mukri</a>
        </div>
      </div>
    </div>
  </footer>


  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="{{asset("js/jquery.min.js")}}"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>

  <!-- Bootstrap Special-->
  <script type="text/javascript" src="{{asset("js/mdb.js")}}"></script>
  <script type="text/javascript" src="{{asset("js/mdb2.js")}}"></script>
  <script type="text/javascript" src="{{asset("js/appGen.js")}}"></script>


</body>

</html>