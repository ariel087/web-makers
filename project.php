<?php
require_once __DIR__ . '/vendor/autoload.php';
require('./database.php');
if(isset($_POST['create'])){
echo "putangina mo";

$name = $_POST['name'];
$address = $_POST['address'];
$cpnumber = $_POST['cpnumber'];
$email = $_POST['email'];
$objective = $_POST['objective'];
$date = $_POST['date'];
$location = $_POST['location'];
$position = $_POST['position'];
$educdate = $_POST['educdate'];
$educlocation = $_POST['educlocation'];
$educlevel = $_POST['educlevel'];
$skills = $_POST['skills'];
$difficulty = $_POST['difficulty'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$placeofbirth = $_POST['placeofbirth'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$citizenship = $_POST['citizenship'];
$status = $_POST['status'];

$queryCreate = "INSERT INTO resumedata  VALUES (null,'$name','$address','$cpnumber','$email','$objective','$date','$location','$position','$educdate','$educlocation','$educlevel','$skills','$difficulty','$sex','$age','$birthday','$placeofbirth','$height','$weight','$citizenship','$status')";
$sqlCreate = mysqli_query($connection,$queryCreate);

$sqlquery = "SELECT * FROM resumedata WHERE email = '$email'";
        $sqlresult =  mysqli_query($connection,$sqlquery);
        $results = mysqli_fetch_array($sqlresult);

        if(mysqli_num_rows($sqlresult) > 0){
 $_SESSION['name'] = $results['name'];
 $_SESSION['address'] = $results['address'];
 $_SESSION['cpnumber'] = $results['cpnumber'];
 $_SESSION['email'] = $results['email'];
 $_SESSION['objective'] = $results['objective'];
 $_SESSION['date'] = $results['date'];
 $_SESSION['location'] = $results['location'];
 $_SESSION['position'] = $results['position'];
 $_SESSION['educdate'] = $results['educdate'];
 $_SESSION['educlocation'] = $results['educlocation'];
 $_SESSION['educlevel'] = $results['educlevel'];
 $_SESSION['skills'] = $results['skills'];
 $_SESSION['difficulty'] = $results['difficulty'];
 $_SESSION['sex'] = $results['sex'];
 $_SESSION['age'] = $results['age'];
 $_SESSION['birthday'] = $results['birthday'];
 $_SESSION['placeofbirth'] = $results['placeofbirth'];
 $_SESSION['height'] = $results['height'];
 $_SESSION['weight'] = $results['weight'];
 $_SESSION['citizenship'] = $results['citizenship'];
 $_SESSION['status'] =$results['status'];
}
$html = $style. '
<link rel="stylesheet" href="C:\xampp\htdocs\login_form\vendor\pdf.css">

<div class="main">
<div class="profile">
    <p class="name">'.$_SESSION['name'].'</p>
    <p class="address">'.$_SESSION['address'].'</p>
    <p class="cpnumber">'.$_SESSION['cpnumber'].'</p>
    <p class="email">'.$_SESSION['email'].'</p>
</div>

<div class="objective">
    <h1>OBJECTIVE</h1>
    <p> class="objective">'.$_SESSION['objective'].'</p>
</div>

<div class="employment">
    <h1>EMPLOYMENT HISTORY</h1>
    <p class="date"> 
       '.$_SESSION['date'].'
    </p> 
    <p class="location"> 
    '.$_SESSION['location'].'
    </p>
    <p class="position">
    '.$_SESSION['position'].'
    </p>
</div>

<div class="education">
    <h1>
        EDUCATIONAL BACKGROUND 
    </h1>
    <p class="educdate">
    '.$_SESSION['educdate'].'
    </p>
    <p class="educlocation">
    '.$_SESSION['educlocation'].'
    </p>
    <p class="educlevel">
    '.$_SESSION['educlevel'].'
    </p>
</div>

<div class="skills">
    <h1>SKILLS</h1>
    <p class="program">
    '.$_SESSION['skills'].'
  </p>
  <p class="difficulty">
  '.$_SESSION['difficulty'].'
  </p>
</div>
<div class="personalinfo">
    <h1>PERSONAL INFORMATION</h1>
    <p class="sex">'.$_SESSION['sex'].'</p>
    <p class="age">'.$_SESSION['age'].'</p>
    <p class="Birthday">'.$_SESSION['birthday'].'</p>
    <p class="placeOfBirth">'.$_SESSION['placeofbirth'].'</p>
    <p class="height">'.$_SESSION['height'].'</p>
    <p class="weight">'.$_SESSION['weight'].'</p>
    <p class="citizenship">'.$_SESSION['citizenship'].'</p>
    <p class="status">'.$_SESSION['status'].'</p>
</div>
</div>

';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

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
    <div class="main">
        <form action="" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="address" placeholder="address">    
        <input type="text" name="cpnumber" placeholder="cpnumber">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="objective" placeholder="objective">
        <input type="text" name="date" placeholder="date">
        <input type="text" name="location" placeholder="location">
        <input type="text" name="position" placeholder="position">
        <input type="text" name="educdate" placeholder="educdate">
        <input type="text" name="educlocation" placeholder="educlocation">
        <input type="text" name="educlevel" placeholder="educlevel">
        <input type="text" name="skills" placeholder="skills">
        <input type="text" name="difficulty" placeholder="difficulty">
        <input type="text" name="sex" placeholder="sex">
        <input type="text" name="age" placeholder="age">
        <input type="text" name="birthday" placeholder="birthday">
        <input type="text" name="placeofbirth" placeholder="placeofbirth">
        <input type="text" name="height" placeholder="height">
        <input type="text" name="weight" placeholder="weight">
        <input type="text" name="citizenship" placeholder="citizenship">
        <input type="text" name="status" placeholder="status">
        

        <input type="submit" name="create" value="create">
    </form>
    </div>
</body>
</html>