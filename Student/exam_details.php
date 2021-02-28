<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
session_start();
include('header.php');
include('sidebar.php');

?>
 <style>
     .btn{
         background-color:#1abc9c;
         color:white;
     }
     .card:hover{
     transform: scale(1.02);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
 </style>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackerbash";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
$exid=$_GET['ex'];
$sql="SELECT * FROM exam WHERE exam_id='$exid'";
$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$record = mysqli_fetch_array($result);
?>
<div class="container" align="center">

<h2>Exam Details:</h2>
<br>
<div class="row">
<div class="col-sm-12">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h5 class="card-title">Exam name:<?php echo $record['test_name'];?></h5>
        <p class="card-text">Subject:<?php echo $record['subject'];?> </p>
        <p class="card-text">Date:<?php echo $record['date'];?> </p>
        <p class="card-text">Total Marks:<?php echo $record['marks'];?> </p>
        <p class="card-text">Medium:<?php echo $record['medium'];?> </p>
        <p class="card-text">Duration:<?php echo $record['duration'];?> hours </p>
        <p class="card-text">Link:<a><?php echo $record['meet_link'];?></a> </p>
       
      </div>
    </div>
</div>
  

</div>
 







</div>