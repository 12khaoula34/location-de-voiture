<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
.mySlides {display:none;}

#ab{
    margin-left:50px;
    position:relative;
}

#abText{
    margin-left:50px;
}
#box {
  margin: 30px;
  border: 1px solid black;
  position: absolute;
      
        background: rgb(0, 0, 0);/* Fallback color */
        background: rgba(0, 0, 0, 0.2);/* Black background with opacity */
        color: #ffffff;
      
        padding: 20px;
        font-size: 30px;


}
  
body {
  font-family: 'Times New Roman', serif;
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">AutoKH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ab">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cars.php">Cars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Our Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cu">Contact us</a>
      </li>
    </ul>
    <a class="btn btn-outline-success my-2 my-sm-0" href="signin.php">Log out</a>
  </div>
</nav>
<h2 class="w3-center" id="abText">About us</h2> 
<section id="ab">



<div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides"  height="400px" src="clio.jpg" style="width:100%">
  <img class="mySlides"  height="400px" src="clio2.jpg" style="width:100%">
  <img class="mySlides" height="400px" src="clio3.jpg" style="width:100%">
  <div id="box" class="w3-display-middle w3-large w3-container w3-padding-16">
    une location de voiture 
</div>
</section>



<section id="services"></section>


<section id="cu"></section>









<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>