<?php 
ob_start();
session_start();
require_once 'dbconnect.php';

// can't open index when logged in
if ( isset($_SESSION['user'])) {
  header("Location: home.php");
  exit;
}

if ( isset($_SESSION['admin'])) {
  header("Location: adminpanel.php");
  exit;
}

$error = false;

if( isset($_POST['btn-login']) ) {

  // prevent sql injections/ clear user invalid inputs
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST[ 'pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // prevent sql injections / clear user invalid inputs

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 }

 if (empty($pass)){
  $error = true;
  $passError = "Please enter your password." ;
 }

 // if there's no error, continue to login
 if (!$error) {
 
  $password = hash( 'sha256', $pass); // password hashing

  $res=mysqli_query($conn, "SELECT userId, userName, userPass,admin FROM users WHERE userEmail='$email'" );
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row
 
  if( $count == 1 && $row['userPass' ]==$password ) {
    if($row["admin"] == 1){
      $_SESSION["admin"] = $row["userId"];
      header("Location: home_1.php");
    } else {
      $_SESSION['user'] = $row['userId'];
      header("Location: home_1.php");
    }
   
  } else {
   $errMSG = "Incorrect Credentials, Try again..." ;
  }
 
 }

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login & Registration System</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
   <form method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete= "off">
           
            <?php
  if ( isset($errMSG) ) {
echo  $errMSG; ?>
             
               <?php
  }
  ?>
           <div class="wrapper fadeInDown">
              <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                  <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="Please Log In" />
                </div>        
                <!-- Login Form -->
                <form>
                  <input  type="text" id="login" name="email"  class="fadeIn second" placeholder= "Your Email" value="<?php echo $email; ?>"  maxlength="40">
                  <br>
                  <span class="text-danger"><?php  echo $emailError; ?></span>
                  <input type="password" id="password" name="pass" class="fadeIn third" placeholder ="Your Password" maxlength="15">
                  <br>
                  <span  class="text-danger"><?php  echo $passError; ?></span>
                  <input type="submit" class="fadeIn fourth" name="btn-login" value="Sign In">
                </form>

            <!-- Create User -->
            <div id="formFooter">
              <a  href="register.php" class="underlineHover">Sign Up Here...</a>
            </div>

</div>
</body>
</html>
<?php ob_end_flush(); ?> 