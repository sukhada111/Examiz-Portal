<?php
session_start();
?>
<?php
include('header.php');
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
      <a href="../index.php"><img src="../resources/img/logo-examiz.png" alt="Examiz Logo" class="logo" style="height:80px;width:auto;"></a>

      <div class="right_menu">
        <ul>
          <li>Logout <i class="fa fa-user"></i></li>
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
                <a href="profile.php">
                  <span class="icon"><i class="fas fa-id-card"></i></span>
                  <span class="title">My Profile</span>
                </a>
              </li>
              <li>
                <a href="examdash.php">
                  <span class="icon"><i class="fas fa-graduation-cap"></i></span>
                  <span class="title">Exam Dashboard</span>
                </a>
              </li>
              <li>
                <a href="subscribed.php">
                  <span class="icon"><i class="fas fa-bell"></i></span>
                  <span class="title">Subscribed exams</span>
                </a>
              </li>
              <li>
                <a href="compet.php">
                  <span class="icon"><i class="fas fa-chart-pie"></i></span>
                  <span class="title">Competitive exams</span>
                </a>
              </li>
              <li>
                <a href="testprep.php">
                  <span class="icon"><i class="fas fa-book"></i></span>
                  <span class="title">Test Prep</span>
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

