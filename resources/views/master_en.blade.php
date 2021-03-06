<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <link rel="icon" href="layout/images/football.ico" type="image/x-icon">
    <link rel="stylesheet" href="../layout/css/font-awesome.min.css">
    <link rel="stylesheet" href="../layout/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/css/style.css">
</head>

<nav class="navigation navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="nav navbar-nav">
          <li><a href="<?php echo route('homepage') ?>">
            <i class="fa fa-home"></i>Homepage</a>
          </li>
          <li><a href="<?php echo route('lang_ar') ?>">
                  <i class="fa fa-language"></i>AR</a>
          </li>
          <li><a href="<?php echo route('lang_en') ?>">
                  <i class="fa fa-language"></i>EN</a>
          </li>
      </ul>

    </div>
  </div>
</nav>

<div class="slider">

</div>

<body>

    @yield('homepage')
    @yield('homepage_ar')
    @yield('homepage_en')

<!-- Footer -->
<footer class="list container-fluid text-center">

  <ul class="first">
      <li><a href="<?php echo route('homepage') ?>">Homepage</a></li>
  </ul>

<p>Copyright<i class="fa fa-copyright"></i>All Rights Reserved 2020</p>

<ul class="second">
    <li><a title="Facebook" href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
    <li><a title="Twitter" href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
    <li><a title="LinkedIn" href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
    <li><a title="Google+" href="#"><i class="fa fa-google-plus-square fa-lg"></i></a></li>
</ul>

</footer>

	<script src="../layout/js/jquery.min.js"></script>
	<script src="../layout/js/bootstrap.min.js"></script>
    <script src="../layout/js/jquery.nicescroll.min.js"></script>
    <script src="../layout/js/script.js"></script>

 <script>

        $("html").niceScroll({

        cursorcolor: '#888',
        cursorwidth: '10px',
        cursorborder: '1px solid #1abc9c',
        cursorborderradius: 5,
        scrollspeed: 120
    });

</script>

</body>
</html>
