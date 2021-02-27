<?php include('server.php')  ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examiz</title>

    <link rel="stylesheet" href="resources/css/style_index.css">
    <link rel="stylesheet" href="resources/css/queries.css">
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/ionicons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/grid.css">
    <style>
        body{
            color: #cccccc;
        }
        
        *,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
    width:100%;
    margin:auto;
    max-width:525px;
    min-height:1550px;
    position:relative;
    font:600 16px/18px 'Open Sans',sans-serif;
    background:url(https://images.unsplash.com/photo-1537202108838-e7072bad1927?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1885&q=80) no-repeat center;
    box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
    width:100%;
    height:100%;
    position:absolute;
    padding:40px 70px 50px 70px;
    background:black;
;}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
    top:0;
    left:0;
    right:0;
    bottom:0;
    position:absolute;
    transform:rotateY(180deg);
    backface-visibility:hidden;
    transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
    display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
    text-transform:uppercase;
}
.login-html .tab{
    font-size:22px;
    margin-right:15px;
    padding-bottom:5px;
    margin:0 15px 10px 0;
    display:inline-block;
    border-bottom:2px solid transparent;
  
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
    color:#fff;
    border-color:#02a3de;
}
.login-form{
    min-height:345px;
    position:relative;
    perspective:1000px;
    transform-style:preserve-3d;
   
}
.login-form .group{
    margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
    width:100%;
    /* change */
    color:#999999;
    display:block;
}
.login-form .group input[type=text]
{
    color:white;
}
.login-form .group .button
{
    color:white;
}
.login-form .group .input,
.login-form .group .button{
    border:none;
    padding:15px 20px;
    border-radius:25px;
    background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
    text-security:circle;
    -webkit-text-security:circle;
}
.login-form .group .label{
    color:white;
    font-size:12px;
}
.login-form .group .button{
    background:#02a3de;
}
.login-form .group label .icon{
    width:15px;
    height:15px;
    border-radius:2px;
    position:relative;
    display:inline-block;
    background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
    content:'';
    width:10px;
    height:2px;
    background:#fff;
    position:absolute;
    transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
    left:3px;
    width:5px;
    bottom:6px;
    transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
    top:6px;
    right:0;
    transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
    color:#fff;
}
.login-form .group .check:checked + label .icon{
    background:#02a3de;
}
.login-form .group .check:checked + label .icon:before{
    transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
    transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
    transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
    transform:rotate(0);
}

.hr{
    height:2px;
    margin:60px 0 50px 0;
    background:rgba(255,255,255,.2);
}
.foot-lnk{
    text-align:center;
}
    </style>
  
</head>
<body>

    <!-- HEADER AND NAVBAR -->
    
    <section class="section-form">
    
        <div class="row">
        <div class="login-wrap">
        <div class="login-html">
        <form action="signup_stu.php" method="post">
        
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">UnderGrad</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">High School</label>
           
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                    <br>
                        <label for="sname" class="label">Name</label>
                        <input id="sname" type="text" class="input" name="sname">
                        <br>
                        <?php if(isset($_POST["sname"]))
                        {
                            ?>
                        <span class="error"><?php echo $snameErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="username" class="label">Username</label>
                        <input id="username" type="text" class="input" name="username">
                        <br>
                        <?php if(isset($_POST["username"]))
                        {
                            ?>
                        <span class="error"><?php echo $unameErr;?> </span>
                        <span class="error"><?php echo $existErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                        <label for="pwd" class="label">Password</label>
                        <input id="pass" name="pwd" type="password" class="input" data-type="password">
                        <br>
                        <?php if(isset($_POST["pwd"]))
                        {
                            ?>       
                        <span class="error"><?php echo $passErr; ?> </span>  
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                        <label for="check" class="label">Confirm password</label>
                        <input id="check" name="check" type="password" class="input" data-type="password">
                        <br>
                        <?php if(isset($_POST["check"]))
                        {
                            ?>       
                        <span class="error"><?php echo $checkErr; ?> </span>  
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="college" class="label">College</label>
                        <input id="college" type="text" class="input" name="college">
                        <br>
                        <?php if(isset($_POST["college"]))
                        {
                            ?>
                        <span class="error"><?php echo $collegeErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="roll" class="label">Roll Number</label>
                        <input id="roll" type="number" class="input" name="roll">
                        <br>
                        <?php if(isset($_POST["roll"]))
                        {
                            ?>
                        <span class="error"><?php echo $rollErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="year" class="label">Year</label>
                        <select id="year" class="input" name="year">
                        <option value="first">First Year</option>
                        <option value="second">Second Year</option>
                        <option value="third">Third Year</option>
                        <option value="last">Last Year</option>
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
                    </div>
                    <div class="group">
                    <br>
                        <label for="sem" class="label">Semester</label>
                        <select id="sem" class="input" name="sem">
                        <option value="">Select Semester</option>
                        <option value="one">Semester 1</option>
                        <option value="two">Semester 2</option>
                        <option value="three">Semester 3</option>
                        <option value="four">Semester 4</option>
                        <option value="five">Semester 5</option>
                        <option value="six">Semester 6</option>
                        <option value="seven">Semester 7</option>
                        <option value="eight">Semester 8</option>
                        </select>
                        <br>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="branch" class="label">Branch</label>
                        <select id="branch" class="input" name="branch">
                        <option value="">Select Branch</option>
                        <option value="it">IT</option>
                        <option value="cs">CS</option>
                        <option value="mech">MECH</option>
                        <option value="extc">EXTC</option>
                        <option value="etrx">ETRX</option>
                        </select>
                        <br>
                        <?php if(isset($_POST["branch"]))
                        {
                            ?>
                        <span class="error"><?php echo $branchErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="email" class="label">Email Address</label>
                        <input id="email" type="text" class="input" name="email">
                        <br>
                        <?php if(isset($_POST["email"]))
                        {
                            ?>
                        <span class="error"><?php echo $emailErr;?> </span>
                        <span class="error"><?php echo $exist1Err;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <br>
                    <div class="group">
                        <input id="check" name="agree" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Agree to Terms and Conditions</label>
                    <br>
                     
                    </div>
                    <div class="group">
                        <input type="submit" name="submit" class="button" value="Sign Up">
                    </div>
                    
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="login_form.php"><h5>Already member?</h5></a>
                    </div>

                </div>
               
                <div class="sign-up-htm">
                    <br><br>
                    <div class="group">
                    <br>
                        <label for="sname" class="label">Name</label>
                        <input id="sname" type="text" class="input" name="sname">
                        <br>
                        <?php if(isset($_POST["sname"]))
                        {
                            ?>
                        <span class="error"><?php echo $snameErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="username" class="label">Username</label>
                        <input id="username" type="text" class="input" name="username">
                        <br>
                        <?php if(isset($_POST["username"]))
                        {
                            ?>
                        <span class="error"><?php echo $unameErr;?> </span>
                        <span class="error"><?php echo $existErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                        <label for="pwd" class="label">Password</label>
                        <input id="pass" name="pwd" type="password" class="input" data-type="password">
                        <br>
                        <?php if(isset($_POST["pwd"]))
                        {
                            ?>       
                        <span class="error"><?php echo $passErr; ?> </span>  
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                        <label for="check" class="label">Confirm password</label>
                        <input id="check" name="check" type="password" class="input" data-type="password">
                        <br>
                        <?php if(isset($_POST["check"]))
                        {
                            ?>       
                        <span class="error"><?php echo $checkErr; ?> </span>  
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="college" class="label">School</label>
                        <input id="college" type="text" class="input" name="college">
                        <br>
                        <?php if(isset($_POST["college"]))
                        {
                            ?>
                        <span class="error"><?php echo $schoolErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="roll" class="label">Roll Number</label>
                        <input id="roll" type="number" class="input" name="roll">
                        <br>
                        <?php if(isset($_POST["roll"]))
                        {
                            ?>
                        <span class="error"><?php echo $rollErr;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <div class="group">
                    <br>
                        <label for="year" class="label">Grade</label>
                        <select id="year" class="input" name="year">
                        <option value="ele">11</option>
                        <option value="twe">12</option>
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
                    </div>
                    <div class="group">
                    <br>
                        <label for="email" class="label">Email Address</label>
                        <input id="email" type="text" class="input" name="email">
                        <br>
                        <?php if(isset($_POST["email"]))
                        {
                            ?>
                        <span class="error"><?php echo $emailErr;?> </span>
                        <span class="error"><?php echo $exist1Err;?> </span>
                        <br>
                        <?php
                        }
                        ?>
                    <br>
                    </div>
                    <br>
                    <div class="group">
                        <input id="check" name="agree" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Agree to Terms and Conditions</label>
                    <br>
                     
                    </div>
                    <div class="group">
                        <input type="submit" name="submit" class="button" value="Sign Up">
                    </div>

                    </div>
            </div>
            
        </div>
      
        </div>
        
    </div> 
    
        </div>
        </form>
      
    </section>

   

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