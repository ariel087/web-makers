<?php

require_once __DIR__ . '/vendor/autoload.php';
$html = '
<div class="main">
<div class="profile">
    <p class="name">Ariel Gallardo Labuson</p>
    <p class="address">625 Tramo, Sto. Cristo, Pulilan, Bulacan</p>
    <p class="cpnumber">09451570794</p>
    <p class="email">ariellabuson@gmail.com</p>
</div>

<div class="objectives">
    <h1>OBJECTIVES</h1>
    <p>To acquire valuable knowledge and skills to complement those that I have learned from school in an actual job environment. In return, I offer my service and determination to be an asset to your company throughout the duration of my training period</p>
</div>

<div class="employment">
    <h1>EMPLOYMENT HISTORY</h1>
    <p class="date"> 
        Nov. 2019-Dec. 2019
    </p> 
    <p class="location"> 
        STI College Baliuag 
    </p>
    <p class="position">
        Work Immersion At Computer Laboratory
    </p>
</div>

<div class="education">
    <h1>
        EDUCATIONAL BACKGROUND 
    </h1>
    <p class="date">
        2020-Present
    </p>
    <p class="location">
         Baliuag Polytechnic College-Btech
    </p>
    <p class="postion">
        BS Information Technology Major in Programming
    </p>
</div>

<div class="skills">
    <h1>SKILLS</h1>
    <p class="program">
        Java programming
  </p>
  <p class="difficulty">
      Advance
  </p>
</div>
<div class="personalinfo">
    <h1>PERSONAL INFORMATION</h1>
    <p class="sex">Sex</p>
    <p class="age">age</p>
    <p class="Birthday">Birthday</p>
    <p class="placeOfBirth">Place Of Birth</p>
    <p class="height">Height</p>
    <p class="weight">Weight</p>
    <p class="citizenship">Citizenship</p>
    <p class="status">Status</p>
</div>
</div>

';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>


