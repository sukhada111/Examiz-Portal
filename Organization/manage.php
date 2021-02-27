<?php
include('header.php');
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
          <li>Logout <i class="fas fa-user"></i>
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
                 <p class="profile_name">Jay Khatri</p>
              </div>
            </div>
            <ul>
            <li>
                <a href="profile.php" >
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
  <tr>
      <td>GRE</td>
      <td>KJSCE</td>
      <td>19/06/2021</td>
      <td><i class="fa fa-edit"></i></td>
</tr>
 
</table>
</div>

