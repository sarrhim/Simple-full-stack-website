<?php session_start();?>
<!Doctype html> 


<?php
$connection = mysqli_connect("localhost","root",""); 

$db = mysqli_select_db($connection,"webproject");

if(isset($_POST["submit"])){
$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($connection,"select * from users where username='$username' and password='$password'");
   if (mysqli_num_rows($result)==0) { echo "you are not registered "; }
else {
session_start(); 
$_SESSION["username"]=$_POST["username"]; 
header("Location: indexFinal.php");
exit();}
}
mysqli_close($connection); 
?>

<html>

<head>
<meta charset="utf-8">
<title>acceuil</title>
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

</head>


  <body id="toop" >



   
<nav id="Nav" class="navbar navbar-default navbar-fixed-top container-fluid a">
	 <div class="navbar-header">
                <a  href="#toop"><img src="img/logo.png"></a>
            </div>
           
            <div  id="navb">
                <ul class="nav navbar-nav navbar-right">
                    <li >
                        <a class="page-scroll" href="#suggestions">Our Suggestions</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Our team</a>
                    </li>
                     <?php  if(!isset($_SESSION["username"]) ) {

                      echo'<li><a class="page-scroll" href="#login">LOG IN</a></li>';} else {echo'<li class="logout">
         <a class="page-scroll logout" href="logout.php">Log out   <i class="fa fa-sign-out"></i></a>
      </li>'; }?>
                </ul>
            </div>
</nav>
<header>
  <div class="headerIn titreshodow" >
    <div >YOU WANT TO TRAVEL  </div>
    <div>YOU DON'T KNOW WHERE TO GO</div>
	  <div>FOLLOW US</div><hr width="50px" >
    <?php  if(!isset($_SESSION["username"]) ) {

echo'<a  href="#login">  <button type="button" class=" float btnHeader btnForm" style="margin:20px;width:100px;">  LOG IN
</button></a>'; }?>
  
  </div>
</header>


<section style="padding:40px 150px 40px 150px;" id="suggestions">
  <H2 style="padding:20px">Where do you want to go?</H2>
  <div class="row">

   

   <?php if(isset($_SESSION["username"]) ) {echo'<a href="beachs.php">';} ?>

            <div class="picture-wrapper col-md-6 ">

                <div class="picture"> <img src="img/beach5.jpg"> </div>
                
                <div class="find">
                <div class="find-overlay">
                  <div class="content"><p>BEACHES </p></div>               
                </div>  
                </div>  

          </div>
</a>

 <?php if(isset($_SESSION["username"]) ) {echo'<a href="deserts.php">';} ?>

            <div class="picture-wrapper col-md-6">

                <div class="picture"> <img src="img/desert1.jpg"> </div>
                
                <div class="find">
                <div class="find-overlay">
                  <div class="content"><p>DESERTS</p></div>                 
                </div>  
                </div>  

          </div>

  </a>

 <?php if(isset($_SESSION["username"]) ) {echo'<a href="historical.php">';} ?>
            <div class="picture-wrapper col-md-6">

                <div class="picture"> <img src="img/his3.jpg" > </div>
                
                <div class="find">
                <div class="find-overlay">
                  <div class="content"><p>HISTORICAL CITIES</p></div>                
                </div>  
                </div>  

          </div>
</a>

 <?php if(isset($_SESSION["username"]) ) {echo'<a href="forests.php">';} ?>

            <div class="picture-wrapper col-md-6">

                <div class="picture"> <img src="img/for1.jpg" > </div>
                
                <div class="find">   
                <div class="find-overlay"> 
                  <div class="content"><p>FORESTS</p></div>                 
                </div>  
                </div>  

          </div>

        </a>

</div>
  
</section>





<section class="bloc4" id="team"> 
  <div class="container">
      <h2  >Our team</h2>

    <div class="row" >
      <a href="cv sarra.html" target="_blank"><div class="col-sm-6 teamItem"> <img class="imgTeam" src="img/team1.jpg" >
        <p class="teamName">Rhim Sarra</p>
        
      </div></a>


     <a href="cv ste.html" target="_blank"> <div class="col-sm-6 teamItem"> <img class="imgTeam" src="img/team2.jpeg">
        <p class="teamName">Stéphane de Greef</p>
        
      </div></a>
    </div>
  </div>
</section>

 <?php 

   if(!isset($_SESSION["username"]) ) {echo'<section class="bloc3 " id="login" > 
    <div class="container">
    <h2  style="color: #fff;">Register now</h2>
    <p style="margin-top:20px;margin-bottom:30px; color:#fff">Log in or register now to get access to our experiences!</p>
    <div class="row" >
      <form id="form1" method="post" >
        <div class="col-sm-3">
          <input name="username" id="ID" type="text" class="inputForm" placeholder="ID" required>
        </div>
        <div class="col-sm-3">
          <input name="password" id="password" class="inputForm" type="password" placeholder="password" required>
        </div>
        <div class="col-sm-3">
          <input type="submit" class="btnForm" name="submit" value="LOG IN"/>
        </div>
        <div class="col-sm-3">
          <input type="button" class="btnForm" id="myBtn" value="REGISTER NOW!"/>
        </div>
      </form>
    </div>
  </div>
  
  <div id="myModal" class="modal"> 
    <div class="modal-content"> <span class="close">x</span>
      <p>Register here </p>
      <form  method="POST" action="./indexFinal.php" name="formulaire" id="formulaire" >
        <input type="text" class="inputForm" name="name2" placeholder="Name">
        <br>
        
        <input type="text" class="inputForm" name="lastname2" placeholder="Last name" required>
        <br>
        <input type="text" class="inputForm" name="username2" placeholder="Username" required>
        <br>
        <input type="password" class="inputForm" name="password2" placeholder="password" required>
        <br>
        <input type="submit" class="btn btnForm " name="submit2" value="REGISTER" required>
        <br>
      </form>
</div>
  </div>
  <!----- --> 
</section>';}?>

          <?php 
          function redirect($url)
{
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';
    echo $string;
}

if(isset($_POST["submit2"])){

  $name = $_POST["name2"];
  $lastname = $_POST["lastname2"];
  $username = $_POST["username2"];
  $password = $_POST["password2"];
  
      $connection = mysqli_connect("localhost", "root", ""); 
      $db = mysqli_select_db($connection,"webproject");
      $reponse=mysqli_query($connection,"insert into users(name,lastname,username,password) values('$name','$lastname','$username','$password')");


session_start(); 
$_SESSION["username"]=$_POST["username2"];   
redirect("indexFinal.php");

} 

?>


<script> 
var modal = document.getElementById('myModal');// Get the html modal
var btn = document.getElementById("myBtn");// Get the button
var span = document.getElementsByClassName("close")[0];// Get the <span> X : close 
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}

</script>


<section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.488357161279!2d10.636119415262373!3d35.81249208016386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1302756a7452317b%3A0xfe8bdcb107b21c72!2sInstitut+Sup%C3%A9rieur+des+Sciences+Appliqu%C3%A9es+et+de+Technologie+de+Sousse!5e0!3m2!1sfr!2s!4v1461086634783" height="350" width="100%" style="pointer-events: none; border:none;"></iframe>
</section>
<footer class="footer2">
<div>
   <marquee scrollamount="5" direction="left" onmouseover="this.stop()" onmouseout="this.start()">&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Travel and change of place impart new vigor to the mind.” – Seneca
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Twenty years from now you will be more disappointed by the things you didn’t do than by the ones you did do.” – Mark Twain
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Stop worrying about the potholes in the road and enjoy the journey.” – Babs Hoffman</marquee>


</marquee>
</div>
</footer>

</body>

</html>