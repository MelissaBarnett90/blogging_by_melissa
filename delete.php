<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    if(!$_GET['id']){
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else
    {
       //Get ID values
       $id =$_GET['id'];


       //Call delete function
        $result = $crud->deleteFriend($id);

       //Redirect to list
       if($result){
        header("Location: viewrecords.php");
    }
    else
    {
       // echo '';
       header("Location: viewrecords.php");
    }
  }

?>