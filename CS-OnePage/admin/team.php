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
    $sqlDel = mysqli_query($db, "DELETE FROM `team` WHERE id = '".$_GET['del']."'");
    if ($sqlDel)
    {
        echo "<script>alert('Record Deleted!')</script>";
        echo "<script>window.open('team.php','_self')</script>";
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
                                <a href="add-team.php" class="btn btn-info btn-lg"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <td>Sr No.</td>
                        <td>Name</td>
                        <td>Role</td>
                        <td>Image</td>
                        <td>Edit</td>
                        <td>Delete</td>
                        </thead>
                        <tbody>
                        <?php
                        $count = 0;
                        $sql = mysqli_query($db, "SELECT * FROM team ORDER BY id ASC");
                        while ($row = mysqli_fetch_array($sql))
                        {
                            $count++;
                            ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td>
                                    <a target="_blank" href="../assets/img/team/<?php echo($row['img']) ?>">
                                        <img style="height: 100px; " src="../assets/img/team/<?php echo($row['img']) ?>" class="img-fluid img-thumbnail">
                                    </a>
                                </td>
                                <td><a class="btn btn-dark" href="edit-team.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil-alt"></i></a></td>
                                <td><a class="btn btn-danger" href="team.php?del=<?php echo $row['id']; ?>"><i class="fa fa-cut"></i></a></td>
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