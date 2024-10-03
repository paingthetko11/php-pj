<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packages 1</title>

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

include('connection.php');

?>
  <br><br><br><br>
 <!-- Background image -->

 <div class="container">
 <div class="row ">
  <div class="col-12 mx-auto">   <img src="https://media.blueapron.com/assets/registration/homepage/desktop-splash-v2.webp?height=800&quality=90&format=pjpg" alt="" class="img-fluid">

  </div>
   <div class="col-10 mt-5 mx-auto  ">
    <h2 class="text-center">EVERYDAY SOMETHING DIFFERENT!</h2>
    <h5 class="text-center">Our mission is to offer appetizing healthy meals, delivered to different locations in Yangon. Our meals are fresh and delivered three times per week, with a variety of options including Keto, Paleo, and Vegetarian. We've adapted over 200 healthy versions of popular dishes from different cuisines worldwide.</h5>
 </div>
</div>
</div> 

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img
                src="https://media.blueapron.com/assets/registration/homepage/chef-experience.webp?height=374&quality=90" 
                class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h4 class="card-title">5 decades of top restaurant experience</h4>
                <p class="card-text">Our chefs bring high standards to crafting your meals.</p>
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="card">
              <img
                src="https://media.blueapron.com/assets/registration/homepage/fresh-ingredients.webp?height=374&quality=90"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Faster delivery of fresher ingredients</h4>
                <p class="card-text">80% of the ingredients are obtained straight from the producers.</p>
               

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="card">
              <img
                src="https://media.blueapron.com/assets/registration/homepage/flexible-mobile.webp?height=374&quality=90"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">You're busy, so we're flexible</h4>
                
                <p class="card-text">Get boxes on your schedule. Skip, pause, or cancel anytime.</p>
                
                
              </div>
            </div>
          </div>
          <div class="container">
            <p class="text-center">Get started for as little as $1.9 per serving</p>
            <p class="text-center"><a href="Sign up.html" class="btn btn-primary buybutton" style="width: 30%;">Get Start</a></p>

          <div class="card m-3 ">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="text-center">THIS WEEK'S FAVORITE!</h1>
                        <h3>BBQ Beef Brisket with Roasted Baby Potatoes and Broccoli Salad</h3>
                        <h5>Keto/Paleo Available</h5>
                        <p>Ingredients: Brisket, Celery Salt, Liquid Smoke, Sugar Free BBQ Sauce, Olive Oil, Oregano, Thyme, Baby Potatoes, Broccoli, Avocado Mayo, Onions, Pine Nuts, Apple Cider Vinegar and Organic Raw Honey.</p>
                        
                        
                        
                        
                        
                    </div>
                    <div class="col-sm-6">
                        <img src="https://www.ainameals.com/wp-content/uploads/2019/07/Brisket.jpg"
                                    class="card-img-top" alt="...">
                    </div>
                  </div>
            </div>
          </div>
          <div class="card m-3 ">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="text-center">WORK LESS ENJOY MORE!</h1>
                        <p>We make everything from scratch, to make sure every content in the meal follows the most current and proven food guidelines to reach and improve wellness and physical performance.</p>
                        <p>Free up the time spent in the kitchen and leave that work to us!</p>
                        
                        
                    </div>
                    <div class="col-sm-6">
                        <img src="https://www.ainameals.com/wp-content/uploads/2018/08/Meatloaf.jpg"
                                    class="card-img-top" alt="...">
                    </div>
                  </div>
            </div>
          </div>
          
          <p class="text-center"><a href="Recipe.html" class="btn btn-primary buybutton" style="width: 30%;">Other menu</a></p>
    </div>
</div>
</div>
 </div>


<!-- Background image -->

 

  


  
  

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
</body>
</html>