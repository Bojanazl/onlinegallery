!DOCTYPE html>

<html lang="en">


    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Bojana Jokic Arts</title>
      <meta name="description" content="">
  
      <!-- Tailwind -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
      <style>
          @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
  
          .font-family-karla {
              font-family: karla;
          }
  
          .navbar-sticky-top
  {
      position: fixed;
      z-index: 999;
      opacity:1;
      width: 100%;
  }
          
      </style>
  
      <!-- AlpineJS -->
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
      <!-- Font Awesome -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
  </head>





  <body style="background-color:#020812;"> <!--#020812-->

  <div class="grid grid-cols-6 gap-4">
    <div class="col-span-6 ">
        <!-- Header image -->
        <div class="card bg-transparent border-bottom-0">
          <img src="/images/header.png" class="card-img" alt="header image">
          <div class="card-img-overlay">
            <h5 class="card-title">Bojana Jokic Art</h5>
            <p class="card-text">Welcome. Feel free to browse.</p>
            <p class="card-text"><small>I love art, btw.</small></p>
          </div>
        </div>
        <!-- Header image -->
  </div>

  <div class="grid grid-cols-6 gap-4">
    
    <div class="col-span-3 gap-4">
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
        </div>
        </div>
  
        <div class="col-span-3 gap-4">
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
  
        <div class=" col-span-3 gap-4"></div>
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
  <div class="col-span- sm:col-span-2 md:col-span-3 lg:col-span-4 xl:col-span-2...">


  </div>
  <div class="col-span-6 sm:col-span-4 md:col-span-3 lg:col-span-2 xl:col-span-4...">


  </div>
</div>






































  
  </div>

    </div>
  </div>





  <!-- Footer image -->
  <img class="img-fluid" src="/images/footer.png" alt="header image" mt-3>
  <!-- Footer image -->

</body>
