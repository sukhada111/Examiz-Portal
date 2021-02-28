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
$sql="SELECT * FROM organization WHERE username='$uname'";
$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$record = mysqli_fetch_array($result);
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
                 <p class="profile_name"><?php echo $_SESSION['username'];?></p>
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
                <a href="previous.php" class="active">
                  <span class="icon"><i class="fas fa-history"></i></span>
                  <span class="title">Previous Exams</span>
                </a>
              </li>
              <li>
                <a href="manage.php" >
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


<div class="container" align="center">
    <center>
<h1>Previous Exam</h1>
</center>
<br>
<br>
<?php
$current_date=date("Y-m-d");
$sql = "SELECT test_name, college_name, meet_link, date, username FROM exam";
$result = $conn->query($sql);

 ?>
<table id="manage">
  <tr>
    <th>Exam Name</th>
    <th>College Name</th>
    <th>Date</th>
    <th>Meet Link</th>
  </tr>
  <?php
  foreach($result as $row)
  {
    if($current_date>$row["date"] && $row["username"]==$uname)
    {

    
    echo "<tr>";
    echo "<td>".$row["test_name"]."</td>";
    echo "<td>".$row["college_name"]."</td>";
    echo "<td>".$row["date"]."</td>";
    echo "<td>".$row["meet_link"]."</td>";
    echo "</tr>";
  }
  }
  ?>
  
  <!-- <tr>
      <td>GRE</td>
      <td>KJSCE</td>
      <td>19/06/2021</td>
      <td>https://meet.google.com/srp-qczd-nuc</td>
</tr> -->
 
</table>
</div>

