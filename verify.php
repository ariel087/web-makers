<?php
require('./database.php');
session_start();
if(isset($_POST['verifybtn'])){
    $confirm = $_POST['confirm'];
    if($_SESSION['verified'] == $confirm){
        $email = $_SESSION['email'];
        $queryupdate = "UPDATE account SET verifiedemail = 'true', verify = 'activated' WHERE email = '$email' ";
        $sqlUpdate = mysqli_query($connection,$queryupdate);
        
        echo "<script>alert(account verified successfully! thank you for verify!)</script>";   
        echo "<script>window.location.href='/login_form/login.php'</script>";   
    }
    else{
        echo 'negative';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<di class="main">
    <form action="" method="post">
        <input type="hidden" value="<?php echo $_SESSION['verified'];?>">
        <input type="text" name="confirm" >
        <input type="submit" name="verifybtn" value="Verify">
        </form>
    </div>
</body>
<script> 

</script>
</html>