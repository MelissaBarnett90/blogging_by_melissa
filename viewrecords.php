<?php
$title = 'View Records';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'includes/auth_check_admin.php';
require_once 'db/config.php';
$results = mysqli_query($conn, "SELECT `friend_id`, `fname`, `lname`, `address`, `email`, `phone`, `avatar`, `gender_id` FROM `friend` WHERE 1");

?>


    <table class="table table-bordered table-responsive" style="margin-left: 50px; margin-top: 100px; margin-right: 100px;">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>

        <?php while ($r = mysqli_fetch_array($results)) { ?>
            <tr>
                <td> <?php echo $r['fname'] ?></td>
                <td> <?php echo $r['lname'] ?></td>
                <td> <?php echo $r['address'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['friend_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['friend_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');"
                       href="delete.php?id=<?php echo $r['friend_id'] ?>" class="btn btn-danger">Delete</a>
                </td>

            </tr>
        <?php } ?>
    </table>


    <br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>