<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .hero-image {
    background-image: url("/images/header.png");
    height: 50%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  
  .hero-text {
    text-align: left;
    position: absolute;
    top: 10%;
    left: 10%;
    transform: translate(-50%, -50%);
    color: rgba(87, 190, 211, 0.626);
  }
  
  .hero-text-subbtitle {
    text-align: left;
    position: absolute;
    top: 20%;
    left: 20%;
    transform: translate(-50%, -50%);
    color: rgba(87, 190, 211, 0.426);
  }
  
  .hero-text button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px 25px;
    color: rgba(34, 98, 111, 0.678);
    background-color: #ffffff;
    text-align: left;
    cursor: pointer;
  }
  
  .hero-text button:hover {
    background-color: #555;
    color: rgb(56, 85, 109);
  }
  
  .top-container {
    background-color: #020812;
    padding: 30px;
    text-align: center;
  }
  
  .header {
    padding: 10px 10px;
    background: #001b28dc;
    color: rgba(87, 190, 211, 0.626);
    padding: 10px;
  }
  
  .content {
    padding: 16px;
  }
  
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  
  .sticky + .content {
    padding-top: 102px;
  }

  .tabcontent {
    color: white;
    display: none;
    padding: 20px;
    text-align: center;
  }

  .navbar {
  overflow: hidden;
  background-color: #04113900;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: rgba(87, 190, 211, 0.626);
}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(1, 38, 26, 0.2);
  padding: 15px;
  text-align: center;
  background-color: rgba(48, 175, 201, 0.141);
  font-family: Arial, Helvetica, sans-serif;
}

.card-inner {
  padding: 15px;
  box-shadow: 0 4px 8px 0 rgba(1, 2, 16, 0.508);
  text-align: center;
  background-color: #020812;
  border-color: rgb(13, 108, 128);
  border-bottom: 3px solid
}

.font-aclonica {
  font-family: 'Aclonica';
}


.card button {
  margin-top: 20px;
  border: none;
  outline: 0;
  padding: 12px;
  color:  rgb(20, 152, 179);
  background-color: rgba(48, 175, 201, 0.275);
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.font-color {
  color: rgb(20, 152, 179);
}

.footer {
  background-image:url("/images/footer.png");;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgba(255, 0, 0, 0);
   color: rgba(10, 119, 120, 0.386);
   text-align: center;
}
  
</style>






<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/resources/css/onlinegallery.css">
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
      <p><button>Enter</button></p>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">
    <div class="card-inner">
      <img src="/images/empty.jpg" alt="sculptures" style="width:100%">
      <h1 class="font-color font-aclonica">Sculptures</h1>
      <p class="font-color">My latest passion is sculpting. Take a look at some of the things I've made.</p>
      <p><button>Ok</button></p>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">
    <div class="card-inner">
      <img src="/images/socity.jpg" alt="advices" style="width:100%">
      <h1 class="font-color font-aclonica">Advices</h1>
      <p class="font-color">After so many years, I do have some tips to share.</p>
      <p><button>Sure!</button></p>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">
    <div class="card-inner">
      <img src="/images/melting.jpg" alt="blog" style="width:100%">
      <h1 class="font-color font-aclonica">Art blog</h1>
      <p class="font-color">All about art and artistic life: news, interesting stuff, etc.</p>
      <p><a href="/blog"> <button type="button" class="btn btn-outline-primary float-right">Lets Read</button></a></p>
     
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
