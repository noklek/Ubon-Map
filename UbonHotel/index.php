<!DOCTYPE html>
<html>

<!-- Template from w3school.com -->
<title>UBON HOTEL</title>
<!-- <meta charset="UTF-8"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */

.w3-bar .w3-button {
    padding: 16px;
}
.divlog{
  padding-top: 50px;
  padding-right: 500px;*/
  padding-bottom: 200px;
  padding-left: 500px;*/
  background-color: red;
}
.button {
    background-color: #848484;
    border: none;
    color: white;
    padding: 5px 50px;
    font-size: 16px;
}
.button2 {
    background-color: #848484;
    border: none;
    color: white;
    padding: 5px 40px;
    font-size: 16px;

}
.input{
  width: 40%;
  padding: 12px 20px;
  margin: 4px 0;
  border:#04B486;
}
.register{
  font-size: 20px;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide">UBON HOTEL</a>
    <!-- Right-sided navbar links -->

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>



<div class="w3-container" style="padding:128px 16px">
  <div class="divlog" align="middle">
    <div class="divlogg" style ="background-color:#D8D8D8" align="middle">
    <form style ="background-color:#D8D8D8" action="check.php" align="middle"  method="get">
      <br><br><br>
      <h2 class="form-signin-heading"  ><b>Please login</b></h2>
      <br>
      <input type="text" class="input" name="username" value="" placeholder="Username"/>
      <!-- <input type="text" class="input" id="username"  name="username" value="" placeholder="Email Address" /> -->
      <br><br>
      <input type="password" class="input" name="password" value="" placeholder="Password"/>
      <!-- <input type="password" class="input" id="password" name="password" value="" placeholder="Password" /> -->
      <br><br><br>
      <button  class="button" id="btnlogin" type="submit" >Login</button>


    </form>
    <br>

    <br><br>
  </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">

  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>



</body>
</html>
