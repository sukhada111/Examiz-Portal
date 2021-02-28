<?php

session_start();
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "hackerbash";
      $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
      $uname=$_SESSION['username'];
?>

<?php
 $query="SELECT * FROM student WHERE username='$uname'";
 $result = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
 $record = mysqli_fetch_array($result);
 $mail=$record['e_mail'];
mail("$mail",'Subscription','Hello! Your Subsription is successfully completed! Best Wishes from Team Examiz.','From: examiz928@gmail.com');
?>
      <?php
      $sql="SELECT * FROM student WHERE username='$uname'";
      $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
      $record = mysqli_fetch_array($result);
      $stud_type=$record['student_type'];

      $id=$_GET['ex'];

      $uname=$_SESSION['username'];
      $sql="SELECT * FROM student WHERE username='$uname'";
      $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
      $record = mysqli_fetch_array($result);
      $stud_id=$record['student_id'];
      $coll=$record['college_name'];

      $sqlin = "INSERT into subscribe(exam_id, student_id,college_name) VALUES (?,?,?)";
// $result = mysqli_query($db, $sqlin) or die("database error:". mysqli_error($db));
$stmt = mysqli_stmt_init($conn);

if(mysqli_stmt_prepare($stmt,$sqlin)){
	mysqli_stmt_bind_param($stmt, "sss",$id,$stud_id,$coll);
	mysqli_stmt_execute($stmt);

	// Close statement
	mysqli_stmt_close($stmt);
    header('Location:subscribed.php');
}
?>
