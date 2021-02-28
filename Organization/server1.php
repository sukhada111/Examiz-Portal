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
$date = $_POST['date'];
$clgname=$_POST['clgname'];
$year = $_POST['year'];
$branch = $_POST['branch'];
$subject= $_POST['subject'];
$semester=$_POST['semester'];
$duration =$_POST['duration'];
$marks=$_POST['marks'];
$medium=$_POST['medium'];
$link=$_POST['link'];
$time=$_POST['time'];

$type = "organization";

// Form Validation

$dateErr = $timeErr= $clgnameErr = $yearErr = $branchErr= $subjectErr= $semesterErr= $durationErr= $marksErr = $mediumErr= $linkErr="";
      
if (empty($date))
{  
    $dateErr = "Date is required";  
    array_push($errors, $dateErr);
} 

if (empty($clgname))
{  
    $dateErr = "College Name is required";  
    array_push($errors, $clgnameErr);
} 

if (empty($year))
{  
    $yearErr = "Year is required";  
    array_push($errors, $yearErr);
} 

if (empty($branch))
{  
    
    $branchErr = "Branch is required";  
    array_push($errors, $branchErr);
} 


if (empty($subject)) { 
    
    $subjectErr = "Subject is required";
    array_push($errors, $subjectErr);
}

if (empty($semester)) { 
    
    $semesterErr = "Semester is required";
    array_push($errors, $semesterErr);
}

if (empty($marks))
{  
    $marksErr = "Marks is required";  
    array_push($errors, $marksErr);
}    

if (empty($link))
{  
    $linkErr = "Link is required";  
    array_push($errors, $linkErr);
}
if (empty($medium))
{  
    $mediumErr = "Medium is required";  
    array_push($errors, $mediumErr);
}      

if (empty($time)) {  
   
    $timeErr = "Time is required";  
    array_push($errors, $timeErr);
} 


if (empty($duration)) {  
   
    $durationErr = "Duration is required";  
    array_push($errors, $durationErr);
} 

      
} 







if(isset($_POST['submit'])){
if(count($errors) == 0)
{
     $username=$_SESSION['username'] ;
    
    $sqlin = "INSERT into exam (subject, college_name, semester, year, branch, date, duration, marks, medium, meet_link, username, time) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($db);

    if(mysqli_stmt_prepare($stmt,$sqlin)){

        mysqli_stmt_bind_param($stmt,"ssisssiissss" , $subject, $clgname, $semester, $year, $branch, $date, $duration, $marks, $medium, $link, $username, $time);
        mysqli_stmt_execute($stmt);
        
        
    
        // Close statement
        mysqli_stmt_close($stmt);
        header("Location: orgprofile.php");

    }

    

  // Close connection
    mysqli_close($db);

}
}





?>