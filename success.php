</br></br>
</br></br>

<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/config.php';
    //require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        //firstname lastname address email phone gender avatar
      //extract values from $_POST array
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $gender = $_POST['gender'];
      $user_id = $_POST['user_id'];
      $password = $_POST['password'];

      //uploads
       $milliseconds = round(microtime(true) * 1000);
       if (isset($_FILES["avatar"]["tmp_name"])){
            $orig_file = $_FILES["avatar"]["tmp_name"];
            $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
            $target_dir = 'uploads/';
            $destination = "$target_dir.$milliseconds.$ext";
            move_uploaded_file($orig_file,$destination);
        }else{
           $destination="";
       }

 //email validation       
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        EXIT("INVALID FORMAT");
    }

    $api_key = "b5befe280daa44c09764047b2cb090cf";

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => "http://emailvalidation.abstractapi.com/v1?api_key=$api_key&email=$email",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true

    ]);

   
    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response, true);

  if ($data['deliverability'] === "UNDELIVERABLE") {

    exit("Undeliverable");
  }

  if ($data["is_disposable_email"]["value"] === true) {
   
    exit("Disposable");
  }

    echo "email address is valid";


          
      //call function to insert and track if successful or not
        $sql = "INSERT INTO `friend`(`fname`, `lname`, `address`, `email`, `phone`, `gender_id`, `avatar`) 
VALUES ('$fname','$lname','$address','$email','$phone','$gender','$destination')";
      $isSuccess = mysqli_query($conn, $sql);

      $specialtyName = mysqli_fetch_array(mysqli_query($conn,"SELECT `name` FROM `gender` WHERE gender_id = '$gender'"));


      if($isSuccess){
          $id = mysqli_insert_id($conn);
          $sql2 = "INSERT INTO `user`(`username`, `password`, `type`) VALUES ('$user_id','$password','2')";
          mysqli_query($conn, $sql2);
       // SendEmail::SendMail($email, 'Welcome to Blogging By Melissa', 'You have sucessfully registered as a FRIEND!');
       // echo '<h1 class="text-center text-success">You Have Been Registered</h1>';
       include 'includes/successmessage.php';
      }
      else{
          //echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
          include 'includes/errormessage.php';
      }
    }
?>

</br></br>
</br></br>
</br></br>

<h1 class="text-center text-success">You Have Been Registered!<h1/>
</br></br>
<br/>

<img src="<?php echo $destination; ?>" class="rounded-circle" style="width: 20%; height: 20%" />
<div class="card" style="width: 18rem;">
 <div class="card-body">
   <h5 class="card-title"> 
       <?php echo $_POST['firstname'] .' ' . $_POST['lastname']; ?>
   </h5>

   <h6 class="card-subtitle mb-2 text-muted">
        <?php echo  $specialtyName['name']; ?>
   </h6>
   
   <p class="card-text">
        Address: <?php echo $_POST['address']; ?>
   </p>

   <p class="card-text">
        Email: <?php echo $_POST['email']; ?>
   </p>

   <p class="card-text">
        Phone: <?php echo $_POST['phone']; ?>
   </p>
   
 </div>
</div>





<br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>

