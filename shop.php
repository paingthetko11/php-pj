<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packages</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/cf59577066.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

   <!-- nav bar -->

   <nav style=" box-shadow: 0 4px 8px 0 rgba(105, 105, 105, 0.2), 0 6px 20px 0 rgba(116, 116, 116, 0.19);" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Food Delivery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item ">
          <a class="nav-link" href="recipe.php">Recipe <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="shop.php">Drink</a>
          </li>

        <li class="nav-item active">
            <a class="nav-link" href="about.php">Contact us</a>
          </li>

      

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item ">
          <a class="nav-link navbar-primary bg-light" href="Log in.html">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-primary bg-light" href="Sign up.html">Sign up</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- nav bar -->

  <?php
error_reporting(1);
include('connection.php');
$data="SELECT * FROM shop ORDER BY id DESC";
$val=$con->query($data);
if ($val->num_rows > 0) {
while(list($id,$name,$price,$dis,$img) = mysqli_fetch_array($val)){
    echo "<div class='col-4'>
    <div class='card'>
    <img src='admin/img/$img'
    height='300' width='300' style='border-radius:20px;'  />
    <div class='card-content'>
        <h2 >$name</h2>
        <p style='color:green'>Price - $price MMK</p>
        <p>$dis</p>
        <center>  <a 
        href='order.php?name=$name&price=$price
    '><img src='images/buy.jpg' width=80 class='imageee'/> </a></center>
    </div>
</div>
<br><br>
    </div>";
  
}}else{
    echo "<h1 colspan='8' class='text-center'>
   <b> No data available</b></h1>";
}
?>


  <br><br><br><br>


  <!-- footer -->
  <footer class="bg-dark text-white pt-4 pb-4 " style="margin-top: auto; width: 100%;">
    <div class="container">
      <div class="row text-center">
       <div class="col-sm-3">
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" style="font-size: x-large;padding-right: 10%;color:white"></i>  </a>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook" style="font-size: x-large; padding-right: 10%; color:white;"></i></a>
            <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter" style="font-size: x-large;padding-right: 0%;color:white"></i></a>
        </div>
        
        <div class="col-sm-3"style="margin-bottom: 10px;"><a href="#"> </a></div>
        <div class="col-sm-3"style="margin-bottom: 10px;"><a href="#"> </a></div>
        <div class="col-sm-3" style="margin-bottom: 10px;">@Student ID-4742</div>
        
    </div>
  </footer>
  
  <!-- footer -->

</body>

</html>