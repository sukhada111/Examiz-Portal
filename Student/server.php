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

$sname = "";
$username = "";
$email = "";
$pwd = "";
$check = "";
$college = "";
$roll = "";
$year = "";
$sem = "";
$branch = "";
$type = "";

$errors = array();


// Registering users

if(isset($_POST['submit'])){
$sname = mysqli_real_escape_string($db, $_POST['sname']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$pwd = mysqli_real_escape_string($db, $_POST['pwd']);
$check = mysqli_real_escape_string($db, $_POST['check']);
$college = mysqli_real_escape_string($db, $_POST['college']);
$roll = mysqli_real_escape_string($db, $_POST['roll']);
$year = mysqli_real_escape_string($db, $_POST['year']);
$sem = mysqli_real_escape_string($db, $_POST['sem']);
$branch = mysqli_real_escape_string($db, $_POST['branch']);
$type = mysqli_real_escape_string($db, "student");

// Form Validation

$snameErr = $unameErr=$passErr=$emailErr=$addressErr=$checkErr=$existErr=$exist1Err=$collegeErr=$rollErr=$yearErr=$semErr=$branchErr="";
      
if (empty($sname))
{  
    $snameErr = "Name is required";  
    array_push($errors, $snameErr);
} 

if (empty($college))
{  
    $collegeErr = "College is required";  
    array_push($errors, $collegeErr);
} 

if (empty($roll))
{  
    $rollErr = "Roll number is required";  
    array_push($errors, $rollErr);
} 

if (empty($year))
{  
    $yearErr = "Year is required";  
    array_push($errors, $yearErr);
} 

if (empty($branch))
{  
    $unameErr = "Branch is required";  
    array_push($errors, $branchErr);
} 

if (empty($pwd)) {  
    $passErr = "Password is required";
    array_push($errors, $passErr);
}   
else {   
    // check if name only contains letters and whitespace  
    if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/",$pwd)) {  
        $passErr = "Password must contain atleast one number, one letter and should be 8-12 characters long!";  
        array_push($errors, $passErr);
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


if (empty($email)) {  
    $emailErr = "Email is required";  
    array_push($errors, $emailErr);
} 
else {    
    // check that the e-mail address is well-formed  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
        $emailErr = "Invalid email format";  
        array_push($errors, $emailErr);
} 
    
} 





// Check for existing users

$user_check_query = "SELECT * FROM student WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
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
    $sqlin = "INSERT into student (student_name, roll_no, college_name, year, semester, branch, e_mail, username, student_type) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($db);

    if(mysqli_stmt_prepare($stmt,$sqlin)){

        mysqli_stmt_bind_param($stmt, "sisssssss", $sname, $roll, $college, $year, $sem, $branch, $email, $username, $type);
        mysqli_stmt_execute($stmt);
        $_SESSION['username'] = $username;
    
        // Close statement
        mysqli_stmt_close($stmt);
    }

    $password = password_hash($pwd, PASSWORD_DEFAULT); // for encrypting password
    
    $sqlin = "INSERT into user (username, password, login_role) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($db);

    if(mysqli_stmt_prepare($stmt,$sqlin)){

        mysqli_stmt_bind_param($stmt, "sss", $username, $pwd, $type);
        mysqli_stmt_execute($stmt);
        $_SESSION['username'] = $username;
    
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($db);
    header("Location: http://localhost:8080/Online_grocery_mart/wp2_miniproj/project/signup.php");

}

}




?>