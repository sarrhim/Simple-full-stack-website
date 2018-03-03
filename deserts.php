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
<title>deserts</title>
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
      document.getElementById("desertPage").style.marginRight = "230px";}
    else{
    document.getElementById("desertPage").style.marginRight= "0";}
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
<body id="desertPage" >
 
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
<section class="sugg03">
  	<video  autoplay controls id="vidbackground" >
  <source src="Sahara Desert.mp4" type="video/mp4">
</video>
</section>
<section   id="sugg" style="padding:240px 40px 40px 40px ">
    <div class="row ">
          
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3 "> 1. Namib Desert </br>The Namib, which at an age of 43 million years is widely accounted the world’s oldest desert, is located on the coast of southern Africa. A diverse set of animals live here, many of which exist nowhere else on the planet. The Namib Desert overlays coastal Namibia, extending into Angola and South Africa..
</p>
      </div>
      <div class="col-sm-5 logout centered" ><img src="img/des1.jpg"  style="img-thumbnail" ></div> 
      <hr >

    </div>
        <hr >

        <div class="row ">
          
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">Gobi Desert – China/Mongolia</br>The Gobi Desert is a beast of a desert spread across parts of southern Mongolia and northwestern China. It is famous for its role in the Mongol Empire and important stops along the Silk Road. The Gobi is also known for its extreme temperatures from as high as 122 degrees Fahrenheit (50 degrees Celsius) in the summer and extremely low temperatures in the winter. The area is also rich in fossils, including dinosaur eggs, and animals like Bactrian camels, Siberian ibex, and Gobi brown bears.
</p>
      </div>
      <div class="col-sm-5   logout centered" ><img src="img/des2.jpg"  style="img-thumbnail"></div> 
    </div>
<hr >

    <div class="row ">
           
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">Antarctic Desert – Antarctica</br>Winter darkness, cold, ice – these might be some of the words used to describe the continent of Antarctica. But, did you know you can add desert to that list? That’s right – Antarctica does not see enough precipitation to qualify as anything other than a desert. What little snow it does receive never melts and turns into ice. You won’t find any flora except for moss and algae. As for animals, you will see whales, seals and, of course, penguins.

</p>
      </div>
      <div class="col-sm-5   logout centered" ><img src="img/des3.jpg"  style="img-thumbnail" alt=""></div>
      <hr >

    </div>
    <hr >

    <div class="row ">
         
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">Wadi Rum, Jordan </br> Jordan’s Wadi Rum desert is a spectacular sea of red sand and craggy mountains which, thanks to the popularity of Petra and a thriving eco-tourism scene, is more accessible than ever. While the Wadi Rum was once the stomping ground of Lawrence of Arabia, it is now a major attraction in Jordan due to the amount of activities it offers: everything from world-class rock climbing to ancient petroglyphs, or camping out in Bedouin fashion to see the sunset illuminate the red desert and enjoy a light pollution-free night of star-gazing. 
      </div>
       <div class="col-sm-5  logout centered " ><img src="img/des4.jpg"  style="img-thumbnail" alt=""></div> 
    </div>
<hr >

    <div class="row ">
          
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3"> White Desert, Egypt <br> Another white desert on our list is located near the Bedouin town of Farafra in Western Egypt and looks like it was pulled straight from the pages of science fiction. The White Desert is covered with radiant white limestone that has been carved into bizarre mushroom-like shapes by centuries of wind and erosion. Most travelers opt for an overnight stay to enjoy a traditional Bedouin dinner and camping experience, as well as to see the unblemished night sky and the strange rock formations glow in the light of the campfire.

</p>
      </div>
          <div class="col-sm-5  logout centered " ><img src="img/des5.jpg"  style="img-thumbnail" ></div> 

    </div>


<hr >

    <div class="row ">
        
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">The Sahara Desert, North Africa<br>Perhaps the most famous of them all, the Sahara Desert has been featured many times in movies, stories, and songs. The third largest desert on Earth, it’s the hottest desert and its landscape varies greatly from one section to another. 
</p>
      </div>
       <div class="col-sm-5  logout centered " ><img src="img/des6.jpg"  style="img-thumbnail" ></div>  
    </div>



</section>

<FOOTER class="footer2">
<DIV> LET'S GOT LOST IN THIS BIG PLACE </DIV> 
</FOOTER>
</body>
</html>