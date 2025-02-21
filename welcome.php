<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Bus Pass MS</title>
  </head>
  <body>
    <style>
      .pricing-tables .tables-left-dec img {
  width: 418px;
  height: 851px;
  left: 0;
  top: 120px;
  position: absolute;
  z-index: 1;
}

.pricing-tables .tables-right-dec img {
  width: 359px;
  height: 848px;
  right: 0;
  top: 45px;
  position: absolute;
  z-index: 1
}

.pricing-tables {
  z-index: 2;
  position: relative;
  padding-top: 120px;
  margin-top: 0px;
}

.pricing-tables .section-heading {
  text-align: center;
  margin-bottom: 60px;
}

.pricing-tables .section-heading h2 {
  text-align: center;
  margin: 0px 60px 0px 60px;
  margin-bottom: -5px;
  position: relative;
  z-index: 1;
}

.pricing-tables .item {
  position: relative;
  z-index: 2;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 60px;
  text-align: center;
  box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
  border-radius: 45px;
}

.pricing-tables .item h4 {
  font-size: 20px;
  font-weight: 700;
  color: #2a2a2a;
}

.pricing-tables .item em {
  color: #ff695f;
  font-size: 15px;
  display: block;
  margin-top: 25px;
  text-decoration: line-through;
  font-style: normal;
}

.pricing-tables .item span {
  font-size: 44px;
  color: #ff695f;
  font-weight: 700;
  display: block;
  margin-top: -5px;
}

.pricing-tables .item ul {
  margin-top: 30px;
}

.pricing-tables .item ul li {
  display: block;
  font-size: 15px;
  color: #7a7a7a;
  margin-bottom: 20px;
}

.pricing-tables .item .main-blue-button {
  margin-top: 40px;
}

.pricing-tables .first-item {
  background-image: url(../images/first-plan-bg.png);
}

.pricing-tables .second-item {
  background-image: url(../images/second-plan-bg.png);
}

.pricing-tables .third-item {
  background-image: url(../images/third-plan-bg.png);
}
.main-blue-button-hover a {
  display: inline-block;
  background-color: #03a4ed;
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  text-transform: capitalize;
  padding: 12px 25px;
  border-radius: 23px;
  letter-spacing: 0.25px;
  transition: all .3s;
}

.main-blue-button-hover a:hover {
  background-color: #ff695f;
}
    </style>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Bus Pass MS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="pass.php">View Pass</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3 class="text"><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<style>
  .text{
    text-align:center;
  }
</style>
<hr>
</div>
<div class="text-center">
  <style>
    .text-center {
  text-align: center;
}
  </style>

<div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
          <h2>Types of Bus Pass</h2>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-3">
          <div class="item first-item">
            <h4>Student</h4>
            <em>₹100/day</em>
            <span>₹40</span>
            <div class="main-blue-button-hover">
              <a href="student.php">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item first-item">
            <h4>Employee</h4>
            <em>₹140/day</em>
            <span>₹50</span>
            <div class="main-blue-button-hover">
              <a href="employee.php">Get Started</a>
            </div>
          </div>
        </div>
      <div class="col-lg-3">
          <div class="item first-item">
            <h4>Normal</h4>
            <em>₹150/day</em>
            <span>₹70</span>
            <div class="main-blue-button-hover">
              <a href="normal.php">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item first-item">
            <h4>Special</h4>
            <em>₹120/day</em>
            <span>₹40</span>
            <div class="main-blue-button-hover">
              <a href="special.php">Get Started</a>
            </div>
          </div>
        </div>   
       </div>
    </div>
  </div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
