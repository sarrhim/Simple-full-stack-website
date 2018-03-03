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
<title>historical</title>
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
      document.getElementById("historicalPage").style.marginRight = "230px";}
    else{
    document.getElementById("historicalPage").style.marginRight= "0";}
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
<body id="historicalPage" >
 
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
<section class="sugg02">
  	
</section>


<section   id="sugg" style="padding:40px">
    <div class="row ">
        <div class="col-sm-5  logout centered " ><img src="img/ist.jpg"  style="img-thumbnail" ></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre"> Istanbul is the crown jewel in an important thread of history. When it was known as Constantinople, it was the capital of the Byzantine Empire following the fall of Rome, and it was a significant stop in the Silk Roads. In fact, due to its central location between the East and the West, most classical civilizations played some part in shaping it. Istanbul was also an Ottoman capital until it was dissolved after World War I.
        </p>
      </div>
    </div>

      <hr >

      <div class="row ">
        <div class="col-sm-5  logout centered " ><img src="img/tun.jpg"  style="img-thumbnail"></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class="cadre"><I>Carthage, Tunisia</I>
 It is believed that the Phoenician Queen Dido founded Carthage around 900 BC. The Romans ultimately brought the Carthaginian Empire to ruin as a result of the Punic Wars. Because of its central location, however, they realized that is was a necessary strategic location in their empire. Under Julius Caesar, the city was revived and ultimately flourished as a colony. Unfortunately, Carthage’s plight as a foreign conquest did not end there. The Vandals, Muslim Conquerors, and the Byzantines all had their hand in Carthage’s history. Many ruins were left behind including Roman villas, the ancient Antoine Baths, the Sanctuary of Tophet, and the Punic Port that still harbors remarkable views of the sea.
      </div>
  </div>
</section>

<FOOTER class="footer2">
<DIV> HISTORY REPEATS ITSELF </DIV> 
</FOOTER>
</body>
</html>