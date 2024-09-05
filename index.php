<?php
  include 'server.php';
  
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SHOPPY</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container-fluid">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="images/lm.png" width="70" height="72" alt=""/>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
          <li class="nav-item active"> <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a></li>
        </ul>
        <div class="login-submit">
            <button ><a href="login.php">Login</a></button>
        </div>
      </div>
    </nav>
	  <br>
    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active"> <img class="d-block mx-auto" src="images/head.jpg" alt="">
        </div>
      </div>
</div>
	  <br>
<h4 class="text-center">รายการสินค้า</h4>
	  <br>
    <div class="row">
      <div class="col-lg-4">
        <div class="container-fluid">
          <div class="card col-md-4 col-lg-12"> <img src="images/1.jpg" alt="Card image cap" width="200" height="199" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-center">แคบหมูไร้มัน&nbsp;</h5>
</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="container-fluid">
          <div class="card col-md-4 col-lg-12"> <img src="images/2.jpg" alt="Card image cap" width="191" height="190" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-center">ตะกร้าพลาสติก&nbsp;</h5>
</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="container-fluid">
          <div class="card col-md-4 col-lg-12"> <img src="images/6.jpg" alt="Card image cap" width="198" height="190" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-center">ข้าวแต๋นน้ำแตงโม&nbsp;</h5>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>