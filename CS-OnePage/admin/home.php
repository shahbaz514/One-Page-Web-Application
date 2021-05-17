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
                    <table class="table table-bordered table-hover table-responsive table-striped table-dark" style="height: 600px;">
                        <tr>
                            <th>Site Name</th>
                            <td><?php echo $rowSite['site_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Site Main Heading</th>
                            <td><?php echo $rowSite['site_main_heading']; ?></td>
                        </tr>
                        <tr>
                            <th>Site Image</th>
                            <td><img class="img-responsive" src="../<?php echo $rowSite['site_main_img']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Services Description</th>
                            <td><?php echo $rowSite['services_desc']; ?></td>
                        </tr>
                        <tr>
                            <th>Amenities Description</th>
                            <td><?php echo $rowSite['amenities_desc']; ?></td>
                        </tr>
                        <tr>
                            <th>Portfolio Description</th>
                            <td><?php echo $rowSite['port_desc']; ?></td>
                        </tr>
                        <tr>
                            <th>Team Description</th>
                            <td><?php echo $rowSite['team_desc']; ?></td>
                        </tr>
                        <tr>
                            <th>Price Description</th>
                            <td><?php echo $rowSite['price_desc']; ?></td>
                        </tr>
                        <tr>
                            <th>Contact Description</th>
                            <td><?php echo $rowSite['contact_desc']; ?></td>
                        </tr>
                        <tr>
                            <th>Conter One Title</th>
                            <td><?php echo $rowSite['count_01_title']; ?></td>
                        </tr>
                        <tr>
                            <th>Conter One Value</th>
                            <td><?php echo $rowSite['count_01_value']; ?></td>
                        </tr>
                        <tr>
                            <th>Conter Two Title</th>
                            <td><?php echo $rowSite['count_02_title']; ?></td>
                        </tr>
                        <tr>
                            <th>Conter Two Value</th>
                            <td><?php echo $rowSite['count_02_value']; ?></td>
                        </tr>
                        <tr>
                            <th>Conter Three Title</th>
                            <td><?php echo $rowSite['count_03_title']; ?></td>
                        </tr>
                        <tr>
                            <th>Conter Three Value</th>
                            <td><?php echo $rowSite['count_03_value']; ?></td>
                        </tr>
                        <tr>
                            <th>Conter Four Title</th>
                            <td><?php echo $rowSite['count_04_title']; ?></td>
                        </tr>
                        <tr>
                            <th>Conter Four Value</th>
                            <td><?php echo $rowSite['count_04_value']; ?></td>
                        </tr>
                        <tr>
                            <th>Map Iframe Link</th>
                            <td><?php echo $rowSite['map_iframe_link']; ?></td>
                        </tr>
                        <tr>
                            <th>Footer Text</th>
                            <td><?php echo $rowSite['footer_text']; ?></td>
                        </tr>
                        <tr>
                            <th>Footer Link Title</th>
                            <td><?php echo $rowSite['footer_link_title']; ?></td>
                        </tr>
                        <tr>
                            <th>Footer Link</th>
                            <td><?php echo $rowSite['footer_link']; ?></td>
                        </tr>
                    </table>
                    <center>
                        <a class="btn btn-danger" style="margin-bottom: 20px;" href="edit-site.php">Edit Site Details</a>
                    </center>
                </div>
            </div>
        </div>
    </main>
<?php include 'inc/footer.php'; ?>