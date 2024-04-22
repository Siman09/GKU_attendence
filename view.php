<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database="gku1";
$user=$_GET['user1'];
$_SESSION["user2"]=$user;
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
    //echo"Connection successfull";
}
else
   {
    echo"Connection field"."<br>";
   }
 $sql1="SELECT `name` FROM students where rollno='$user'";
 $studentname=mysqli_query($conn,$sql1);  
 $student1=mysqli_fetch_assoc($studentname);
 if(!$student1)
 {
  $_SESSION["error"]="Rollno not found";
    header("location:con2.php");

 }
 //python subject attendance
 $how1="SELECT COUNT('p') AS total FROM `python2` WHERE `$user` LIKE 'P'";
 $total1="SELECT COUNT('$user') AS howmany  from python2";
 $how2=mysqli_query($conn,$how1);
 $total2=mysqli_query($conn,$total1);
 $howResult = mysqli_fetch_assoc($how2);
 $totalResult = mysqli_fetch_assoc($total2);
 $tper = 100/$totalResult['howmany']*$howResult['total'];


 //Data structure subject attendance
 $how2="SELECT COUNT('p') AS total FROM `datastructure2` WHERE `$user` LIKE 'P'";
 $total2="SELECT COUNT('$user') AS howmany from datastructure2";
 $how3=mysqli_query($conn,$how2);
 $total3=mysqli_query($conn,$total2);
 $howResult1 = mysqli_fetch_assoc($how3);
 $totalResult1 = mysqli_fetch_assoc($total3);
 $tper1 = 100/$totalResult1['howmany']*$howResult1['total'];


 //commmunication subject attendance
 $how3="SELECT COUNT('p') AS total FROM `communication2` WHERE `$user` LIKE 'P'";
 $total3="SELECT COUNT('$user') AS howmany from communication2";
 $how4=mysqli_query($conn,$how3);
 $total4=mysqli_query($conn,$total3);
 $howResult2 = mysqli_fetch_assoc($how4);
 $totalResult2 = mysqli_fetch_assoc($total4);
 $tper2 = 100/$totalResult2['howmany']*$howResult2['total'];
 
 //Data structure subject attendance
 $how4="SELECT COUNT('p') AS total FROM `ai2` WHERE `$user` LIKE 'P'";
 $total4="SELECT COUNT('$user') AS howmany from ai2";
 $how5=mysqli_query($conn,$how4);
 $total5=mysqli_query($conn,$total4);
 $howResult3 = mysqli_fetch_assoc($how5);
 $totalResult3 = mysqli_fetch_assoc($total5);
 $tper3 = 100/$totalResult3['howmany']*$howResult3['total'];

 //awt2 subject attendance
 $how5="SELECT COUNT('p') AS total FROM `awt2` WHERE `$user` LIKE 'P'";
 $total5="SELECT COUNT('$user') AS howmany from awt2";
 $how6=mysqli_query($conn,$how5);
 $total6=mysqli_query($conn,$total5);
 $howResult4 = mysqli_fetch_assoc($how6);
 $totalResult4 = mysqli_fetch_assoc($total6);
 $tper4 = 100/$totalResult4['howmany']*$howResult4['total'];


  //analyis algorithm subject attendance
  $how6="SELECT COUNT('p') AS total FROM `algorithm2` WHERE `$user` LIKE 'P'";
  $total6="SELECT COUNT('$user') AS howmany from algorithm2";
  $how7=mysqli_query($conn,$how6);
  $total7=mysqli_query($conn,$total6);
  $howResult5 = mysqli_fetch_assoc($how7);
  $totalResult5 = mysqli_fetch_assoc($total7);
  $tper5 = 100/$totalResult5['howmany']*$howResult5['total'];
  
  //mentro meeting subject attendance
  $how7="SELECT COUNT('p') AS total FROM `mentor` WHERE `$user` LIKE 'P'";
  $total7="SELECT COUNT('$user') AS howmany from mentor";

  $how8=mysqli_query($conn,$how7);
  $total8=mysqli_query($conn,$total7);
  $howResult6 = mysqli_fetch_assoc($how8);
  $totalResult6 = mysqli_fetch_assoc($total8);
  $tper6 = 100/$totalResult6['howmany']*$howResult6['total'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Student Attendance</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">      
        <a class="nav-link" href="con2.php">Logout<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="con1.php">CR login</a>
      </li>
  </div>
</nav> 

<div class="container">
  <h2>Welcome <?php echo $student1['name'] ?> </h2>
  <p>I am Siman if you face any kind of troublesome related this website then you can send a mail- Simanjitsingh600%gmail.com</p>
  <table class="table">
    <thead>
      <tr>
        <th>Serial_No</th>
        <th>Roll_no</th>
        <th>Subject_Name</th>
        <th>Attendance</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><?php echo $user   ?> </td>
        <td>Data Structure</td>
        <td><?php echo $tper1 ?>%</td>
      </tr>      
      <tr class="success">
        <td>2</td>
        <td><?php echo $user   ?></td>
        <td>Python</td>
        <td><?php echo $tper;?>%</td>
      </tr>
      <tr class="danger">
        <td>3</td>
        <td><?php echo $user   ?></td>
        <td>Communication Skills</td>
        <td><?php echo $tper2 ?>%</td>
      </tr>
      <tr class="info">
        <td>4</td>
        <td><?php echo $user   ?></td>
        <td>Artificial intelligence</td>
        <td><?php echo $tper3 ?>%</td>
      </tr>
      <tr class="warning">
        <td>5</td>
        <td><?php echo $user   ?></td>
        <td>Advance Web Technology</td>
        <td><?php echo $tper4 ?>%</td>
      </tr>
      <tr class="active">
        <td>6</td>
        <td><?php echo $user   ?></td>
        <td>Analysis and Design of Alogo</td>
        <td><?php echo $tper5 ?>%</td>
      </tr>
      <tr class="success">
        <td>7</td>
        <td><?php echo $user   ?></td>
        <td>Mentor Metting</td>
        <td><?php echo $tper6 ?>%</td>
      </tr>
    </tbody>
  </table>
</div><br><br><br><br>




<div class="container">
  <table class="table">
  <div>
<form action="./view1.php">
  <label for="birthday">Select Date</label>
  <input type="date" id="birthday" name="date1">
  <button type="submit" value="">GO</button>
</form>
</div>
    <thead>
      <tr>
        <th>Date</th>
        <th>AI</th>
        <th>Python</th>
        <th>WEB Design</th>
        <th>DATA Structure</th>
        <th>Communication</h>
        <th>Analysis</th>
      </tr>
    </thead>
    <tbody>   
      <tr class="danger">
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
      </tr>
    </tbody>
  </table>
</div>


</body>
</html>

