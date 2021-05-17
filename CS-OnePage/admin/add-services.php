<?php
ob_start();
session_start();
include '../db/db.php';
if (!isset($_SESSION['username'])) {
    echo "<script>window.open('index.php','_self')</script>";
    echo "<script>alert('Login First!')</script>";
}
include 'inc/header.php';
?>


    <style type="text/css">
        #ulds li{
            text-decoration: none;
            display: block;
        }
        #ulds li a{
            margin-top: 5px;
        }
    </style>
    <main role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php include 'inc/sidebar.php'; ?>
                </div>
                <div class="col-md-9">


                    <section class="wt-section bg-light" id="contact">
                        <div class="container">
                            <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                                <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                                    <h2 class="mb-md-2">Developers School</h2>
                                    <p>Add New Category Panel</p>
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
                                                    <input type="text" class="form-control form-control-lg" placeholder="Title" name="title" required />

                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="form-group mb-4">
                                                    <input type="text" class="form-control form-control-lg" placeholder="Sub Title" name="sub_title" required />
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="controls">
                                                    <textarea rows="10" cols="100" class="form-control form-control-lg"  placeholder="Description" id="message" name="description" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters"  maxlength="999" style="resize:none"></textarea>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="form-group mb-4">
                                                    <input type="file" class="form-control form-control-lg" accept="image/*" title="Select an Image" name="img" required />
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-lg btn-primary py-3 mt-3 px-4 btn-pill" type="submit" name="submit">
                                                    <i class="fa fa-plus-circle"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_POST['submit']))
                                        {
                                            $title = mysqli_real_escape_string($db, $_POST['title']);
                                            $sub_title = mysqli_real_escape_string($db, $_POST['sub_title']);
                                            $description = mysqli_real_escape_string($db, $_POST['description']);
                                            $img = $_FILES['img']['name'];
                                            $tmp_name = $_FILES['img']['tmp_name'];
                                            $editSql = mysqli_query($db, "INSERT INTO `services`(`title`, `sub_title`, `description`, `img`) VALUES ('$title', '$sub_title', '$description', '$img')");
                                            if ($editSql) {
                                                move_uploaded_file($tmp_name, "../assets/img/services/$img");
                                                echo "<script>alert('Service Has Been Added!')</script>";
                                                echo "<script>window.open('services.php','_self')</script>";
                                            }
                                            else
                                            {
                                                echo "<script>alert('Take An Error. Try Again!')</script>";
                                                echo "<script>window.open('services.php','_self')</script>";
                                            }
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
<?php include 'inc/footer.php'; ?>