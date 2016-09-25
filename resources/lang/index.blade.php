<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Material Design Bootstrap Template</title>

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
        <a class="navbar-brand waves-effect waves-light" href="#">MDBootstrap</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#products" class="waves-effect waves-light">Products <span class="sr-only">(current)</span></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">List (click to expand) <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#videomaker">Video Maker</a>
              </li>
              <li><a href="#mdb">Material Design for Bootstrap</a>
              </li>
              <li><a href="#creativeagency">Creative Agency</a>
              </li>
              <li><a href="#photographer">Photographer Portfolio</a>
              </li>
              <li><a href="#service">Service Portfolio</a>
              </li>
              <li class="divider"></li>
              <li><a href="#footer">Footer</a>
              </li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right waves-effect waves-light" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Intro section -->
    <div class="row intro-row">
      <div class="col-md-8 ">
        <img class="img-responsive z-depth-2 featured-img " src="img/project2.png" alt="">
      </div>
      <div class="col-md-4">


        <h4>Material Design for Bootstrap</h4>
        <p>Google designed a Material Design to make a web more beautiful. Twitter created a Bootstrap to support you in faster and easier development of responsive websites. Material Design for Bootstrap contains both!</p>

        <a href="# class="btn btn-info waves-effect waves-light ">Get it now!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!--/. Intro section -->

    <hr>



    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/project1.png">
            <span class="card-title">Video Maker</span>
          </div>
          <div class="card-content">
            <p>Some things just look better in motion and in the highly competitive world of fashion, finding an edge over the competition...</p>
          </div>
          <div class="card-action">
            <a href="http://mdbootstrap.com/product/magic-portfolio-for-video-maker/">
              <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
            </a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/project3.png">
            <span class="card-title">Creative Agency</span>
          </div>
          <div class="card-content">
            <p>Did you know that a strong brand is absolutely essential for generating sales and growth on Social Media? You may...</p>
          </div>
          <div class="card-action">
            <a href="http://mdbootstrap.com/product/magic-portfolio-for-creative-agency">
              <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
            </a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/project4.png">
            <span class="card-title">Photographer Portfolio</span>
          </div>
          <div class="card-content">
            <p>Photography is an art of observation. It’s about finding something interesting an ordinary place… I’ve found it...</p>
          </div>
          <div class="card-action">
            <a href="http://mdbootstrap.com/product/magic-portfolio-photographer/">
              <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
            </a>
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
        <div class="col-md-10 col-md-offset-1"> © 2015 Copyright <a href="http://www.MDBootstrap.com">MDBootstrap.com </a>
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


</body>

</html>