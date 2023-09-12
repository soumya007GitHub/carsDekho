<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "carsdekho";
$conn = mysqli_connect($servername, $username, $password, $database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarsDekho</title>
    <style>
      *{
    margin : 0;
    padding : 0;
}
#brand-logo{
    /* display:inline-block; */
    margin-right : 20%;
}
input[type='radio'] {
    accent-color: rgb(255, 102, 0);
}
.cars-category{
    color : rgb(83, 83, 83);
    text-decoration: none;
}
.cars-category:hover{
    color : black;
    text-decoration: none;
}
#lang-select{
    margin-left:200px;
}
.navbar{
    position : fixed;
}
.navbar-right{
    padding-left : 30px;
}
.navbar-right-right{
    display:inline-block;
    margin-top:10px;
}
#division{
    margin-top:10px;
    padding: 10px;
}
#division h3{
    margin-bottom : 5px;
}
.services-offered{
    display:inline;
    font-size : 20px;
    margin-left : 5px;
}
.services-icons{
    font-size : 30px;
    color : rgb(83, 83, 83);
}
footer ul h6,li{
    list-style-type:none;
}
footer ul li p{
    font-size : 13px;
    color : rgb(83, 83, 83);
}
.ventures{
    margin-top : 50px;
}
.social-icons{
    margin-left : 13px;
    font-size : 20px;
}
@media(max-width:991px){
    #lang-select{
        margin-left : 0px;
    }
    .search-bar{
        margin-left : 20px;
    }
    
}
@media(max-width:1252px){
    #brand-logo{
        margin-right : 10%;
    }
    #lang-select{
        margin-left : 0px;
    }
}
@media(max-width:1164px){
    #form-raise{
        left: 5% !important;
        padding : 30px !important;
        top : 10px !important;
    }
}
@media(max-width:991px){
    #form-raise{
        display : none;
    }
}
    </style>
    <!-- BootStrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a359d5e7cb.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img id = "brand-logo" src = "images/LOGO.svg" alt = "logo" style="width:180px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class = "nav-item">
                <form  class="form-inline my-2 my-lg-0 search-bar">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="display:inline-block;">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                  </form>
              </li>
            <li class="nav-item dropdown navbar-right" id = "lang-select">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <u>English</u>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">English</a>
                <a class="dropdown-item" href="#">हिंदी</a>
                <a class="dropdown-item" href="#">తెలుగు</a>
                <a class="dropdown-item" href="#">தமிழ்</a>
                <a class="dropdown-item" href="#">മലയാളം</a>
                <a class="dropdown-item" href="#">ಕನ್ನಡ</a>
            </div>
            </li>
            <li class="nav-item navbar-right navbar-right-right">
                <i class="fa-regular fa-heart" style="font-size:15px;"></i>
              </li>
              <li class="nav-item navbar-right navbar-right-right">
                <i class="fa-regular fa-user"></i>
                <a class="nav-link" href="#" style="padding:0; display:inline-block;">Login/Register</a>
              </li>
          </ul>
          </div>
      </nav>
      <hr style = "margin:0; height:1px; border-top:0.5px solid grey;">
      <!-- Options Sections -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto" style="margin-right:0;">
            <li class="nav-item active">
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        NEW CARS
                      </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Explore New cars</a>
                      <a class="dropdown-item" href="#">Electric cars</a>
                      <a class="dropdown-item" href="#">Upcoming cars</a>
                    </div>
                  </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       BUY & SELL USED CARS
                      </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Cars in your city</a>
                      <a class="dropdown-item" href="#">Sell cars in your city</a>
                      <a class="dropdown-item" href="#">Buy used cars</a>
                    </div>
                  </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        NEWS, REVIEWS & VIDEOS
                      </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">News and top stories</a>
                      <a class="dropdown-item" href="#">Car expert reviews</a>
                      <a class="dropdown-item" href="#">Video reviews</a>
                    </div>
                  </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CAR SERVICES
                      </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Pay pending challan</a>
                      <a class="dropdown-item" href="#">Connected Cars</a>
                      <a class="dropdown-item" href="#">Car service history</a>
                    </div>
                  </div>
            </li>
          </ul>
          <span>
            <div class="dropdown">
                <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select City
                  </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Mumbai</a>
                  <a class="dropdown-item" href="#">Bangalore</a>
                  <a class="dropdown-item" href="#">Hyderabad</a>
                  <a class="dropdown-item" href="#">Delhi</a>
                </div>
              </div>
          </span>
        </div>
      </nav>
      <!-- Form -->
      <div class="hero" style = "position:relative;">
      <div class = "container" style = "width:30%;">
      <form id ="form-raise" style = " position:absolute; z-index:1; background-color:white; padding:40px; border-radius : 10px;top : 30px; left : 12%;">
      <h3 class="mb-3">Find your right car</h3>
  <div class="form-group">
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">By Budget</label>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">By Brand</label><br>
  </div>
  <div class="form-group">
  <select class="form-control">
  <option>Select Budget</option>
  <option>1 - 5 Lakh</option>
  <option>5 - 10 Lakh</option>
  <option>15 - 20 Lakh</option>
  <option>20 - 25 Lakh</option>
  <option>Above 25 Lakh</option>
</select>
  </div>
  <div class="form-group">
  <select class="form-control">
  <option>All Vehicle Types</option>
  <option>Hatchback</option>
  <option>Sedan</option>
  <option>SUV</option>
  <option>MUV</option>
  <option>Luxury</option>
</select>
  </div>
  <button type="submit" class="btn btn-danger btn-block" style = " background-color : rgb(255, 102, 0);">Search</button>
</form>
</div>
<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">';
<div class="carousel-item active">
  <img class="d-block w-100" src="images/1.webp" alt="First slide">
</div>
<div class="carousel-item">
      <img class="d-block w-100" src="images/2.webp" alt="Second slide">
    </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
<!-- Most Searched Cars -->
<div class="container" id = "division">
  <h3>The most searched cars</h3>
  <?php
  $sql = "SELECT * FROM `car categories`";
  $result = mysqli_query($conn, $sql);
  echo '<ul>';
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $title = $row['name'];
      echo '<li class = "mr-5" style = "display:inline-block;"><a class="cars-category nav-item" href="index.php?catId='.$id.'">'.$title.'</a></li>';
    }
    echo '</ul>';
  ?>
</div>

<!-- Most searched cars based on category -->
<?php 
if(isset($_GET['catId'])){
  $cat_id  = $_GET['catId'];
}
else{
  $cat_id = 1;
}
$sql = "SELECT * FROM `cars` WHERE catid = $cat_id";
$result = mysqli_query($conn, $sql);
echo '<div class="container">
<div class="row">';
while($row = mysqli_fetch_assoc($result)){
  $image_name = $row['image_name'];
  $car_name = $row['name'];
  $price = $row['price'];
  echo '<div class="col-lg-3 col-md-6 col-sm-6 mb-3">
  <div class="card" style="width: 17rem;">
  <img class="card-img-top" src="cars-images/'.$image_name.'.webp" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">'.$car_name.'</h5>
  <p class="card-text">'.$price.'</p>
  <a href="#" class="btn btn-outline-danger">Check September Offers</a>
  </div>
  </div>
</div>';
}
echo '  </div>
</div>';
?>
<!-- Latest cars section -->
<?php 
$sql = "SELECT * FROM `cars` WHERE catid = 5";
$result = mysqli_query($conn, $sql);
echo '<div class="container" style = "margin-top : 40px; margin-bottom : 40px;">
<h3>Latest Cars</h3>
<div class="row">';
while($row = mysqli_fetch_assoc($result)){
  $image_name = $row['image_name'];
  $car_name = $row['name'];
  $price = $row['price'];
  echo '<div class="col-lg-3 col-md-6 col-sm-6 mb-3">
  <div class="card" style="width: 17rem;">
  <img class="card-img-top" src="cars-images/'.$image_name.'.webp" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">'.$car_name.'</h5>
  <p class="card-text">'.$price.'</p>
  <a href="#" class="btn btn-outline-danger">Check September Offers</a>
  </div>
  </div>
</div>';
}
echo '  </div>
</div>';
?>

<!-- Footer -->
<hr>
<footer>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
    <i class="fa-solid fa-award services-icons"></i>
      <h6 class = "services-offered">India's #1</h6><br>
      <p>Largest Auto portal
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <i class="fa-solid fa-car services-icons"></i>
      <h6 class = "services-offered">Car Sold</h6>
      <p>Evrey 4 minute</p>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <i class="fa-solid fa-percent services-icons"></i>
    <h6 class = "services-offered">Offers</h6>
      <p>Stay updated pay less</p>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <i class="fa-solid fa-magnifying-glass services-icons"></i>
    <h6 class = "services-offered">Compare</h6>
      <p>Decode the right car</p>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <ul>
        <li><h6 class = "footer-headings">About Cardekho<h6></li>
        <li><p>About</p></li>
        <li><p>Career With Us</p></li>
        <li><p>Terms & Conditions</p></li>
        <li><p>Privacy Policy</p></li>
        <li><p>Corporate Policies</p></li>
        <li><p>Investors</p></li>
        <li><p>FAQs</p></li>
      </ul>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <ul>
        <li><h6 class = "footer-headings">Connect With Us<h6></li>
        <li><p>Feedback</p></li>
        <li><p>Contact Us</p></li>
        <li><p>Advertise With Us</p></li>
      </ul>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <ul>
        <li><h6 class = "footer-headings">Others<h6></li>
        <li><p>Health Insurance</p></li>
        <li><p>Term Insurance</p></li>
        <li><p>Life Insurance</p></li>
        <li><p>Crack-ED</p></li>
        <li><p>Personal Loan</p></li>
        <li><p>Tyre Dekho</p></li>
        <li><p>Battery Dekho</p></li>
        <li><p>Girnar Vision Fund</p></li>
      </ul>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <h6 class="mb-3">Experience CARDEKHO APP</h6>
      <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-dark btn-sm mb-1 mr-2" style = "width:120px;"><i class="fa-brands fa-apple" style="color: #fafafa;"></i> Download</button>
        </div>
        <div class="col-lg-6">
        <button type="button" class="btn btn-dark btn-sm" style = "width:120px;"><i class="fa-brands fa-google-play"></i> Download</button>
        </div>
      </div>
      <div class = "container ventures">
      <div class="row">
        <h6>CARDEKHO GROUP VENTURES</h6>
        <div class="col-lg-6 col-md-6 col-sm-12"  style = "padding-left:0;"><img src = "images/bikedekho.svg"></div>
        <div class="col-lg-6 col-md-6 col-sm-12"><img src = "images/rupyy.svg"></div>
        <div class="col-lg-6 col-md-6 col-sm-12"  style = "padding-left:0;"><img src = "images/zigwheels.svg"></div>
        <div class="col-lg-6 col-md-6 col-sm-12"><img src = "images/insurancedekho.svg"></div>
      </div>
</div>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <p>© 2023 Girnar Software Pvt. Ltd.</p>
    </div>
    <div class="col-lg-3">
    Connect:
    <i class="fa-brands fa-facebook social-icons"></i>
    <i class="fa-brands fa-x-twitter social-icons"></i>
    <i class="fa-brands fa-youtube social-icons"></i>
    <i class="fa-brands fa-instagram social-icons"></i>
    <i class="fa-brands fa-linkedin social-icons"></i>
    </div>
  </div>
</div>
</footer>
<!-- BootStrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>