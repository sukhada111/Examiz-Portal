<?php
session_start();
?>
<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "hackerbash";

$db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if(!$db){
    die('Database Connection failed!');
}
$uname="";
$pwd="";
$errors = array();

// Login Part
	if (isset($_POST['login'])) {
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
    $unameErr = $passErr = $wrongErr = $notexistErr = "";
    
  
    if (empty($uname)) {
        $unameErr = "Username is required";
        array_push($errors, $unameErr);
    }
    if (empty($pwd)) {
        $passErr = "Password is required";
        array_push($errors, $passErr);
    }
  
    if (count($errors) == 0) {
        $query = "SELECT * FROM user WHERE username = '$uname'";  
        $result = mysqli_query($db, $query);  
        if(mysqli_num_rows($result) > 0)  
        {  
             while($row = mysqli_fetch_array($result))  
             {  
                  if(password_verify($pwd, $row["password"]))  
                  {  
                    $_SESSION['username'] = $uname;
                    $_SESSION['success'] = "You are now logged in";
                    header('Location: index.php'); 
                  }  
                  else  
                  {  
                    $wrongErr = "Wrong username/password combination";
                    array_push($errors, $wrongErr);
                  }  
             }  
        }  
        else  
        {  
             $wrongErr = "User does not exist! Sign Up for more...";
             array_push($errors, $notexistErr);
        }  
   } 
	}

    ?>