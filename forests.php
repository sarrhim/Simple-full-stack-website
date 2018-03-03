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
<title>forest</title>
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
      document.getElementById("forestPage").style.marginRight = "230px";}
    else{
    document.getElementById("forestPage").style.marginRight= "0";}
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
</div>
<body id="forestPage" >
 
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
<section class="sugg04">
  	<div class="row">

       <div class="col-md-8 col-sm-12 " >
        <div  class="titleSugg titreshodow" >Forests</div>
      </div>
    </div>
</section>
<section   id="sugg" style="padding:40px">
    <div class="row ">
        <div class="col-sm-5  logout centered " ><img src="img/fo1.jpg"  style="img-thumbnail" ></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre"> Sagano Bamboo Forest, Japan – A magnificent Bamboo forest in the district of Arashiyama, west to Kyoto, Japan.
        </p>
      </div>
    </div>

      <hr >

      <div class="row ">
        <div class="col-sm-5  logout centered " ><img src="img/fo2.jpg"  style="img-thumbnail" ></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre"><I>Jiuzhaigou Valley, Sichuan, China</I>
 The “Valley of Nine Villages” is known for its many multi-level waterfalls, colorful lakes, and snow-capped peaks. Its elevation ranges from 2,000 to 4,500 metres (6,600 to 14,800 ft). It’s an UNESCO World Heritage Site since 1992 and a World Biosphere Reserve since 1997
      </div>
  </div>


   
</section>

<FOOTER class="footer2">
<DIV > ADOPT THE PACE OF NATURE.HER SECRET IS¨PATIENCE. </DIV> 
</FOOTER>
</body>
</html>