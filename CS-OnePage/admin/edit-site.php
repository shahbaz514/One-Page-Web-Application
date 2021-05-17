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
<?php
include 'inc/sidebar.php';
$sqlSite = mysqli_query($db, "SELECT * FROM `site` WHERE id = 1");
$rowSite = mysqli_fetch_array($sqlSite);
?>
                </div>
                <div class="col-md-9">
                    <form method="post" action="" enctype="multipart/form-data">
                        <table class="table table-bordered table-responsive table-hover table-striped table-dark">
                            <tr>
                                <th>Site Name</th>
                                <td><input type="text" class="form-control" name="site_name" value="<?php echo $rowSite['site_name']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Site Main Heading</th>
                                <td><input type="text" class="form-control" name="site_main_heading" value="<?php echo $rowSite['site_main_heading']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Site Image</th>
                                <td><input type="file" class="form-control" name="site_main_img"></td>
                            </tr>
                            <tr>
                                <th>Services Description</th>
                                <td><input type="text" class="form-control" name="services_desc" value="<?php echo $rowSite['services_desc']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Amenities Description</th>
                                <td><input type="text" class="form-control" name="amenities_desc" value="<?php echo $rowSite['amenities_desc']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Portfolio Description</th>
                                <td><input type="text" class="form-control" name="port_desc" value="<?php echo $rowSite['port_desc']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Team Description</th>
                                <td><input type="text" class="form-control" name="team_desc" value="<?php echo $rowSite['team_desc']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Price Description</th>
                                <td><textarea type="text" class="form-control" name="price_desc"><?php echo $rowSite['price_desc']; ?></textarea></td>
                            </tr>
                            <tr>
                                <th>Contact Description</th>
                                <td><textarea type="text" class="form-control" name="contact_desc"><?php echo $rowSite['contact_desc']; ?></textarea></td>
                            </tr>
                            <tr>
                                <th>Conter One Title</th>
                                <td><input type="text" class="form-control" name="count_01_title" value="<?php echo $rowSite['count_01_title']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Conter One Value</th>
                                <td><input type="text" class="form-control" name="count_01_value" value="<?php echo $rowSite['count_01_value']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Conter Two Title</th>
                                <td><input type="text" class="form-control" name="count_02_title" value="<?php echo $rowSite['count_02_title']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Conter Two Value</th>
                                <td><input type="text" class="form-control" name="count_02_value" value="<?php echo $rowSite['count_02_value']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Conter Three Title</th>
                                <td><input type="text" class="form-control" name="count_03_title" value="<?php echo $rowSite['count_03_title']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Conter Three Value</th>
                                <td><input type="text" class="form-control" name="count_03_value" value="<?php echo $rowSite['count_03_value']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Conter Four Title</th>
                                <td><input type="text" class="form-control" name="count_04_title" value="<?php echo $rowSite['count_04_title']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Conter Four Value</th>
                                <td><input type="text" class="form-control" name="count_04_value" value="<?php echo $rowSite['count_04_value']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Map Iframe Link</th>
                                <td><textarea type="text" class="form-control" name="map_iframe_link" ><?php echo $rowSite['map_iframe_link']; ?></textarea></td>
                            </tr>
                            <tr>
                                <th>Footer Text</th>
                                <td><textarea type="text" class="form-control" name="footer_text"><?php echo $rowSite['footer_text']; ?></textarea></td>
                            </tr>
                            <tr>
                                <th>Footer Link Title</th>
                                <td><input type="text" class="form-control" name="footer_link_title" value="<?php echo $rowSite['footer_link_title']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Footer Link</th>
                                <td><input type="text" class="form-control" name="footer_link" value="<?php echo $rowSite['footer_link']; ?>"></td>
                            </tr>
                        </table>
                        <center>
                            <input type="submit" name="update" class="btn btn-danger" value="Update!">
                        </center>
                    </form>
<?php 
if (isset($_POST['update'])) {
    $site_name = mysqli_real_escape_string($db, $_POST['site_name']);
    $site_main_heading = mysqli_real_escape_string($db, $_POST['site_main_heading']);
    $services_desc = mysqli_real_escape_string($db, $_POST['services_desc']);
    $amenities_desc = mysqli_real_escape_string($db, $_POST['amenities_desc']);
    $port_desc = mysqli_real_escape_string($db, $_POST['port_desc']);
    $team_desc = mysqli_real_escape_string($db, $_POST['team_desc']);
    $price_desc = mysqli_real_escape_string($db, $_POST['price_desc']);
    $contact_desc = mysqli_real_escape_string($db, $_POST['contact_desc']);
    $count_01_title = mysqli_real_escape_string($db, $_POST['count_01_title']);
    $count_01_value = mysqli_real_escape_string($db, $_POST['count_01_value']);
    $count_02_title = mysqli_real_escape_string($db, $_POST['count_02_title']);
    $count_02_value = mysqli_real_escape_string($db, $_POST['count_02_value']);
    $count_03_title = mysqli_real_escape_string($db, $_POST['count_03_title']);
    $count_03_value = mysqli_real_escape_string($db, $_POST['count_03_value']);
    $count_04_title = mysqli_real_escape_string($db, $_POST['count_04_title']);
    $count_04_value = mysqli_real_escape_string($db, $_POST['count_04_value']);
    $map_iframe_link = mysqli_real_escape_string($db, $_POST['map_iframe_link']);
    $footer_text = mysqli_real_escape_string($db, $_POST['footer_text']);
    $footer_link = mysqli_real_escape_string($db, $_POST['footer_link']);
    $footer_link_title = mysqli_real_escape_string($db, $_POST['footer_link_title']);
    $img = $_FILES['site_main_img']['name'];
    $tmp_name = $_FILES['site_main_img']['tmp_name'];

    if ($img == null) {
        $editSql = mysqli_query($db, "UPDATE `site` SET `site_name`='$site_name',`site_main_heading`='$site_main_heading',`site_main_img`='".$rowSite['site_main_img']."',`services_desc`='$services_desc',`amenities_desc`='$amenities_desc',`port_desc`='$port_desc',`team_desc`='$team_desc',`price_desc`='$price_desc',`contact_desc`='$contact_desc',`count_01_title`='$count_01_title',`count_01_value`='$count_01_value',`count_02_title`='$count_02_title',`count_02_value`='$count_02_value',`count_03_title`='$count_03_title',`count_03_value`='$count_03_value',`count_04_title`='$count_04_title',`count_04_value`='$count_04_value',`map_iframe_link`='$map_iframe_link',`footer_text`='$footer_text',`footer_link_title`='$footer_link_title',`footer_link`='$footer_link' WHERE id = 1");
        if ($editSql) {
            echo "<script>alert('Site Info Updated!')</script>";
            echo "<script>window.open('home.php','_self')</script>";
        }
    }
    else
    {
        $editSql = mysqli_query($db, "UPDATE `site` SET `site_name`='$site_name',`site_main_heading`='$site_main_heading',`site_main_img`='$img',`services_desc`='$services_desc',`amenities_desc`='$amenities_desc',`port_desc`='$port_desc',`team_desc`='$team_desc',`price_desc`='$price_desc',`contact_desc`='$contact_desc',`count_01_title`='$count_01_title',`count_01_value`='$count_01_value',`count_02_title`='$count_02_title',`count_02_value`='$count_02_value',`count_03_title`='$count_03_title',`count_03_value`='$count_03_value',`count_04_title`='$count_04_title',`count_04_value`='$count_04_value',`map_iframe_link`='$map_iframe_link',`footer_text`='$footer_text',`footer_link_title`='$footer_link_title',`footer_link`='$footer_link' WHERE id = 1");
        if ($editSql) {
            move_uploaded_file($tmp_name, "../$img");
            echo "<script>alert('Site Info Updated!')</script>";
            echo "<script>window.open('home.php','_self')</script>";
        }
    }

}
?>                    
                </div>
            </div>
        </div>
    </main>
<?php include 'inc/footer.php'; ?>