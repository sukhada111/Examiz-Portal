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
    
  
</head>
<body>

    <!-- HEADER AND NAVBAR -->
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



    <div class="row">
            
            <h2 style="margin-top:6%;">About Us</h2>
        </div>
        <img src="resources/img/aboutUs.jpg" alt="" style="width: 45%;height:520px;  padding-top:1%; margin-left:30%">

    <!-- FEATURES SECTION  -->        
      
        <div class="row">
            <p class="long-copy">
                Welcome to Examiz, a Smart Exam Portal, the all-in-one portal for students for the centralization of all exam related activity.
                Educational institutions can float and update test forms which can be further viewed by students of the respective organization. 
                Students can access test links, get alerts and notifications and view test preparation resources online. <br>
                This online portal permits students to subscribe to the tests they would like to attend in the near future so as to be
                notified about the subscribed tests via email. Students can also use the material available in the Test Prep section to
                prepare themselves for the tests and pass with flying colours.<br><br>
                Happy learning!<br><br><br>
            </p>
        
        </div>


    

        <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="aboutUs.php">About us</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>


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

