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

<center>
    <div class="contact-from">
        <div class="form-area">
            <div class="animated fadeInDown">
                <h2>Contact Us</h2>
                <br>
            </div>

            <?php
    error_reporting(1);
    include('connection.php');
    if(isset($_POST['sub'])) {  
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Enclose `order` table name in backticks
        $query = "INSERT INTO `contact` VALUES ('', '$name', '$email', '$message')";
        $con->query($query); 
        
        echo "<p style='color:green'>Message Sent Successfully!</p>";
    }
?>

            
            <div class="contact">
                <div class="map animated fadeInLeft">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1859583524038!2d96.12825917601265!3d16.817128383976065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb358e2a14a7%3A0xaa7164fd3518cdc0!2sTime%20City!5e0!3m2!1sen!2smm!4v1725954919484!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <form method="post" class="form animated fadeInUp">
                   

                    <label>
                        <input type="text" class="subject" id="subject" name="name" required>
                        <div class="label subject-text">Name</div>
                    </label>

                    <label>
                        <input type="email" class="email" id="email" name="email" required>
                        <div class="label email-text">E-mail</div>
                    </label>

                    <label>
                        <textarea class="help-box" id="helpBox" cols="30" rows="10" required name="message"></textarea>
                        <div class="label help-text">Message</div>
                    </label>

                   <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                        <input type="submit" value="Submit" name="sub" class="btn btn-outline-success" >
                        </div>
                        <div class="col-4"></div>
                   </div>   
                </form>
            </div>
        </div>
    </div>
<br>

    </center>

  <!-- end subscribe section -->

  <section class="container-fluid footer_section">
   
  </section>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>

  <!-- end owl carousel script -->
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

.contact-from {
    width: 1150px;
    height: 560px;
    padding: 50px 80px;
    background: url(../images/images.png);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: center;    
    transition: .5s all ease;

    .form-area {      

        h2 {
            font-weight: 500;
            font-size: 28px;
            color: #4F4F4F;
            text-align: center;
            transition: .5s all ease;
        }

        p {
            max-width: 340px;
            font-weight: 300;
            color: #464646;
            margin: auto;
            text-align: center;
        }
    }

    .contact {
        margin-top: 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: .5s all ease;

        .map {
            width: 400px;
            margin-right: 35px;
            animation-duration: 1.5s;

            iframe {
                width: 100%;
                height: 300px;
                box-shadow: 0 0 8px rgba(0,0,0, .3);
                
            }
        }

        .form {
            width: 525px;
            transition: .5s all ease;
            animation-duration: 1.5s;

            .label {
                background-color: white;
                color: #6b6b6b;
                font-size: 17px;
                font-weight: 300;
                margin: 0 8px;
                padding: 0 5px;
                position: absolute;
                transition: 0.5s all cubic-bezier(0.5, 1.35, 0.5, 1.35);
            }
            
            .email-text {
                transform: translateY(-51px);
            }

            .subject-text {
                transform: translateY(-52px);
            }

            .help-text {
                transform: translateY(-112px);
            }
           
            input, textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #DADCE0;
                border-radius: 5px;
                outline: none;
                margin-bottom: 20px;
                transition: .3s;

                &:focus {
                    border: 1px solid #4285F4;
                    box-shadow: inset 1px 1px 0 #4285F4, inset -1px -1px 0 #4285F4;
                }    
                
                &:focus + .label, &:valid + .label {
                    font-size: 13px;
                    font-weight: 600;
                    color: #4285F4;                  
                }
                
                &:focus + .email-text, &:valid + .email-text  {
                    transform: translateY(-67px);               
                }

                &:focus + .subject-text, &:valid + .subject-text {
                    transform: translateY(-67px);                
                }
                
                &:focus + .help-text, &:valid + .help-text {
                    transform: translateY(-127px);                
                }
            }

            textarea {
                max-height: 90px;   
                max-width: 100%;            
            }

            .submit-area {
                position: relative;

                #submit {
                    position: relative;
                    display: inline-block;
                    width: 105px;
                    text-align: left;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 1px;
                    cursor: pointer;
                    background-color: #33B5E5;
                    color: #fff;
                    text-transform: uppercase;
                    font-size: 11px;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                    transition: .1s all ease;
    
                    &:hover {
                        box-shadow: 0 7px 15px transparentize(#000, .75);
                    }                    
                }
                i.fa-paper-plane {
                    position: absolute;
                    left: 70px;
                    top: 9px;
                    color: #fff;
                    font-size: 13px;
                }                
            }           
        }
    }
}



@media screen and (max-width: 1200px){
    .contact-from {
        width: 960px;
        padding: 50px 60px;

        .contact {
            .map {
                width: 320px;
            }

            .form {
                width: 485px;
            }
        }
    }
}
@media screen and (max-width: 992px){
    .contact-from {
        width: 710px;
        height: auto;
       
      .form-area{
            margin-top: 200px;
        }

        .contact {
            flex-direction: column;

            .map {
                width: 100%;
                margin-right: 0;
                margin-bottom: 30px;
            }

            .form {
                width: 100%;
            }
        }
    }
}
@media screen and (max-width: 768px){
    .contact-from {
        width: 100%;
    }
}
</style>

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