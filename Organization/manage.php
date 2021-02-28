<?php
include('header.php');
session_start();

?>
<style>
#manage {

  border-collapse: collapse;
  width: 100%;
}

#manage td{
  padding: 10px;
  width:25%;
  text-align:center;
}

#manage th {
  padding-top: 12px;
  padding: 10px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #1abc9c;
  color: white;
}

#manage tr td i:hover{
    font-size:24px;
    color:#3498db;
}
.container{
        margin-left:200px;
    }
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackerbash";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
$uname=$_SESSION['username'];
// $sql="SELECT * FROM exam WHERE username='$uname'";
// $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
// $record = mysqli_fetch_array($result);

?>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
    <a href="#"><img src="../resources/img/logo-examiz.png" alt="Examiz Logo" class="logo" style="height:80px;width:auto;"></a>

      <div class="right_menu">
        <ul>
        <li><a href="../logout.php"> Logout <i class="fas fa-user"></a></i>
            <!-- <div class="profile_dd">
               <div class="dd_item">Profile</div>
               <div class="dd_item">Change Password</div>
               <div class="dd_item">Logout</div>
            </div> -->
          </li>
        </ul>
      </div>
    </div>
  </div>
    
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <div class="profile">
              <div class="img">
                <img src="https://i.imgur.com/Ctwf8HA.png" alt="profile_pic">
              </div>
              <div class="profile_info">
                 <p style="color:white">Welcome</p>
                 <p class="profile_name"><?php echo $uname; ?></p>
              </div>
            </div>
            <ul>
            <li>
                <a href="orgprofile.php" >
                  <span class="icon"><i class="fas fa-id-card"></i></span>
                  <span class="title">My Profile</span>
                </a>
              </li>
              <li>
                <a href="create.php">
                  <span class="icon"><i class="fas fa-graduation-cap"></i></span>
                  <span class="title">Create Exam</span>
                </a>
              </li>
              <li>
                <a href="previous.php">
                  <span class="icon"><i class="fas fa-history"></i></span>
                  <span class="title">Previous Exams</span>
                </a>
              </li>
              <li>
                <a href="manage.php" class="active">
                  <span class="icon"><i class="fas fa-bell"></i></span>
                  <span class="title">Manage Exams</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <!-- <div class="container">
       
      </div> -->
      <div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">
  <!-- </div>
  
</div>	 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
<div class="container" align="center">
    <center>
<h1>Manage Exam</h1>
</center>
<br>
<br>
<table id="manage">
<tr>
    <th>Exam Name</th>
    <th>College Name</th>
    <th>Date</th>
    <th>Action</th>
  </tr>
<?php

if($stmt = $conn->query("SELECT * FROM exam WHERE username='$uname'")){
while ($row = $stmt->fetch_assoc()) {
  ?>  

  <tr>
      <td><?php echo $row['subject'];?></td>
      <td><?php echo $row['college_name'];?></td>
      <td><?php echo $row['date'];?></td>
      <td>  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit</button>
</td>
      <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Exam</h4>
        </div>
        <div class="modal-body">
          <p>Date</p>          
                <input id="date" type="date" name="date" />
          <p><br>Link</p>          
                <input id="link" type="text" name="link" />
          <p><br>Time</p>          
                <input id="time" type="time" name="time" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Edit</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</tr>
 <?php
}
}
?>
</table>

</div>

  </body>
  </html>