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
            <form action="/">
              <hr/>
              <div class="item">
                <p>Date</p>
                <input type="date" name="date" required/>
                
           
                <p>Year</p>          
               <select>
                    <option value=""></option>
                    <option value="1">FY</option>
                    <option value="2">SY</option>
                    <option value="3">TY</option>
                    <option value="4">LY</option>
      
                  </select>
              </div>
              <div class="item">
                <p>Branch</p>
                <input type="text" name="branch"/>
              
                <p>Subject</p>          
                <input type="text" name="subject" />
              </div>
      <div class="item">
                <p>Duration</p>          
                <input type="text" name="duration" />
              
                <p>Meet Link</p>          
                <input type="text" name="link" />
              </div>
            
             
             
              <div class="btn-block">
                <button type="submit" href="/">Create Exam</button>
              </div>
            </form>
          </div>
    </center>
  </div>

