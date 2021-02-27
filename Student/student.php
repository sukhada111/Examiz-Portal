<!-- IGNORE -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Examiz</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
</head>
<body>

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
      <div class="logo">
        Examiz
      </div>
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
                 <p class="profile_name">Alex John</p>
              </div>
            </div>
            <ul>
              <li>
                <a href="profile.php" class="active">
                  <span class="icon"><i class="fas fa-id-card"></i></span>
                  <span class="title">My Profile</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-graduation-cap"></i></span>
                  <span class="title">Exam Dashboard</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-bell"></i></span>
                  <span class="title">Subscribed exams</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-chart-pie"></i></span>
                  <span class="title">Competitive exams</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-book"></i></span>
                  <span class="title">Test Prep</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <!-- <div class="container">
       
      </div> -->
  </div>
  
</div>	

</body>
</html>