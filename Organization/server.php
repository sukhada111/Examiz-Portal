<?php
//starting session
session_start();

// Connect to db

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "hackerbash";

$db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if(!$db){
    die('Database Connection failed!');
}

// Initialising variables


$clgname = "";
$username = "";
$location = "";


$errors = array();


// Registering users

if(isset($_POST['submit'])){
$clgname = $_POST['clgname'];
$username = $_POST['username'];
$location = $_POST['location'];
$pwd= $_POST['pwd'];
$check =$_POST['check'];
$type = "organization";

// Form Validation

$clgnameErr = $usernameErr = $pwdErr= $checkErr= $locationErr="";
      
if (empty($clgname))
{  
    $snameErr = "College Name is required";  
    array_push($errors, $clgnameErr);
} 

if (empty($username))
{  
    $usernameErr = "Username is required";  
    array_push($errors, $usernameErr);
} 

if (empty($location))
{  
    
    $locationErr = "Location is required";  
    array_push($errors, $locationErr);
} 


if (empty($pwd)) { 
    
    $passErr = "Password is required";
    array_push($errors, $pwdErr);
}   
else {   
    // check if name only contains letters and whitespace  
    if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/",$pwd)) {
         
        $passErr = "Password must contain atleast one number, one letter and should be 8-12 characters long!";  
        array_push($errors, $pwdErr);
} 
    
} 


if (empty($check)) {  
   
    $checkErr = "Please confirm password";  
    array_push($errors, $checkErr);
} 
else { 
    // check if name only contains letters and whitespace  
    if ($check != $pwd) {
         
        $checkErr = "Passwords should match!";  
        array_push($errors, $checkErr);
} 
      
} 






// Check for existing users

// $user_check_query = "SELECT * FROM student WHERE username = $username or email = $email LIMIT 1";

// $results = mysqli_query($db, $user_check_query);
// $student = mysqli_fetch_assoc($results);

// if($student){
//     if($student['username'] === $username)
//     {
//         $existErr = "Username already exists";  
//         array_push($errors, $existErr);
//     }

//     if($student['email'] === $email)
//     {
//         $exist1Err = "This email id already has a registered username";  
//         array_push($errors, $exist1Err);
//     }
// }

// Register new user if no error

if(count($errors) == 0)
{
    
    $sqlin = "INSERT into organization (college_name, location, username) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($db);

    if(mysqli_stmt_prepare($stmt,$sqlin)){

        mysqli_stmt_bind_param($stmt,"sss" , $clgname, $location, $username);
        mysqli_stmt_execute($stmt);
        $_SESSION['username'] = $username;
    
        // Close statement
        mysqli_stmt_close($stmt);
    }

    $sqlin = "INSERT into user (username, password, login_role) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($db);

    if(mysqli_stmt_prepare($stmt,$sqlin)){

        $password = password_hash($pwd, PASSWORD_DEFAULT); // for encrypting password
        mysqli_stmt_bind_param($stmt,"sss" , $username, $password, $type);
        mysqli_stmt_execute($stmt);
        $_SESSION['username'] = $username;
    
        // Close statement
        mysqli_stmt_close($stmt);
    }




    
    // Close connection
    mysqli_close($db);
    
    header("Location:../index.php");

}

}




?>