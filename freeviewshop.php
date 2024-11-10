<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <title>Juice Shop</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="index.js" ></script>
</head>
<body class="bg-white">
    <header class="primary-header">
        <div class="container" style="padding: 2em;">
            <div class="nav-wrapper">
                <ul class="title">
                    <li><a class="text-green | fw-600 | fs-23px | ff-poppins" href="purelaveview.html">pure flave</a></li>  
                </ul>

                <button class="mobile-toggle" aria-controls="first-navagation" aria-expanded="false" id="mobile-toggle">
                    
                    <span class="hidden">Menu</span>
                </button>

                <nav class="first-navagation" id="first-navagation">
                    <ul class="nav-list">
                        <li><a href="freeviewshop.php" class="text-green | fw-200 | fs-primary-text | ff-poppins">Shop</a></li>
                        <li><a href="freeviewsubs.php" class="text-green | fw-200 | fs-primary-text | ff-poppins">Subscription</a></li>
                        <li><a href="aboutusview.html" class="text-green | fw-200 | fs-primary-text | ff-poppins">About us</a></li>
                        <li><a href="contactview.html" class="text-green | fw-200 | fs-primary-text | ff-poppins">Contact</a></li>
                        <li><a href="statisticview.php" class="text-green | fw-200 | fs-primary-text | ff-poppins">Products</a></li>

                    </ul>
                </nav> 
                
                <div class="column" id="column">
                    <button class="userbtn" ><span><img src="./images/profile-user.png" alt=""></span></button>  
                    <a href="login.php"><p id="login" class="text-green | fw-200 | fs-primary-text | ff-poppins">Log In</p></a>
                    <form action="" method="post">
                        <a href="freeviewshop.php"><button class="button-cart" name="submit_button"><img src="./images/cart.svg" alt="cart" style="padding-left: 1.5em;" class="img-cart"></button></a>
                </div>
            </div>
        </div>
        </div>
        <hr class="bg-green">
    </header>

    <main>
        <section class="padding-block-900">
            <div class="container">
                <div class="statement" style="margin-top: -100px;">
                    <h1 class="fs-third-heading | fw-700 | ff-syne | text-green" style="line-height: 2em;">Shop Flaves</h1>
                    <p class="fs-primary-text | fw-300 | ff-poppins | text-green" style="line-height: 2em;">Cold-pressed, 100% organic, packed with vitamins, nutrients, and natural goodness.</p><br>
                </div>  
                <div class="juices">
                <div>
                    <input type="radio" id="green_punch" name="juices" value="green_punch">
                    <label for="green_punch" type="productimages">
                        <img  src="./images/gp.webp" alt="green_punch">
                    </label>
                    <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Green Punch</a>
                    <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱250.50</p>
                </div>
                <div>
                    <input type="radio" id="apple_punch" name="juices" value="apple_punch">
                    <label for="apple_punch" type="productimages">
                        <img src="./images/ac.webp" alt="apple_punch" >
                    </label>
                    <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Apple Citrus</a>
                    <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱185.30</p>
                </div>
                <div>
                    <input type="radio" id="orange_zest" name="juices" value="orange_zest">
                    <label for="orange_zest" type="productimages">
                        <img style="width: 100%;"  src="./images/oz.webp" alt="orange_zest" >
                    </label>
                    <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Orange Zest</a>
                    <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱399.99</p>
                </div>
                <div>
                    <input type="radio" id="pink_grapefruit" name="juices" value="pink_grapefruit">
                    <label for="pink_grapefruit" type="productimages">
                        <img src="./images/pg.webp" alt="pink_grapefruit" >
                    </label>
                    <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Pink Grapefruit</a>
                    <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱175.20</p>
                </div>
                <div>
                    <input type="radio" id="ginger_tangerine" name="juices" value="ginger_tangerine">
                    <label for="ginger_tangerine" type="productimages">
                        <img src="./images/gt.webp" alt="ginger_tangerine" >
                    </label>
                    <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Ginger Tangerine</a>
                    <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱234.60</p>
                </div>
                <div>
                    <input type="radio" id="raspberry_lime" name="juices" value="raspberry_lime">
                    <label for="raspberry_lime" type="productimages">
                        <img src="./images/rl.webp" alt="raspberry_lime">
                    </label>
                    <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Raspberry Lime</a>
                    <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱300.30</p>
                </div>
                   
                </div>
            </div>
        </form>
            <hr>
        </section >
    </main>

    <footer>
        <div class="container">
            <div class="even-columns">
                <div>
                    <ul>
                        <div class="flow" style="--spacer:1em">
                        <li><a href="terms-conditionsview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Terms & Conditions</a></li>
                        <li><a href="privacyview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Privacy Policy</a></li>
                        <li><a href="shippingview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Shipping Policy</a></li>
                        <li><a href="refundview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Refund Policy</a></li>
                    </div> </ul> 
                </div>
                <div>
                    <ul>
                        <div class="flow" style="--spacer:1em">
                        <li><a href="cookieview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Cookie Policy​</a></li>
                        <li><a href="#" class="ff-poppins | fw-200 | fs-secondary-text | text-green">FAQ​</a></li>
                        <li><a href="#" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Payment Methods</a></li>
                    </div></ul>
                </div>
                <div class="flow" style="--spacer:1em">
                    <p class="ff-poppins | fw-200 | fs-secondary-text | text-green">Address:</p>
                    <p class="ff-poppins | fw-200 | fs-secondary-text | text-green">500 Terry Francine St.</p>
                    <p class="ff-poppins | fw-200 | fs-secondary-text | text-green">San Francisco, CA 94158</p>
                </div>
                <div>
                    <p class="ff-poppins | fw-200 | fs-secondary-text | text-green" style="line-height: 2.3em;">Contact:</p>
                    <a href="#" class="ff-poppins | fw-200 | fs-secondary-text | text-green" style="line-height: 2.3em;">info@mysite.com</a>
                    <p class="ff-poppins | fw-200 | fs-secondary-text | text-green" style="line-height: 2.3em;">123-456-7890</p>
                    
                    <div class="icons">
                        <ul class="social-links">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <svg class="social-icons">
                                        <use xlink:href="/images/social-icons.svg#facebook"></use>
                                      </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <svg class="social-icons">
                                        <use xlink:href="/images/social-icons.svg#instagram"></use>
                                      </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <svg class="social-icons">
                                        <use xlink:href="/images/social-icons.svg#twitter"></use>
                                      </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/" target="_blank">
                                    <svg class="social-icons">
                                        <use xlink:href="/images/social-icons.svg#tiktok"></use>
                                      </svg>
                                </a>
                            </li>
                        </ul>

                </div>
            </div>
        </div>
    </footer >


</body>
</html>

<?php
include('database.php');



if(isset($_POST['submit_button'])){
    
    echo "<script type='text/javascript'>
           alert('You need to login first!');
          </script>";
}




mysqli_close($conn)
?>