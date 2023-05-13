<!DOCTYPE html>
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
            <h5 class="card-title">Blog and Advices</h5>
            <p class="card-text">Discover more about the art and get some tips.</p>
            <a href="blog" class="btn btn-primary">Sure!</a>
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

</body>

</html>