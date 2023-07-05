<!DOCTYPE html>
<<<<<<< Updated upstream
<html lang="en">

<head>
  <title>Bojana Jokic Art</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body style="background-color:#020812;">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Portfolio</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header image -->
  <div class="card bg-transparent">
    <img src="/images/header.png" class="card-img" alt="header image">
    <div class="card-img-overlay">
      <h5 class="card-title">Bojana Jokic Art</h5>
      <p class="card-text">Welcome. Feel free to browse.</p>
      <p class="card-text"><small>I love art, btw.</small></p>
    </div>
  </div>
  <!-- Header image -->

  <div class="container text-center mt-3">
    <div class="row">
      <div class="col-3">
        <div class="card border-success mb-3; border-bottom-0 rounded-end; text-bg-dark"
          style="max-width: 18rem; --bs-border-opacity: .5;">
          <img src="/images/paintings-card.jpg" class="card-img-top" alt="mages for paintings card">
          <div class="card-body text-success">
            <h5 class="card-title">Paintings</h5>
            <p class="card-text">Browse through the gallery to see some of my latest and oldest works.
            </p>
            <a href="#" class="btn btn-primary">Take a look</a>
          </div>
        </div>
      </div>

      <div class="col"></div>
      <div class="col-3">
        <div class="card border-danger mb-3; border-bottom-0 rounded-end; text-bg-dark"
          style="max-width: 18rem; --bs-border-opacity: .5;">
          <img src="/images/sculpture-card.jpg" class="card-img-top" alt="image for sculpture card">
          <div class="card-body text-danger">
            <h5 class="card-title">Sculptures</h5>
            <p class="card-text">Take a look at my latest passion: sculpting.</p>
            <a href="#" class="btn btn-primary">Lets see</a>
          </div>
        </div>
      </div>

      <div class="col"></div>
      <div class="col-3">
        <div class="card border-warning mb-3; border-bottom-0 rounded-end"
          style="max-width: 18rem; --bs-border-opacity: .5;">
          <img src="/images/advices-card.jpg" class="card-img-top" alt="image for advices card">
          <div class="card-body text-warning">
            <h5 class="card-title">Advices</h5>
            <p class="card-text">Discover some tricks and tips I wish I knew ages ago.</p>
            <a href="#" class="btn btn-primary">Sure!</a>
          </div>
        </div>
      </div>

    </div>
  </div>

    </div>
  </div>





  <!-- Footer image -->
  <img class="img-fluid" src="/images/footer.png" alt="header image" mt-3>
  <!-- Footer image -->

=======
<html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link href="\css\onlinegallery.css" rel="stylesheet" type="text/css">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="\css\onlinegallery.css" rel="stylesheet" type="text/css">
</head>


<body style="background-color:#ffffff;"> <!--#020812-->

  <!--Top navigation bar-->
  <div class="header" id="myHeader">
    <div class="navbar">
      <a href="#home">
        <h8 class="font-color-nav">Portfolio</h8>
      </a>
      <a href="#news">
        <h8 class="font-color-nav">Paintings</h8>
      </a>
      <a href="#news">
        <h8 class="font-color-nav">Sculptures</h8>
      </a>
      <a href="#news">
        <h8 class="font-color-nav">Advices</h8>
      </a>
      <a href="/blog">
        <h8 class="font-color-nav">Art Blog</h8>
      </a>
    </div>
  </div>

  <!--Image header bar-->
  <div class="top-container hero-image">
    <h1 class="hero-text">Bojana Jokic Art</h1>
    <p class="hero-text-subbtitle">Welcome. Feel free to browse.</p>
  </div>

  <br />
  <br />
  <!--Content-->

  <div class="column">
    <div class="card">
      <div class="card-inner">
        <img src="/images/greed.jpg" alt="paintings" style="width:100%">
        <h1 class="font-color font-aclonica">Paintings Gallery</h1>
        <p class="font-color">Browse through the gallery and see the latest works and the stories behind them.</p>
        <!--<p><button>Enter</button></p>--->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-inner">
        <img src="/images/empty.jpg" alt="sculptures" style="width:100%">
        <h1 class="font-color font-aclonica">Sculptures</h1>
        <p class="font-color">My latest passion is sculpting. Take a look at some of the things I've made.</p>
        <!--<p><button>Ok</button></p>-->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-inner">
        <img src="/images/socity.jpg" alt="advices" style="width:100%">
        <h1 class="font-color font-aclonica">Advices</h1>
        <p class="font-color">After so many years, I do have some tips, trick and free advies to share.</p>
        <!--<p><button>Sure!</button></p>--->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-inner">
        <img src="/images/melting.jpg" alt="blog" style="width:100%">
        <h1><a class="font-color font-aclonica" href="/blog">Art blog</a></h1>
        <p class="font-color">All about art and artistic life: news, interesting stuff, stories etc.</p>
      </div>
    </div>
  </div>


  <!-- Footer image -->
  <div class="footer">
    <h1 class="hero-text">Bojana Jokic Art</h1>
    <p class="hero-text-subbtitle">All Rights Reserved an stuff like that...</p>
  </div>
  <!-- Footer image -->

  <script>
    window.onscroll = function () { myFunction() };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>
>>>>>>> Stashed changes
</body>

</html>