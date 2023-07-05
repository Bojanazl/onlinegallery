<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

 <link rel="stylesheet" href="/css/welcome_page.css">


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body style="background-color:#020812;"> <!--#020812-->
 
  <!--Top navigation bar-->
<div class="header" id="myHeader">
  <div class="navbar">
    <a href="#home"><h8 class="font-color">Portfolio</h8></a>
    <a href="#news"><h8 class="font-color">Paintings</h8></a>
    <a href="#news"><h8 class="font-color">Sculptures</h8></a>
    <a href="#news"><h8 class="font-color">Advices</h8></a>
    <a href="/blog"><h8 class="font-color">Art Blog</h8></a>
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
      <p class="font-color">Browse through my painintgs and see my latest work</p>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">
    <div class="card-inner">
      <img src="/images/empty.jpg" alt="sculptures" style="width:100%">
      <h1 class="font-color font-aclonica">Sculptures</h1>
      <p class="font-color">My latest passion is sculpting. Take a look at some of the things I've made.</p>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">
    <div class="card-inner">
      <img src="/images/socity.jpg" alt="advices" style="width:100%">
      <h1 class="font-color font-aclonica">Advices</h1>
      <p class="font-color">After so many years, I do have some tips to share.</p>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">
    <div class="card-inner">
      <img src="/images/melting.jpg" alt="blog" style="width:100%">
      <h1 class="font-color font-aclonica"><a href="/blog">Art blog</a></h1>
      <p class="font-color">All about art and artistic life: news, interesting stuff, etc.</p>    
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
window.onscroll = function() {myFunction()};

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
</body>
</html>
