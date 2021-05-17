<?php
ob_start();
session_start();
include '../db/db.php';
if (!isset($_SESSION['username'])) {
    echo "<script>window.open('index.php','_self')</script>";
    echo "<script>alert('Login First!')</script>";
}
if (isset($_GET['del']))
{
    $sqlDel = mysqli_query($db, "DELETE FROM `services` WHERE id = '".$_GET['del']."'");
    if ($sqlDel)
    {
        echo "<script>alert('Record Deleted!')</script>";
        echo "<script>window.open('services.php','_self')</script>";
    }
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
                    <div class="container">
                        <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                            <div class="col-md-8 text-center">
                                <h2 class="mb-md-2">Developers School</h2>
                                <a href="add-services.php" class="btn btn-info btn-lg"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <td>Sr No.</td>
                        <td>Title</td>
                        <td>Sub Title</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Edit</td>
                        <td>Delete</td>
                        </thead>
                        <tbody>
                        <?php
                        $count = 0;
                        $sql = mysqli_query($db, "SELECT * FROM services ORDER BY id DESC");
                        while ($row = mysqli_fetch_array($sql))
                        {
                            $count++;
                            ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['sub_title']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td>
                                    <a target="_blank" href="../assets/img/services/<?php echo($row['img']) ?>">
                                        <img style="height: 100px; " src="../assets/img/services/<?php echo($row['img']) ?>">
                                    </a>
                                </td>
                                <td><a class="btn btn-dark" href="edit-services.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil-alt"></i></a></td>
                                <td><a class="btn btn-danger" href="services.php?del=<?php echo $row['id']; ?>"><i class="fa fa-cut"></i></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php include 'inc/footer.php'; ?>