<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
include_once 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
            
  $un = mysqli_real_escape_string($conn, $_POST['username']);
  $pw = mysqli_real_escape_string($conn, $_POST['password']);
  
  $sql = "SELECT * FROM users WHERE username = '$un' and password = '$pw'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  
  if($count > 0) {
    echo "<script>alert('You are successfully Logged in');
        location.href='main_menu.php';</script>";
  } else {
      echo '<script>alert("Invalid Credentials")</script>';
  }
}

?>

<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<title>Login</title>
</head>
<style>

    body, html {
    margin: 0; 
    height: 100%; 
    overflow: hidden
}

  body {
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin:0;
}

.log-in{
    max-width: 20rem; 
    position: absolute; 
    top: 45%; left: 50%; 
    transform: translate(-50%,-50%);
    box-shadow: 10px 10px;

}

.carousel{
    margin-top: 10px;
}

.bg {
  animation:slide 10s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, rgb(83, 76, 76) 50%, rgb(0, 0, 0) 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:15s;
}

.bg3 {
  animation-duration:10s;
}
@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}

.box{
    margin-bottom: .5rem;
}

</style>
<body>
  
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    </div>

<form action="" method="post">
<div class="card mb-3 log-in" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-lg-6 carousel">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="2000">
                <img src="./img/logo.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="./img/logo1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="./img/logo2.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
      </div>
      <div class="col-lg-6">
        <div class="card-body">
            <h4 class="card-title text-center">LOGIN!</h4>
            <div class="form-group">
                Username 
                <input type="text" name="username" class="form-control" placeholder="Enter Email" required>
                <small class="form-text text-muted box">Enter Valid Email</small>
                Password
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="row btn-block" style="margin: auto;">
              <button class="btn btn-dark btn-block btn-sm confirm">
                Login
              </button>
              <p class="text-muted">
                don't have an account? 
              <a href="register.php">
                register here!
              </a>                
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


    

    <div style="margin-bottom: 5rem;"></div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>