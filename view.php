<?php 
    $title = 'View Record';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'includes/auth_check_admin.php';
    require_once 'db/config.php';


    //Get attendee by id
    if(!isset($_GET['id'])){
        echo "<h1 class='text-danger'>Kindly Check Details And Try Again</h1>";
    }else{
        $id = $_GET['id'];
        $result = mysqli_fetch_array(mysqli_query($conn, "SELECT t1.fname, t1.lname, t1.address, t1.email,
 t1.phone,t1.avatar, t2.name, t1.friend_id FROM `friend` t1 inner JOIN gender t2 on t1.gender_id = t2.gender_id WHERE friend_id='$id'"));

?>

<img src="<?php echo empty($result['avatar']) ? "uploads/blank.png" :  $result['avatar'] ; ?>" class="rounded-circle" style="width: 20%; height: 20%; margin-top: 100px;" />

<div class="card" style="width: 18rem;">
 <div class="card-body">
   <h5 class="card-title"> 
       <?php echo $result['fname'] .' ' . $result['lname']; ?>
   </h5>

   <h6 class="card-subtitle mb-2 text-muted">
        <?php echo  $result['name']; ?>
   </h6>
   
   <p class="card-text">
       Address: <?php echo $result['address']; ?>
   </p>

   <p class="card-text">
        Email : <?php echo $result['email']; ?>
   </p>

   <p class="card-text">
        Phone: <?php echo $result['phone']; ?>
   </p>
   
 </div>
</div>
<br/>
     <a href="viewrecords.php" class="btn btn-info">Back to list</a>
     <a href="edit.php?id=<?php echo $result['user_id'] ?>" class="btn btn-warning">Edit</a>
     <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?
     id=<?php echo $result['user_id']?>" class="btn btn-danger">Delete</a>
             

            
<?php } ?> 







  <br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>