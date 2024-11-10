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
    <script defer src="index.js"></script>
</head>

<body class="bg-white">
    <header class="primary-header">
        <div class="container" style="padding: 2em;">
            <div class="nav-wrapper">
                <ul class="title">
                    <li><a class="text-green | fw-600 | fs-23px | ff-poppins" href="purelave.html">pure flave</a></li>
                </ul>

                <button class="mobile-toggle" aria-controls="first-navagation" aria-expanded="false" id="mobile-toggle">

                    <span class="hidden">Menu</span>
                </button>

                <nav class="first-navagation" id="first-navagation">
                    <ul class="nav-list">
                        <li><a href="shop.php" class="text-green | fw-200 | fs-primary-text | ff-poppins">Shop</a></li>
                        <li><a href="subscription.php" class="text-green | fw-200 | fs-primary-text | ff-poppins">Subscription</a></li>
                        <li><a href="aboutus.html" class="text-green | fw-200 | fs-primary-text | ff-poppins">About us</a></li>
                        <li><a href="contact.html" class="text-green | fw-200 | fs-primary-text | ff-poppins">Contact</a></li>
                        <li><a href="productstatistic.php" class="text-green | fw-200 | fs-primary-text | ff-poppins">Products</a></li>

                    </ul>
                </nav>

                <div class="column" id="column">
                    
                    <form action="" method="post">
                        <a href="shop.html"><button class="button-cart" name="submit_button"><img src="./images/cart.svg" alt="cart" style="padding-left: 1.5em;" class="img-cart"></button></a>
                </div>
            </div>
        </div>
        </div>
        <hr class="bg-green">
    </header>

    <main>
        <section class="padding-block-900">
            <div class="container">
                <div class="statement | flow" style="--spacer:1em">
                    <h1 class="fs-third-heading | fw-700 | ff-syne | text-green">Subscription</h1>
                    <p class="fs-primary-text | fw-300 | ff-poppins | text-green" style="max-width: 100%;">Subscribe to any of our plans and select how often you want <br> them delivered</p><br>
                </div>
                <div class="juices">
                    <div>
                        <input type="radio" name="bundles" value="total_care" id="total_care">
                        <label for="total_care" type="productimages">
                            <img src="./images/tc.webp" alt="juice">
                        </label>
                        <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Total Care</a>
                        <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱599.99</p>
                    </div>
                    <div>
                        <input type="radio" name="bundles" value="detox_plan" id="detox_plan">
                        <label for="detox_plan" type="productimages">
                            <img src="./images/dp.webp" alt="juice">
                        </label>

                        <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Detox Plan</a>
                        <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱899.75</p>
                    </div>
                    <div>
                        <input type="radio" name="bundles" value="full_day_cleanses" id="full_day_cleanses">
                        <label for="full_day_cleanses" type="productimages">
                            <img style="width: 100%;" src="./images/fdc.webp" alt="juice">
                        </label>

                        <a style="padding-left: 1em;" href="" class="fs-secondary-heading | fw-400 | ff-poppins | text-green">Full-Day Cleanses</a>
                        <p style="padding-left: 1.2em;" class="fs-primary-text | fw-300 | ff-poppins | text-black">₱1,199.50</p>
                    </div>
                </div>
            </div>
            </form>
            <hr>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="even-columns">
                <div>
                    <ul>
                        <div class="flow" style="--spacer:1em">
                            <li><a href="terms-conditions.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Terms & Conditions</a></li>
                            <li><a href="privacy.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Privacy Policy</a></li>
                            <li><a href="shipping.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Shipping Policy</a></li>
                            <li><a href="refund.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Refund Policy</a></li>
                        </div>
                    </ul>
                </div>
                <div>
                    <ul>
                        <div class="flow" style="--spacer:1em">
                            <li><a href="cookie.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Cookie Policy​</a></li>
                            <li><a href="#" class="ff-poppins | fw-200 | fs-secondary-text | text-green">FAQ​</a></li>
                            <li><a href="#" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Payment Methods</a></li>
                        </div>
                    </ul>
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
    </footer>
</body>

</html>

<?php
include('database.php');

$bundles = $_POST['bundles'];
$product1 = "Raspberry Lime";
$product2 = "Green Punch";
$product6 = "Orange Zest";
$product4 = "Apple Citrus";
$product6 = "Pink Grape Fruit";
$product6 = "Ginger Tangerine";



if (isset($_POST['submit_button'])) {
    if ($bundles === "total_care") {
        $bundles = "Total Care";
        $productprice = 599.99;
        $products_included = $product1 . " + " . $product2 . " + " . $product3;
    } else if ($bundles === "detox_plan") {
        $bundles = "Detox Plan";
        $productprice = 899.75;
        $products_included = $product1 . " + " . $product4 . " + " . $product4;
    } else if ($bundles === "full_day_cleanses") {
        $bundles = "Full Day Cleanses";
        $productprice = 1199;
        $products_included = $product6 . " + " . $product6. " + " . $product3;
  
    }


    try {
        $sql = "INSERT INTO juice_bundle VALUES('$bundles','$productprice','$products_included')";
        mysqli_query($conn, $sql);

        echo "<script type='text/javascript'>
           alert('purchase successfully!');
          </script>";
    } catch (mysqli_sql_exception) {
        echo "<script type='text/javascript'>
           alert('could not add data');
          </script>";
    }
}


mysqli_close($conn)
?>