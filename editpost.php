<?php 


    require_once 'db/config.php';
    //get values from post operation
    if(isset($_POST['submit'])){
       //extract values from the $_POST array
        $id =  $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['address'];

        $contact = $_POST['phone'];
        $specialty = $_POST['gender'];

        //call Crud function
        $sql = "UPDATE `friend` SET `fname`='$fname',`lname`='$lname',
`address`='$dob',`phone`='$contact',`gender_id`='$specialty' WHERE friend_id = '$id'";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        //$result = $crud->editUser($id,$fname, $lname, $address, $email, $phone, $gender);

        //Redirect to index.php
        if($result){
            header("Location: viewrecords.php");
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




<br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>