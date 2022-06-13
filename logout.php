<script src="./logout.js"></script>
<?php
session_start();

$_SESSION['status'] = 'invalid';
unset($_SESSION['username']);
echo "<script>window.location.href='/login_form/login.php'</script>";
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
    
</body>

</html>
