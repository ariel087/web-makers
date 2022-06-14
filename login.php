<link rel="stylesheet" href="style.css">
<?php
require('./database.php');

session_start();
if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
    $_SESSION['status'] = 'invalid';
  
}
if($_SESSION['status'] == 'valid'){
    echo "<script>window.location.href='/login_form/home.php'</script>";
}
if(isset($_POST['loginbtn'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

if(empty ($email) || empty($password)){
    echo"fill up the form";
} 
else{
$sqlquery = "SELECT * FROM account WHERE email = '$email' AND password = '$password'";
$sqlresult =  mysqli_query($connection,$sqlquery);
$results = mysqli_fetch_array($sqlresult);
if(mysqli_num_rows($sqlresult) > 0 && $results['verifiedemail'] == 'true'){
    $_SESSION['status'] = 'valid';
    $_SESSION['email'] = $results['email'];
    $_SESSION['firstname'] = $results['firstname'];
    $_SESSION['middlename'] = $results['middlename'];
    $_SESSION['lastname'] = $results['lastname'];
    echo "<script>window.location.href='/login_form/home.php'</script>";

}
else{
    $_SESSION['status'] = 'invalid';
    echo "invalid";
}    
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>log in form</title>


</head>
<body>
    <div class="logo">
        <img id="image1" src="logo.png" alt="">
    </div>
    <div class="navigation">
        <ul>
            <li><a href="/login_form/signup.php">Sign Up</a> </li>
         </ul>
    </div>
        <div class="box">
          <div class="header">
        <h1>Login</h1>
        </div>
             <form  action="/login_form/login.php"  method = "post">
             <div class="text-field">
                <input type="text" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="text-field">
                <input type="password" name="password" required>    
                <span></span>
                <label>Password</label>
            </div>
                <input type="submit" name="loginbtn" id="loginbtn1"class="submit" value = "LOG IN">
            </div>
            </form>
        </div>
    


    
</body>

</html>