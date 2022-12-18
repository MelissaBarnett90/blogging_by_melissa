
 <?php 
    $title = 'Register';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/config.php';

 if(isset($_POST['submit'])){
     //extract values from the $_POST array

     $date = date("Y-m-d");
     $id = $_SESSION['userid'];
     $title =  $_POST['title'];
     $description = str_replace("'","",$_POST['description']);

     if ($_FILES['image']['size'] != 0){
         $orig_file = $_FILES["image"]["tmp_name"];
         $milliseconds = round(microtime(true) * 1000);
         $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
         $target_dir = 'uploads/';
         $destination = "$target_dir.$milliseconds.$ext";
         move_uploaded_file($orig_file,$destination);
     }else{
         $destination="";
     }
     $sql = "INSERT INTO `blog`(`title`, `description`, `image`, `date`, `user_id`) 
VALUES ('$title','$description','$destination','$date','$id')";

     $result = mysqli_query($conn, $sql);
     //$result = $crud->editUser($id,$fname, $lname, $address, $email, $phone, $gender);

     //Redirect to index.php
     if($result){
         header("Location: blog.php");
     }
     else
     {
         //echo 'error';
         include 'includes/errormessage.php';
     }
 }
 else
 {
     //echo 'error';
     include 'includes/errormessage.php';
 }
   
?> 


</br>
</br>
</br>
</br>
 
 <form method="post" action="" enctype="multipart/form-data">
     <div class="row" style="margin: 30px;">
         <div class="form-group">
             <label for="firstname">Title</label>
             <input required type="text" class="form-control" id="title" Name="title">

         </div>

         <div class="form-group" style="margin-bottom: 5px;">
             <label for="lastname">Description</label>
             <textarea class="form-control" id="description" name="description" rows="4"></textarea>
         </div>




         <br/>
         <div class="custom-file">
             <input type="file" accept="image/*" class="custom-file-input" id="image" name="image">
             <label class="custom-file-label" for="avatar">Choose File</label>
             <small id="avatar" clas="form-text text-danger">File Upload is Optional</small>
         </div>

         <br/>
         <br/>

         <div class="d-grid gap-2" style="margin-bottom: 20px;">
             <button type="submit"  name="submit" class="btn btn-primary btn-block">Create</button>
         </div>

     </div>

</form>
