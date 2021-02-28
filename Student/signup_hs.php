<!DOCTYPE html>

<?php include('database_hs.php')  ?>

<html>
<head>
	<title>Sign Up | UG</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../resources/css/queries.css">
    <link rel="stylesheet" href="../vendors/css/normalize.css">
    <link rel="stylesheet" href="../vendors/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vendors/css/grid.css">
    <link rel="stylesheet" href="../resources/css/style_index.css">
    <style>
        input[type=text],[type=password],[type=tel],[type=Date]{
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

.error{
	color: red;
}

select{
    width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;



}
.align{
    margin-left: 40%;
    
}

    </style>
  
</head>
<body>

    <!-- HEADER AND NAVBAR -->
        <nav>
            <div class="row">
                <a href="index.php"><img src="../resources/img/logo-examiz.png" alt="Examiz Logo" class="logo"></a>
                <a href="index.php"><img src="../resources/img/logo-examiz.png" alt="Examiz Logo" class="logo-black"></a>

                <ul class="main-nav">
                <li><a href="#">About Us</a></li>
                   <?php
                        // if(count($_SESSION)>0)
                        // {
                            ?>
                            
                            <!-- <li><a href="logout.php">Logout</a></li>
                            <li><a href="myProfile.php"><i class="ion-ios-person-outline icon-small" style="color: #ddd;"></i><?php?></a></li>
                             -->
                            <?php
                        // }
                        // else
                        // {
                   ?>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <?php
                        //}
                    ?>

                </ul>
            </div>
        </nav>

    <div class="row">
            
            <h2 style="margin-top:6%;">Sign Up for High Schoolers</h2>
        </div>

    <!-- FEATURES SECTION  -->        
      
        <div class="row align" >
	<form action="signup_hs.php" method="POST">

<label for="fname"><strong>Name:</strong></label><br>
<input type="text" name="fname" id="fname" placeholder="John" autocomplete autofocus><br><br>
<?php
if(isset($_POST["fname"])){
?>
<span class="error">*<?php echo "$nameErr";?></span>
<br>
<?php
}
?>
<label for="roll"><strong>Roll Number:</strong></label><br>
<input type="text" name="roll" id="roll" placeholder="128" autocomplete><br><br>
<?php
if(isset($_POST["roll"])){
?>
<span class="error">*<?php echo "$rollErr";?></span>
<br>
<?php
}
?>

<label for="collegename"><strong>School Name:</strong></label><br>
<input type="text" name="collegename" id="collegename" placeholder="John" autocomplete autofocus><br><br>
<?php
if(isset($_POST["collegename"])){
?>
<span class="error">*<?php echo "$colnameErr";?></span>
<br>
<?php
}
?>
 <label for="year" class="label">Grade:</label><br>
                <select id="year" class="input" name="year">
                <option value="">Select Year</option>
                <option value="ele">11th</option>
                <option value="twe">12th</option>
                </select>
                <br>
                <?php if(isset($_POST["year"]))
                {
                    ?>
                <span class="error"><?php echo $yearErr;?> </span>
                <br>
                <?php
                }
                ?>
<br>
<br>


<label for="email"><strong>Email ID:</strong></label><br>
<input type="text" name="email" id="email" placeholder="rhutuja.t@gmail.com" autocomplete><br><br>
        <?php
if(isset($_POST["email"])){
?>
        <span class="error">*<?php echo "$mailErr";?></span>
<?php
}
?>
<br>
<label for="uname"><strong>Username:</strong></label><br>
<input type="text" name="uname" id="uname" placeholder="John23" autocomplete autofocus><br><br>
<?php
if(isset($_POST["uname"])){
?>
<span class="error">*<?php echo "$unameErr";?></span>
<br>
<?php
}
?>
<br>
<label for="psswd"><strong>Password:</strong></label><br>
<input type="password" name="password" id="psswd" ><br><br>
<?php
if(isset($_POST["password"])){
?>
<span class="error">*<?php echo "$psswdErr";?></span>
<?php
}
?>
<br>
<br>

<input type="Submit" name="submit" style="margin-bottom:5%;">

</form>
        </div>


    

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

