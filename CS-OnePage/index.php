<!--
In this Video Word on The Team Section
In Next Video Work on
-->
<?php
include 'db/db.php';
$sqlSite = mysqli_query($db, "SELECT * FROM `site` WHERE id = 1");
$rowSite = mysqli_fetch_array($sqlSite);
include 'inc/head.php';
?>
<body>
<?php
include 'inc/header.php';
?>
<main role="main">

    <section class="wt-section bg-light" id="services">
        <div class="container">
            <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                    <h2 class="mb-md-2">Our Services</h2>
                    <p class="lead text-muted"><?php echo $rowSite['services_desc']; ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $sqlS = mysqli_query($db, "SELECT * FROM `services` ORDER BY id ASC");
                while ($rowS = mysqli_fetch_array($sqlS)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="300">
                            <a href="#"><img class="card-img-top" src="assets/img/services/<?php echo($rowS['img']) ?>" alt="<?php echo($rowS['title']) ?>"></a>
                            <div class="card-body py-4">
                                <strong href="#" class="mb-2 d-block"><?php echo($rowS['title']) ?></strong>
                                <h5 class="mb-4 text-primary"><?php echo($rowS['sub_title']) ?></h5>
                                <div class="mb-4">
                                    <p style="text-align: justify;"><?php echo($rowS['description']) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php
    $sqlA = mysqli_query($db, "SELECT * FROM `about` WHERE id = '1'");
    $rowA = mysqli_fetch_array($sqlA);
    ?>
    <section class="wt-section pb-0" id="about">
        <div class="container">
            <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
                <div class="col-md-5">
                    <img src="assets/img/about/<?php echo($rowA['img']) ?>" width="90%" class="rounded-md" alt="<?php echo($rowA['title']) ?>">
                </div>
                <div class="col-md-7">
                    <h2 class="mb-4 "><?php echo($rowA['title']) ?></h2>
                    <p class="text-muted"><?php echo($rowA['description']) ?></p>
                </div>

            </div>
        </div>
    </section>
    <?php
    $sqlT = mysqli_query($db, "SELECT * FROM `about` WHERE id = '2'");
    $rowT = mysqli_fetch_array($sqlT);
    ?>
    <section class="wt-section">
        <div class="container">
            <div class="row justify-content-between align-items-center" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="400">
                <div class="col-md-7">
                    <h2 class="mb-4"><?php echo($rowT['title']) ?></h2>
                    <p class="text-muted"><?php echo($rowT['description']) ?></p>
                </div>

                <div class="col-md-5">
                    <img src="assets/img/about/<?php echo($rowT['img']) ?>" width="90%" class="rounded-md" alt="<?php echo($rowT['title']) ?>">
                </div>
            </div>
        </div>
    </section>
    <section class="wt-section bg-primary">
        <div class="container">
            <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                    <h2 class="mb-md-2">Amenities</h2>
                    <p><?php echo $rowSite['amenities_desc']; ?></p>
                </div>
            </div>
            <!-- Feature Blocks -->
            <div class="row">


                <?php
                $sqlAmenities = mysqli_query($db, "SELECT * FROM `amenities` ORDER BY id DESC");
                while ($rowAmenities = mysqli_fetch_array($sqlAmenities)) {
                    ?>
                    <div class="col-md-4">
                        <div class="bg-white p-5 mb-4 text-center rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="800">
                            <i class="<?php echo($rowAmenities['icon']) ?> display-4 d-block text-primary mb-4"></i>
                            <h6 class="my-2"><?php echo($rowAmenities['title']) ?></h6>
                            <p class="text-muted"><?php echo($rowAmenities['description']) ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!-- End Feature Blocks -->
        </div>
    </section>



    <section class="wt-section" id="portfolio">
        <div class="container">
            <div class="row justify-content-md-center text-center pb-lg-5">
                <div class="col-md-12">
                    <h2 class="h1">Portfolio</h2>
                    <p><?php echo $rowSite['port_desc']; ?></p>
                </div>
            </div>
            <div class="portfolio-menu mt-2 mb-4 pb-3">
                <ul>
                    <li class="btn btn-pill mr-2 btn-outline-dark active" data-filter="*">All</li>
                    <?php
                    $sqlCat = mysqli_query($db, "SELECT * FROM `cat` ORDER BY id ASC");
                    while ($rowCat = mysqli_fetch_array($sqlCat)) {
                        ?>
                        <li class="btn btn-pill mr-2 btn-outline-dark" data-filter=".<?php echo($rowCat['class']) ?>"><?php echo($rowCat['title']) ?></li>

                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="portfolio-item row" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                <?php
                $sqlPortfolio = mysqli_query($db, "SELECT * FROM `portfolio` ORDER BY id DESC");
                while ($rowPortfolio = mysqli_fetch_array($sqlPortfolio)) {
                    ?>
                    <div class="item <?php echo($rowPortfolio['class']) ?> col-lg-3 col-md-4 col-6 col-sm">
                        <div class="hovereffect rounded-md overflow-hidden">
                            <img class="img-fluid img-responsive" src="assets/img/portfolio/<?php echo($rowPortfolio['img']) ?>" alt="<?php echo($rowPortfolio['title']) ?>">
                            <div class="overlay">
                                <p>
                                    <a href="assets/img/portfolio/<?php echo($rowPortfolio['img']) ?>" class="fancylight popup-btn info" data-fancybox-group="light"><?php echo($rowPortfolio['title']) ?>
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="bg-light wt-section" id="team">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-lg-5 mb-4 pb-lg-5">
                <div class="col-md-12">
                    <h2 class="h1">Our Team</h2>
                    <p><?php echo $rowSite['team_desc']; ?></p>
                </div>
            </div>
            <div class="row">
                <?php
                $sqlTeam = mysqli_query($db, "SELECT * FROM `team` ORDER BY id ASC");
                while ($rowTeam = mysqli_fetch_array($sqlTeam)) {
                    ?>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <figure data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                            <img class="w-100 rounded-top" src="assets/img/team/<?php echo($rowTeam['img']) ?>" alt="<?php echo($rowTeam['name']) ?>">
                            <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                                <div class="mb-3">
                                    <h5 class="mb-1"><?php echo($rowTeam['name']) ?></h5>
                                    <small class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs"><?php echo($rowTeam['role']) ?></small>
                                </div>
                            </div>
                        </figure>
                    </div>

                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <div class="wt-section" id="price">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-lg-5 mb-4 pb-lg-5">
                <div class="col-md-12">
                    <h2 class="h1">Price & Schedule</h2>
                    <p><?php echo $rowSite['price_desc']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table custom-table table-borderless">
                            <thead>
                            <tr>
                                <th>Time</th>
                                <th>Class</th>
                                <th>Price</th>
                                <th>Join Now</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-aos="fade-in" data-aos-easing="linear" data-aos-delay="200">
                                <td>10:00am - 12:00am</td>
                                <td>
                                    <h6>Rope Skipping</h6>
                                    <span class="text-muted">Indoor</span>
                                </td>
                                <td>
                                    <h6>$25</h6>
                                    <span class="text-muted">Monthly</span>
                                </td>
                                <td>
                                    <a href="#contact" class="btn btn-primary btn-pill">Join Now</a>
                                </td>
                            </tr>
                            <tr data-aos="fade-in" data-aos-easing="linear" data-aos-delay="300">
                                <td>12:00am - 2:00am</td>
                                <td>
                                    <h6>Intensity </h6>
                                    <span class="text-muted">BW Training</span>
                                </td>
                                <td>
                                    <h6>$25</h6>
                                    <span class="text-muted">Monthly</span>
                                </td>
                                <td>
                                    <a href="#contact" class="btn btn-primary btn-pill">Join Now</a>
                                </td>
                            </tr>
                            <tr data-aos="fade-in" data-aos-easing="linear" data-aos-delay="400">
                                <td>2:00am - 5:00am</td>
                                <td>
                                    <h6>Yoga </h6>
                                    <span class="text-muted">On the Beach</span>
                                </td>
                                <td>
                                    <h6>$25</h6>
                                    <span class="text-muted">Monthly</span>
                                </td>
                                <td>
                                    <a href="#contact" class="btn btn-primary btn-pill">Join Now</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-dark position-relative pt-5">
        <div class="container">
            <div class="row text-center text-uppercase text-white">
                <div class="col-lg-3 col-sm-6 pb-5">
                    <h5 class="js-counter display-4 mb-1"><?php echo $rowSite['count_01_value']; ?></h5>
                    <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm"><?php echo $rowSite['count_01_title']; ?></small>
                </div>

                <div class="col-lg-3 col-sm-6 pb-5">
                    <h5 class="js-counter display-4 mb-1"><?php echo $rowSite['count_02_value']; ?></h5>
                    <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm"><?php echo $rowSite['count_02_title']; ?></small>
                </div>

                <div class="col-lg-3 col-sm-6 pb-5">
                    <h5 class="js-counter display-4 mb-1"><?php echo $rowSite['count_03_value']; ?></h5>
                    <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm"><?php echo $rowSite['count_03_title']; ?></small>
                </div>

                <div class="col-lg-3 col-sm-6 pb-5">
                    <h5 class="js-counter display-4 mb-1"><?php echo $rowSite['count_04_value']; ?></h5>
                    <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm"><?php echo $rowSite['count_04_title']; ?></small>
                </div>
            </div>
        </div>
    </section>
    <section class="wt-section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                    <h2 class="mb-md-2">Let us know</h2>
                    <p><?php echo $rowSite['contact_desc']; ?></p>
                </div>
            </div>
            <div class="row justify-content-md-center text-center mg-5 pb-5">
                <div class="col-md-8">
                    <div class="form">

                        <!-- Form itself
                         In this Video work on contact us.
                        -->
                        <form name="sentMessage" class="well" id="contactForm"  novalidate data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200" method="post" enctype="multipart/form-data">
                            <div class="control-group">
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control form-control-lg"
                                           placeholder="Full Name" id="name" name="name" required
                                           data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>

                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="controls">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email"
                                           id="email" required
                                           data-validation-required-message="Please enter your email" />
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="controls">
						            <textarea rows="10" cols="100" class="form-control form-control-lg"
                                   placeholder="Message" id="message" name="message" required
                                   data-validation-required-message="Please enter your message" minlength="5"
                                   data-validation-minlength-message="Min 5 characters"
                                   maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"> </div> <!-- For success/fail messages -->
                            <div class="text-center">
                                <button class="btn btn-lg btn-primary py-3 mt-3 px-4 btn-pill" type="submit" name="submit">Send Your Message</button>
                            </div>
                        </form>
                    </div>
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = mysqli_real_escape_string($db, $_POST['name']);
                        $email = mysqli_real_escape_string($db, $_POST['email']);
                        $message = mysqli_real_escape_string($db, $_POST['message']);
                        $sql = mysqli_query($db, "INSERT INTO `contact`(`name`, `email`, `description`) VALUES ('$name','$email','$message')");
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <iframe src="<?php echo($rowSite['map_iframe_link']) ?>" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->
</main>
<?php
include 'inc/footer.php';
?>