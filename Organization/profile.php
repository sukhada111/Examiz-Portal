<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php

include('header.php');
include('sidebar.php');


?>
<style>
    .container{
        margin-left:200px;
    }
 
        .card-img{
            width: 280px;
            height:94%;
            margin-right:50%;
            padding-right:40%;
            padding-top:20px;
            padding-left: 20px;
        }
        .no-gutters{
            margin-left: 0px;
            padding-left:0px;
        }
        .card-body{
            margin-left:30%;
           
        }
        .card-title{
            padding-right:50px;
        }
        .card-text{
            padding-right:50px;
        }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackerbash";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
$uname=$_SESSION['username'];
$sql="SELECT * FROM oranization WHERE username='$uname'";
$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$record = mysqli_fetch_array($result);
?>
<div class="container" align="center">
    <br>
<h2>Welcome to Examiz!</h2>
<br>
<h3>Your one stop destination for all Exam activities.</h3>

<br><br>
<h4>Profile details:</h4>
<div class="card card  shadow mb-4" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../resources/img/org.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
          <br>
        <h5 class="card-title">Username: <?php echo $record['username']; ?></h5>
        <br>
        <p class="card-text">Name:  <?php echo $record['college_name']; ?></p>
        <p class="card-text">Location:  <?php echo $record['location']; ?></p>
        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
  </div>
</div>



</div>