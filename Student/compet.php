<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
session_start();
include('header.php');
include('sidebar.php');
$_SESSION['username']="suuij";
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
      $stud_type=$record['student_type'];
?>

<div class="container" align="center">

<h2>Upcoming Competitive Exams:</h2>
<br>
<div class="row">
<?php
if($stmt = $conn->query("SELECT * FROM general_exam where student_type='$stud_type'")){

while ($row = $stmt->fetch_assoc()) {
  ?>
<div class="col-sm-6">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h5 class="card-title">Exam: <?php echo $row['exam_name'];?></h5>
       
        <p class="card-text">Date: Flexible</p>
        
        <p class="card-text">Related Exam: <?php echo $row['similar_exam'];?></p>
        <a href="<?php echo $row['link'];?>" class="btn">Visit Site <i class="fas fa-location-arrow"></i></a>

      </div>
    </div>
  </div>
  <?php
}
?>
    </div>
    <?php }
    ?>
    </div>