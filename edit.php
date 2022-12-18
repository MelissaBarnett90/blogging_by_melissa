<?php
$title = 'Edit Record';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'includes/auth_check_admin.php';
require_once 'db/config.php';

if (!isset($_GET['id'])) {
    //echo 'Error';
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
} else {
    $id = $_GET['id'];
    $friend = mysqli_fetch_array(mysqli_query($conn, "SELECT t1.fname, t1.lname, t1.address, t1.email, t1.gender_id,
 t1.phone,t1.avatar, t2.name, t1.friend_id FROM `friend` t1 inner JOIN gender t2 on t1.gender_id = t2.gender_id WHERE friend_id='$id'"));


    ?>


    <h1 class="text-center" style="margin-top: 60px;">Edit Record</h1>


    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $friend['friend_id'] ?>"/>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value="<?php echo $friend['fname'] ?>" id="firstname"
                   Name="firstname">

        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $friend['lname'] ?>" id="lastname"
                   name="lastname">
        </div>

        <div class="form-group">
            <label for="dob">Address</label>
            <input type="text" class="form-control" value="<?php echo $friend['address'] ?>" id="address"
                   name="address">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" value="<?php echo $friend['gender_id'] ?>" id="gender" name="gender">
                <?php
                $sql = mysqli_query($conn, "SELECT `gender_id`, `name` FROM `gender` WHERE 1");
                while ($r = mysqli_fetch_array($sql)) { ?>
                    <option value="<?php echo $r['gender_id']; ?>"
                            <?php if ($r['gender_id'] == $friend['gender_id']){ ?>selected<?php } ?> ><?php echo $r['name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" value="<?php echo $friend['email'] ?>" id="email" name="email"
                   aria-describedby="emailHelp" disabled>
            <small id="emailHelp" class="form-text text-muted">We'll never
                share your email with anyone else.
            </small>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" value="<?php echo $friend['phone'] ?>" id="phone" name="phone"
                   aria-describedby="phoneHelp" placeholder="Enter phone">
            <small id="phoneHelp" class="form-text text-muted">We'll never
                share your phone number with anyone else.
            </small>
        </div>
        <br/>


        <a href="viewrecords.php" class="btn btn-info">Back to list</a>
        <button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button>
    </form>

<?php } ?>

<br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>

