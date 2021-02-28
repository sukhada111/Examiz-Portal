<?php include('server1.php') ;
session_start();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
include('header.php');
?>
<style>
      
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input, select, textarea {
      width: 100%;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input:hover, textarea:hover, select:hover {
      outline: none;
      border: 1px solid #095484;
      }
      select {
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      margin-bottom: 3px;
      }
      .item {
      position: relative;
      display: flex;
      flex-direction: column;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      
      .item i {
      left: 94%;
      top: 30px;
     z-index: 1;
      }
 
      
      
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #1abc9c;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #3498db;
      }
      @media (min-width: 568px) {
      input {
      width: calc(35% - 20px);
      margin: 0 0 0 8px;
      }
      select {
      width: calc(50% - 8px);
      margin: 0 0 10px 8px;
      }
      .item {
      flex-direction: row;
      align-items: center;
      }
      .item p {
      width: 30%;
      }
      .item i {
      left: 61%;
      top: 25%;
      }
      
      
      textarea {
      width: calc(100% - 6px);
      }
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
                <a href="create.php" class="active">
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
              <a href="manage.php" >
                  <span class="icon"><i class="fas fa-id-card"></i></span>
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

<div class="container" >
        <center>
          <h1>Create Exam</h1>
          <div class="testbox">
            <form action="server1.php" method="post">
              <hr/>
              <div class="item">
                <p>Date</p>
                <input id="date" type="date" name="date" required/>
                <?php if(isset($_POST["date"]))
                {
                  ?>
                  <span class="error"><?php echo $dateErr;?></span>
                  <?php
                }
                ?>

                <p>College Name</p>
                <input id="clgname" type="text" name="clgname" required/>
                <?php if(isset($_POST["clgname"]))
                {
                  ?>
                  <span class="error"><?php echo $clgnameErr;?></span>
                  <?php
                }
                ?>
              </div>
                
              <div class="item">
                <p>Year</p>          
               <select id="year" type="text" name="year">
                    <option value=""></option>
                    <option value="1">FY</option>
                    <option value="2">SY</option>
                    <option value="3">TY</option>
                    <option value="4">LY</option>
      
                  </select>
                  <?php if(isset($_POST["year"]))
                {
                  ?>
                  <span class="error"><?php echo $yearErr;?></span>
                  <?php
                }
                ?>

                <p>Time</p>
                <input id="time" type="time" name="time"/>
                <?php if(isset($_POST["time"]))
                {
                  ?>
                  <span class="error"><?php echo $timeErr;?></span>
                  <?php
                }
                ?>
              
              
                <p>Branch</p>
                <input id="branch" type="text" name="branch"/>
                <?php if(isset($_POST["branch"]))
                {
                  ?>
                  <span class="error"><?php echo $branchErr;?></span>
                  <?php
                }
                ?>
                </div>

                <div class="item">
                <p>Subject</p>          
                <input id="subject" type="text" name="subject" />
                <?php if(isset($_POST["subject"]))
                {
                  ?>
                  <span class="error"><?php echo $subjectErr;?></span>
                  <?php
                }
                ?>

                <p>Semester</p>          
                <input id="semester" type="text" name="semester" />
                <?php if(isset($_POST["semester"]))
                {
                  ?>
                  <span class="error"><?php echo $semesterErr;?></span>
                  <?php
                }
                ?>
    </div>
              
      <div class="item">
                <p>Duration</p>          
                <input id="duration" type="text" name="duration" />
                <?php if(isset($_POST["duration"]))
                {
                  ?>
                  <span class="error"><?php echo $durationErr;?></span>
                  <?php
                }
                ?>

                <p>Marks</p>          
                <input id="marks" type="text" name="marks" />
                <?php if(isset($_POST["marks"]))
                {
                  ?>
                  <span class="error"><?php echo $marksErr;?></span>
                  <?php
                }
                ?>
                </div>

                <div class="item">
                <p>Medium</p>          
                <input id="medium" type="text" name="medium" />
                <?php if(isset($_POST["medium"]))
                {
                  ?>
                  <span class="error"><?php echo $mediumErr;?></span>
                  <?php
                }
                ?>
              
                <p>Meet Link</p>          
                <input id="link" type="text" name="link" />
                <?php if(isset($_POST["link"]))
                {
                  ?>
                  <span class="error"><?php echo $linkErr;?></span>
                  <?php
                }
                ?>
              </div>
            
             
             
              <div class="btn-block">
                <button name="submit" type="submit" href="/">Create Exam</button>
              </div>
            </form>
          </div>
              
    </center>
  </div>

