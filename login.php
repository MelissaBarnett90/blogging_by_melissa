<?php
$title = 'User Login';
require_once 'includes/header.php';
require_once 'db/config.php';




//if data was submiteted via the$_POST array
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $new_password = md5($password.$username);

    $sql = mysqli_query($conn, "SELECT `id`, `username`, `password`, `type` FROM `user` WHERE username='$username' and password='$password'");
    $result = mysqli_fetch_array($sql);
    $id = $result['id'];

    if($id == null) {
        echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again!</div>';
    }
    else{
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $result['id'];
        $_SESSION['type'] = $result['type'];
        header("Location: viewrecords.php");
        
    }
}


?>

<h1  class="text-center" style="margin-top: 100px;"><?php echo $title ?> </h1>

<form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
   <div class="row" style="margin: 30px;">
    <table class="table table-sm">
        <div class="form-group">
            <tr>
                <td><label for="username">Username: * </label></td>
                <td><input type="text" name="username" class="form-control" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') ECHO $_POST['username']; ?>">
                </td>
            </tr>

        </div>

        <div class="form-group">
            <tr>

                <td><label for="password">Password: * </label></td>
                <td><input type="text" name="password" class="form-control" id="password" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') ECHO $_POST['password']; ?>">

                </td>
            </tr>

    </table>
    <br/>
    <br/>

    <div class="d-grid gap-2">
        <input type="submit" value="Login" class="btn btn-primary"><br/>
    </div>

  
    <a href="a" target="_blank"> Forgot Password?</a> </br></br>
    <a href="register.php" target="_blank">Want to be a friend? Register here</a> 
 

</form>

<br/>   <br/>   <br/>   <br/>   <br/>   <br/>

<?php require_once 'includes/footer.php'; ?>




<!-- <section class="contact-us">
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <div class="down-contact">
          <div class="row">
            <div class="col-lg-8">
              <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                  <h2>Log In!</h2>
                </div>
                <div class="content">
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="Uname" type="text" id="Uname" placeholder="Enter your User Name" required="">
                        </fieldset>
                      </div>


                      <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="password" type="text" id="password" placeholder="Enter your Password" required="">
                        </fieldset>
                      </div>




                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button">Log In</button>
                        </fieldset>

                      </br></br>
                        <fieldset>
                        <a href="a"> Forgot Password </a> <hr> </hr> <a href="signup.php"> Not Yet A Member?</a>
                        </fieldset>





                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>



    </div>
  </div>
</section>
-->
