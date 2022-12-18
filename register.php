
 <?php 
    $title = 'Register';
    require_once 'includes/header.php'; 
    require_once 'db/config.php';
   
?> 


</br>
</br>
</br>
</br>

 
 <form method="post" action="success.php" enctype="multipart/form-data" >
     <div class="row" style="margin: 30px;">

 
         <div class="form-group">
             <label for="firstname">First Name</label>
             <input required type="text" class="form-control" id="firstname" Name="firstname">

         </div>

         <div class="form-group">
             <label for="lastname">Last Name</label>
             <input required type="text" class="form-control" id="lastname" name="lastname">
         </div>

         <div class="form-group">
             <label for="lastname">User Id</label>
             <input required type="text" class="form-control" id="user_id" name="user_id">
         </div>
         <div class="form-group">
             <label for="lastname">Password</label>
             <input required type="text" class="form-control" id="password" name="password">
         </div>



         <div class="form-group">
             <label for="address">Address</label>
             <input type="text" class="form-control" id="address" name="address">
         </div>



         <div class="form-group">
             <label for="email">Email</label>
             <input required type="text" class="form-control" id="email" name="email"
                    aria-describedby="emailHelp" >
             <small id="emailHelp" class="form-text text-muted">We'll never
                 share your email with anyone else.</small>
         </div>

         <div class="form-group">
             <label for="phone">Contact Number</label>
             <input type="text" class="form-control" id="phone" name="phone"
                    aria-describedby="phoneHelp" placeholder="Enter phone">
             <small id="phoneHelp" class="form-text text-muted">We'll never
                 share your  phone number with anyone else.</small>
         </div>

         <div class="form-group" style="margin-bottom: 10px;">
             <label for="gender">Gender</label>
             <select class="form-control" id="gender" name="gender">
                 <?php
                    $sql = mysqli_query($conn, "SELECT `gender_id`, `name` FROM `gender` WHERE 1");
                    while ($row = mysqli_fetch_array($sql)){
                 ?>
                 <option value="<?php echo $row['gender_id']; ?> "><?php echo $row['name']; ?></option>
                 <?php  } ?>
             </select>
         </div>

         <br/>
         <div class="custom-file">
             <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
             <label class="custom-file-label" for="avatar">Choose File</label>
             <small id="avatar" clas="form-text text-danger">File Upload is Optional</small>
         </div>

         <br/>
         <br/>

         <div class="d-grid gap-2" style="margin-bottom: 20px;">
             <button type="submit"  name="submit" class="btn btn-primary btn-block">Register</button>
         </div>

                  
        

     </div>

</form>

<?php require_once 'includes/footer.php'; ?>
