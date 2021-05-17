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
    $sqlDel = mysqli_query($db, "DELETE FROM `contact` WHERE id = '".$_GET['del']."'");
    if ($sqlDel)
    {
        echo "<script>alert('Record Deleted!')</script>";
        echo "<script>window.open('contact.php','_self')</script>";
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
                    <table class="table table-bordered table-hover">
                        <thead>
                            <td>Sr No.</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Message</td>
                            <td>Reply</td>
                            <td>Delete</td>
                        </thead>
                        <tbody>
                        <?php
                        $count = 0;
                        $sql = mysqli_query($db, "SELECT * FROM contact ORDER BY id DESC");
                        while ($row = mysqli_fetch_array($sql))
                        {
                            $count++;
                            ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><a class="btn btn-dark" href="contact-reply.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-reply"></i></a></td>
                                <td><a class="btn btn-danger" href="contact.php?del=<?php echo $row['id']; ?>"><i class="fa fa-cut"></i></a></td>
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