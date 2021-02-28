<?php
//new index file
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examiz | Smart Exam Portal </title>

    
    <link rel="stylesheet" href="resources/css/queries.css">
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/grid.css">
    <link rel="stylesheet" href="resources/css/style_index.css">
    
  <style>
      button{
        display: inline-block;
    padding: 10px 30px;
    font-weight: 300;
    text-decoration: none;
    border-radius: 200px;
    transition: background-color 0.2s, border 0.2s, color 0.2s;
    background-color: #3498db;
    border: 1px solid #3498db;
    color: #fff;
    margin-right: 15px;
      }

      
      .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropbtn {
  background-color: #1abc9c;
}
  </style>
</head>
<body>

    <!-- HEADER AND NAVBAR -->
    <header>

    <nav>
            <div class="row">
                <a href="index.php"><img src="resources/img/logo-examiz.png" alt="Examiz Logo" class="logo"></a>
                <a href="index.php"><img src="resources/img/logo-examiz.png" alt="Examiz Logo" class="logo-black"></a>

                <ul class="main-nav">
                <li><a href="aboutUs.php">About Us</a></li>
                   <?php
                        if(count($_SESSION)>0)
                        {
                            ?>
                            
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="myProfile.php"><i class="ion-ios-person-outline icon-small" style="color: #333;"></i><?php echo $_SESSION['username'];?></a></li>
                            
                            <?php
                        }
                        else
                        {
                   ?>
                    <li><a href="login.php">Login</a></li>
                    <?php
                        }
                    ?>
                 


                </ul>
            </div>
        </nav>


        <div class="hero-text-box">
            <div class="left">
            <h1>One stop Destination<br>
            for all your Exams</h1>
            <?php
                        if(count($_SESSION)>0)
                        {
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "hackerbash";
                            $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
                            $uname=$_SESSION['username'];
                            $sql="SELECT * FROM user WHERE username='$uname'";
                            $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                            $record = mysqli_fetch_array($result);
                            if($record['login_role']=='student')
                            {
                            ?>
                            <a class="btn btn-ghost" href="Student/profile.php">Go to Dashboard</a>
                            <?php
                            }
                            else{
                            ?>
                        <a class="btn btn-ghost" href="Organization/orgprofile.php">Go to Dashboard</a>

                            <?php
                            }
                            ?>
                            <?php
                        }
                        else
                        {
                   ?>
                   <div class="dropdown">
                    <button class="dropbtn">Sign Up as Student</button>
                    <div class="dropdown-content">
                    <a href="Student/signup_hs.php">High School</a>
                    <a href="Student/signup_ug.php">Undergraduate</a>
                    </div>
                    </div>
                <a class="btn btn-ghost" href="Organization/orgsignup.php">Sign Up as Organization</a>
                    <?php
                        }
                    ?>
            
            </div>
        </div>
        <img src="resources/img/headbg.jpg" alt="" class="right">

    </header>
    <!-- FEATURES SECTION  -->
<section class="features js--section-features js--wp-1">
        
        <div class="row">

<?php

if(count($_SESSION)>0)
                        {
                            ?>
                            <h2>Welcome <?php echo $_SESSION['username'];?> !</h2>
                            <br>
                            
                            <?php if(isset($_SESSION['pass_msg']))
                            {
                                ?>
                            <?php

                        }
                    }
                        ?>
            
            <h2>Our Salient Features</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3 box">
            <img src="resources/img/notification.png" alt="" class="icon-small" style="padding-bottom:10px; color:#eee;">
                <h3>Get Regular Exam Updates</h3>
                <p>
                Lets students subscribe to tests so that they can see it on their feeds in order to stay updated and be regularly notified about upcoming tests
                </p>
            
            </div>

            <div class="col span-1-of-3 box">
                <img src="resources/img/checklists.png" alt="" class="icon-small" style="padding-bottom:10px;">
                <h3>Float Exam Notices</h3>
                <p>
                Educational institutions can create and deliver tests online so students can select tests ideal for them, at their convenience, all at the same place 
                </p>
            
            </div>

            <div class="col span-1-of-3 box">
            <img src="resources/img/exam.png" alt="" class="icon-small" style="padding-bottom:10px;">
                <h3>Test Preparation</h3>
                <p>
                Free online course links provided to help students ace their tests and pass with flying colours

                </p>
            
            </div>

           
        </div>

    </section>

    

    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Sign Up as Student</a></li>
                    <li><a href="#">Sign Up as Organization</a></li>


                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                Copyright &copy; 2021 by Examiz. All rights reserved.
            </p>
        </div>
    </footer>

 

<!-- Js plugins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="resources/Js/script.js"></script>



</body>

</html>

