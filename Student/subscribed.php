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
      $sql="SELECT * FROM student WHERE username='$uname'";
      $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
      $record = mysqli_fetch_array($result);
      $stud_id=$record['student_id'];
?>
<div class="container" align="center">

<h2>Subscribed Exams:</h2>
<br>
<div class="row">
<?php

if($stmt = $conn->query("SELECT * from exam where exam_id in (select exam_id from subscribe where student_id='$stud_id')")){

while ($row = $stmt->fetch_assoc()) {
  ?>
<div class="col-sm-6">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h5 class="card-title">Exam name: <?php echo $row['test_name'];?></h5>
        <p class="card-text">Subject: <?php echo $row['subject'];?></p>
        <p class="card-text">Date: <?php echo $row['date'];?></p>
        
        <a href="exam_details.php?&ex=<?php echo $row['exam_id'];?>" class="btn">Know more</a>
      </div>
    </div>
  </div>
<?php
}
?>

<?php

}

if($stmt = $conn->query("SELECT * from general_exam where id in (select exam_id from subscribe where student_id='$stud_id')")){

while ($row = $stmt->fetch_assoc()) {
  ?>
<div class="col-sm-6">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h5 class="card-title">Exam name: <?php echo $row['exam_name'];?></h5>
        <p class="card-text">Link: <?php echo $row['link'];?></p>
        <p class="card-text">Similar Exam: <?php echo $row['similar_exam'];?></p>
        
        <a href="" class="btn">Know more</a>
      </div>
    </div>
  </div>
<?php
}
?>

<?php

}
?>
</div>

</div>