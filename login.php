<?php
include('database.php');

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['signinbtn'])) {
    if (empty($username)) {
        echo "<script type='text/javascript'>
        alert('Please enter username');
        </script>";
    } elseif (empty($password)) {
        echo "<script type='text/javascript'>
        alert('Please enter password');
        </script>";
    } else {
        $sql = "SELECT * FROM registration WHERE username = '$username' AND userpassword = '$password';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dbusername = $row["username"];
                $dbpassword = $row["userpassword"]; 

                if ($username === $dbusername && $password === $dbpassword) {
                    header("Location: purelave.html");
                    exit();
                }
            }
        } else {
            echo "<script type='text/javascript'>
            alert('Invalid username or password');
            </script>";
        }
    }
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <title>Juice shop</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="index.js"></script>
</head>

<body class="bg-white">
    <header class="primary-header">
        <div class="container" style="padding: 2em;">
            <div class="nav-wrapper">
                <ul class="title">
                    <li><a class="text-green | fw-600 | fs-23px | ff-poppins" href="freeviewshop.php">pure flave</a></li>
                </ul>
            </div>
        </div>
        </div>
        <hr class="bg-green">
    </header>

    <main>
        <section class="padding-block-900">
            <div class="container">
                <div class="even-columns | logincontainer">
                    <div class="loginleft">
                        <div class="signup_svg">
                            <p class="text-green | fw-600 | fs-23px | ff-poppins">Sign up</p>
                            <ul class="social-links">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <svg class="social-icons">
                                            <use xlink:href="./images/social-icons.svg#facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <svg class="social-icons">
                                            <use xlink:href="./images/social-icons.svg#twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <form action="" method="post" class="myloginform | flow" style="--spacer:1.5em;">

                            <div class="form-group">
                                <label for="" class="ff-poppins | fw-700 | fs-secondary-text | text-green" type="userlogin">Username</label>
                                <input type="text" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="" class="ff-poppins | fw-700 | fs-secondary-text | text-green" type="userlogin">Password</label>
                                <input type="password" placeholder="Password" name="password">
                            </div>

                            <button class="button | ff-poppins | fw-200 | fs-primary-text" type="signin" name="signinbtn">Sign In</button>
                        </form>
                        <div class="showpass">
                        <input type="checkbox" type="showpass">
                        <label for="" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Show Password</label>
                        </div>
                        
                    </div>
                    <div class="loginright">
                        <div class="heightright | flow" style="--spacer:1.5em;">
                            <div class="containerright">
                            <p class="text-white | fw-600 | fs-23px | ff-poppins">Welcome to login</p>
                            <p class="ff-poppins | fw-200 | fs-secondary-text | text-white">Dont have an account?</p>
                            <a href="register.php"><button class="button | ff-poppins | fw-200 | fs-primary-text" type="signup">Sign up</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-wrapper | even-columns">

                <div class="row1">
                    <ul class="flow" style="--spacer:1em">
                        <li><a href="terms-conditionsview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Terms & Conditions</a></li>
                        <li><a href="privacyview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Privacy Policy</a></li>
                        <li><a href="shippingview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Shipping Policy</a></li>
                        <li><a href="refundview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Refund Policy</a></li>
                    </ul>
                </div>

                <div class="row2">
                    <ul class="flow" style="--spacer:1em">
                        <li><a href="contactview.html" class="ff-poppins | fw-200 | fs-secondary-text | text-green">Cookie Policy​</a></li>
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
                                        <use xlink:href="./images/social-icons.svg#facebook"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <svg class="social-icons">
                                        <use xlink:href="./images/social-icons.svg#instagram"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <svg class="social-icons">
                                        <use xlink:href="./images/social-icons.svg#twitter"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/" target="_blank">
                                    <svg class="social-icons">
                                        <use xlink:href="./images/social-icons.svg#tiktok"></use>
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


