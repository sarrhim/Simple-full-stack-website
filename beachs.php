<!doctype html>
 <?php
session_start(); 
?>

<?php 
$user=$_SESSION["username"];
$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,"webproject");
$sql1=mysqli_query($connection,"select * from users where username='$user'");
$row=mysqli_fetch_array($sql1);
?>
<html>
<head>
<meta charset="utf-8">
<title>beaches</title>
<link href="css/styles.css" rel="stylesheet">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


</head>
<script>
function openNav() {
    
    if (document.getElementById("slide").checked) {
      document.getElementById("beachPage").style.marginRight = "230px";}
    else{
    document.getElementById("beachPage").style.marginRight= "0";}
    }
</script>

<input type="checkbox" id="slide" onchange="openNav()" >

  <nav class="sidebar">
    <ul>
<br>
      <li>  <img src="img/person.png" class="img-thumbnail" > </li> 
      <li > <?php echo $row['name']; ?> </li> 

      <li> <?php echo $row['lastname']; ?> </li> 
       <li class="logout">
         <a class="page-scroll logout" href="logout.php">Log out   <i class="fa fa-sign-out"></i></a>
      </li>
    </ul>
  </nav>

<body id="beachPage" >
 
<nav id="Nav" class="navbar navbar-default navbar-fixed-top container-fluid">
  <div class="navbar-header">
    <a  href="indexFinal.php"><img src="img/logo.png"></a> </div>
  <div id="navb">
    <ul class="nav navbar-nav navbar-right">
     
      <li>
         <a class="page-scroll" href="forests.php">Forests</a>
      </li>
      <li>
         <a class="page-scroll" href="beachs.php">Beaches</a>
      </li>
      <li>
         <a class="page-scroll" href="deserts.php">Deserts</a>
      </li>
      <li>
         <a class="page-scroll" href="historical.php">Historical Cities</a>
      </li>

      <li>
      <label for="slide"><img src="img/person.png" class="user thumbnail"></label>
      </li>
    </ul>
  </div>
</nav>
<div class="slideshow">
  	<div class="slideshow-container">

<div class="mySlides fade1">
  <div class="numbertext">1 / 5</div>
  <img src="img/whitehaven.jpg" style="width:100%">
  <div class="text"> Australia, WhiteHaven,The best Beach for 2017</div>
</div>

<div class="mySlides fade1">
  <div class="numbertext">2 / 5</div>
  <img src="img/whitehaven4.jpg" style="width:100%">
  <div class="text">Enjoy Beach Night</div>
</div>

<div class="mySlides fade1">
  <div class="numbertext">3 / 5</div>
  <img src="img/whitehaven6.jpg" style="width:100%">
  <div class="text">Discover The Deep Sea</div>
</div>

<div class="mySlides fade1">
  <div class="numbertext">4 / 5</div>
  <img src="img/whitehaven8.jpg" style="width:100%">
  <div class="text">Fly and Enjoy the beauty of beach</div>
</div>

<div class="mySlides fade1">
  <div class="numbertext">5 / 5</div>
  <img src="img/whitehaven7.jpg" style="width:100%">
  <div class="text">Do Crazy Activities</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<section   id="sugg" style="padding:40px">
    <div class="row ">
        <div class="col-sm-5  logout centered "><img src="img/be1.jpg"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class="cadre2"> Grace Bay: “Unbelievably clear, clean water with hundreds of shades of blues and greens and white sugar sand beaches!”</br>Best time to go: Year-round
Shop for a place to stay
45 Hotels
7 B&B and Inns
414 Vacation Rentals.</p>
      </div>
      <hr >

    </div>
        <hr >

        <div class="row ">
        <div class="col-sm-5   logout centered" ><img src="img/be2.jpg"  style="img-thumbnail" ></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2"> Eagle Beach:“Aruba's most beautiful beach. Private, quiet, serene, amazing!”
Best time to go: Year-round
Shop for a place to stay
24 Hotels
5 B&B and Inns
155 Vacation Rentals</p>
      </div>
    </div>
<hr >

    <div class="row ">
        <div class="col-sm-5  logout  centered" ><img src="img/be3.jpg"  style="img-thumbnail" ></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">La Concha Beach:“Picturesque beautiful beach with fab walk way”
Best time to go: June - September
Shop for a place to stay
50 Hotels
77 B&B and Inns
678 Vacation Rentals.

</p>
      </div>
      <hr >

    </div>
    <hr >

    <div class="row ">
        <div class="col-sm-5  logout centered " ><img src="img/be4.jpg"  style="img-thumbnail" ></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Playa Norte:“Calm turquoise waters, pure white powdery sand. Water so blue, it makes the sky look pale.”
Best time to go: Year-round
Shop for a place to stay
38 Hotels
37 B&B and Inns
111 Vacation Rentals.</p>
      </div>
    </div>
<hr >

    <div class="row ">
        <div class="col-sm-5   logout centered" ><img src="img/be5.jpg"  style="img-thumbnail" ></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Anse Lazio:“Picture perfect, with crystal clear, warm waters, shade, sun and powder white sand”
Best time to go: Year-round
Shop for a place to stay
33 Hotels
41 B&B and Inns
34 Vacation Rentals.

</p>
      </div>
    </div>
<hr >

    <div class="row ">
        <div class="col-sm-5  logout centered " ><img src="img/be6.jpg"  style="img-thumbnail"></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Flamenco Beach:“The water was so clear and blue and gorgeous against the backdrop of the mountains. You can't take a bad picture here.”
Best time to go: Year-round
Shop for a place to stay
4 Hotels
19 B&B and Inns
47 Vacation Rentals.

</p>
      </div>
    </div>
<hr >

    <div class="row ">
        <div class="col-sm-5   logout centered" ><img src="img/be7.jpg"  style="img-thumbnail" ></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Bavaro Beach:“Bavaro Beach is an excellent example of why visitors flock to Punta Cana: for the soft sand and clear waters. Protected by an offshore reef, this beach is a nice place for snorkeling!”
Best time to go: Year-round
Shop for a place to stay
110 Hotels
30 B&B and Inns
884 Vacation Rentals.</p>
      </div>
    </div>
    <hr >

    <div class="row ">
        <div class="col-sm-5  logout centered " ><img src="img/be8.jpg"  style="img-thumbnail"></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Seven Mile Beach: Negril, Jamaica:“The beach is beautiful and clean. The promenade is wide and a great place to people watch.”
Best time to go: June - September
Shop for a place to stay
64 Hotels
16 B&B and Inns
169 Vacation Rentals
</p>
      </div>
    </div>


</section>

<FOOTER class="footer2">
<DIV> LET THE SEA SET YOU FREE </DIV> 
</FOOTER>
</body>
</html>