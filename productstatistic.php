<?php
include('database.php');

$dataPoints = array(
    array("y" => 3373.64, "label" => "Germany"),
    array("y" => 2435.94, "label" => "France"),
    array("y" => 1842.55, "label" => "China"),
    array("y" => 1828.55, "label" => "Russia"),
    array("y" => 1039.99, "label" => "Switzerland"),
    array("y" => 765.215, "label" => "Japan"),
    array("y" => 612.453, "label" => "Netherlands")
);


$juices = array();
$count = 0;
$sql = "SELECT * FROM juices";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    $juices[$count]["label"] = $row['product_name'];
    $juices[$count]["y"] = $row['product_price'];
    $count++;
}





$dataPoints2 = array(
    array("y" => 3373.64, "label" => "Germany"),
    array("y" => 2435.94, "label" => "France"),
    array("y" => 1842.55, "label" => "China"),
    array("y" => 1828.55, "label" => "Russia"),
    array("y" => 1039.99, "label" => "Switzerland"),
    array("y" => 765.215, "label" => "Japan"),
    array("y" => 612.453, "label" => "Netherlands")
);


$bundle = array();
$count2 = 0;
$sql2 = "SELECT * FROM juice_bundle";
$result2 = mysqli_query($conn, $sql2);

while ($row2 = mysqli_fetch_array($result2)) {
    $bundle[$count2]["label"] = $row2['subscription_name'];
    $bundle[$count2]["y"] = $row2['subscription_price'];
    $count2++;
}




mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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

                    <a href="shop.html"><button class="button-cart"><img src="./images/cart.svg" alt="cart" style="padding-left: 1.5em;" class="img-cart"></button></a>
                </div>
            </div>
        </div>
        </div>
        <hr class="bg-green">
    </header>

    <main>
        <section class="padding-block-900">
            <div class="container">
                <div class="even-columns">
                    <div>
                        <script>
                            window.onload = function() {
                                var chart1 = new CanvasJS.Chart("chartContainer1", {
                                    animationEnabled: true,
                                    theme: "light2",
                                    title: {
                                        text: "Best Selling Juice"
                                    },
                                    axisY: {
                                        title: "Product Price (in Peso)"
                                    },
                                    data: [{
                                        type: "column",
                                        yValueFormatString: "#,##0.## peso",
                                        dataPoints: <?php echo json_encode($juices, JSON_NUMERIC_CHECK); ?>
                                    }]
                                });
                                chart1.render();

                                var chart2 = new CanvasJS.Chart("chartContainer2", {
                                    animationEnabled: true,
                                    theme: "light2",
                                    title: {
                                        text: "Best Selling Juice Bundles"
                                    },
                                    axisY: {
                                        title: "Subscription Price (in Peso)"
                                    },
                                    data: [{
                                        type: "column",
                                        yValueFormatString: "#,##0.## peso",
                                        dataPoints: <?php echo json_encode($bundle, JSON_NUMERIC_CHECK); ?>
                                    }]
                                });
                                chart2.render();
                            }
                        </script>

                        <div id="chartContainer1" class="charts" ></div>
                    </div>

                    <div>
                        <div id="chartContainer2" class="charts" ></div>
                    </div>
                </div>

                <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-wrapper | even-columns">

                <div class="row1">
                    <ul class="flow" style="--spacer:1em">
                        <li><a href="terms-conditions.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Terms & Conditions</a></li>
                        <li><a href="privacy.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Privacy Policy</a></li>
                        <li><a href="shipping.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Shipping Policy</a></li>
                        <li><a href="refund.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Refund Policy</a></li>
                    </ul>
                </div>

                <div class="row2">
                    <ul class="flow" style="--spacer:1em">
                        <li><a href="cookie.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Cookie Policy​</a></li>
                        <li><a href="#" class="ff-poppins | fw-200 | fs-secondary-text | text-green">FAQ​</a></li>
                        <li><a href="#" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Payment Methods</a></li>
                    </ul>
                </div>


                <div class="row3 | flow" style="--spacer:1em">
                    <p class="ff-poppins | fw-200 | fs-secondary-text | text-green">Address:</p>
                    <p class="ff-poppins | fw-200 | fs-secondary-text | text-green">500 Terry Francine St.</p>
                    <p class="ff-poppins | fw-200 | fs-secondary-text | text-green">San Francisco, CA 94158</p>
                </div>

                <div class="row4">
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
        </div>
    </footer>



</body>

</html>