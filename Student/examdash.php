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
      $uname=$_SESSION['username'];
     
      
      ?>
<div class="container" align="center">

<h2>My Exams:</h2>
<br>
<div class="row">
<?php
if($stmt = $conn->query("SELECT * FROM exam where college_name in (select college_name from student where username='$uname')")){

while ($row = $stmt->fetch_assoc()) {
  ?>
<div class="col-sm-6">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h5 class="card-title">Exam name: <?php echo $row['test_name'];?></h5>
        <p class="card-text">Subject: <?php echo $row['subject'];?></p>
        <p class="card-text">Date: <?php echo $row['date'];?></p>
        <a href="sub_db.php?&ex=<?php echo $row['exam_id'];?>" class="btn"><i class="fa fa-bell" aria-hidden="true"></i> Subscribe</a>
        <a href="exam_details.php?&ex=<?php echo $row['exam_id'];?>" class="btn">Know more</a>
      </div>
    </div>
  </div>
  <?php
}
?>
  

</div>
<?php
}
?>
 







</div>