<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
session_start();
include('header.php');
include('sidebar.php');

?>
 <style>
     .btn{
         background-color:#48d1cc;
         color:white;
     }
     .card-img-top{
         /* padding-left:50px; */
         width:100%;
         height: 20%;
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

<h2>Recommended Resources for your Exam Preparation:</h2>
<br>

<div class="row">
<?php
if($stud_type=='ug'){
  $sql="SELECT * FROM student WHERE username='$uname'";
      $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
      $record = mysqli_fetch_array($result);
      $branch=$record['branch'];
if($stmt = $conn->query("SELECT * FROM resources where branch='$branch'")){

while ($row = $stmt->fetch_assoc()) {
  ?>
 <div class="col-sm-6">
    <div class="card shadow mb-4" style="max-width:300px">
    <img class="card-img-top" src=<?php echo "../resources/img/$row[image]";?> alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Exam: <?php echo $row['name'];?></h5>
        <p class="card-text">Link: <?php echo $row['link'];?></p>
        
        
    

      </div>
    </div>
  </div>
  <?php
}
 }
}
else{
  ?>
 
<?php
if($stmt = $conn->query("SELECT * FROM resources where student_type='hs'")){

  while ($row = $stmt->fetch_assoc()) {
    ?>
<div class="col-sm-6">
    <div class="card shadow mb-4" style="max-width:300px">
    <img class="card-img-top" src=<?php echo "../resources/img/$row[image]";?> alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Exam: <?php echo $row['name'];?></h5>
        <p class="card-text">Link: <?php echo $row['link'];?></p>

      </div>
    </div>
  </div>
  <?php
  }
  ?>

  <?php
}
}
    ?>
  </div>

    </div>