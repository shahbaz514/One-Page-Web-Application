<?php
ob_start();
session_start();
include '../db/db.php';
if (isset($_SESSION['username'])) {
    echo "<script>window.open('home.php','_self')</script>";
    echo "<script>alert('Already Login!')</script>";
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>
    <title>Developers School</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <!-- Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/fonts/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/hovereffects.css">
    <!-- Theme Styles -->
    <link href="../assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<!-- End Head -->

<body>
<main role="main">
    <section class="wt-section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                    <h2 class="mb-md-2">Developers School</h2>
                    <p>Admin Panel</p>
                </div>
            </div>
            <div class="row justify-content-md-center text-center mg-5 pb-5">
                <div class="col-md-8">
                    <div class="form">

                        <!-- Form itself
                         In this Video work on contact us.
                        -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="control-group">
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control form-control-lg" placeholder="Enter UserName" name="username" required />

                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control form-control-lg" placeholder="Enter Password" name="pass" required />

                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-lg btn-primary py-3 mt-3 px-4 btn-pill" type="submit" name="submit">Login Now</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['submit']))
                        {
                            $username = mysqli_real_escape_string($db, $_POST['username']);
                            $pass = mysqli_real_escape_string($db, $_POST['pass']);
                            $sql = mysqli_query($db, "SELECT * FROM `users` WHERE username = '$username' AND pass = '$pass'");
                            $count = 0;
                            $count = mysqli_num_rows($sql);
                            if ($count>0) {
                                $_SESSION['username'] = $username;
                                echo "<script>window.open('home.php','_self')</script>";
                            }
                            else
                            {
                                echo "<script>window.open('index.php','_self')</script>";
                                echo "<script>alert('Invalid UserName and Password!')</script>";
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->
</main>

<!-- Footer -->
<footer class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                <small class="text-white"><a class="text-white" href="http://shahbaz514.com/">Shahbaz514, Inc.</a> <br/>&copy; All Rights Reserved</small>
            </div>

            <div class="col-md-4 align-self-center">
                <ul class="list-inline text-center text-md-right mb-0">
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <a class="text-white" target="_blank" href="https://www.facebook.com/Maxi">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <a class="text-white" target="_blank" href="https://www.instagram.com/Maxi">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <a class="text-white" target="_blank" href="https://twitter.com/Maxi">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                        <a class="text-white" target="_blank" href="https://dribbble.com/Maxi">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- JS Script Files -->
<script src="../assets/vendors/jquery.min.js"></script>
<script src="../assets/vendors/jquery.migrate.min.js"></script>
<script src="../assets/vendors/popper.min.js"></script>
<script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendors/jquery-easing/jquery.easing.min.js"></script>

<!-- Components Vendor  -->
<script src="../assets/vendors/slick-carousel/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="../assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="../assets/vendors/counters/waypoint.min.js"></script>
<script src="../assets/vendors/counters/counterup.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../assets/js/scrolling-nav.js"></script>
<!--Plugin Initialize-->
<script src="../assets/js/global.js"></script>

<!-- Theme Components and Settings -->
<script src="../assets/vendors/carousel.js"></script>
<script src="../assets/vendors/counters.js"></script>

<!-- END JAVASCRIPTS -->

</body>
<!-- End Body -->
</html>