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
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

if(empty ($username) || empty($password)){
    echo"fill up the form";
} 
else{
$sqlquery = ("SELECT * FROM account WHERE username = '$username' AND password = '$password'");
$sqlresult =  mysqli_query($connection,$sqlquery);
$results = mysqli_fetch_array($sqlresult);
if(mysqli_num_rows($sqlresult) > 0){
    $_SESSION['status'] = 'valid';
    $_SESSION['loginuser'] = $results['username'];
    echo "<script>window.location.href='/login_form/home.php'</script>";

}
else{
   
    echo "invalid";
    $_SESSION['status'] = 'invalid';
}    
}
}
?>
