<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "hackerbash";

$db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if(!$db){
    die('Database Connection failed!');
}
if(isset($_POST['submit']))
{
    $errors = array();


// Registering users



    $dat=mysqli_escape_string($db, $_POST['date']);
    $link=mysqli_escape_string($db, $_POST['link']);
    $time=mysqli_escape_string($db, $_POST['time']);
    $id=$_POST['id'];

    $dateErr = $timeErr= $linkErr="";

    if (empty($dat))
{  
    $dateErr = "Date is required";  
    array_push($errors, $dateErr);
} 

if (empty($link))
{  
    $linkErr = "Link is required";  
    array_push($errors, $linkErr);
}

if (empty($time)) {  
   
    $timeErr = "Time is required";  
    array_push($errors, $timeErr);
} 

if(count($errors) == 0)
{
    
    $sql="UPDATE exam SET date = '$dat', meet_link= '$link', time= '$time' WHERE exam_id = '$id' ";
    $result = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
    header('Location: manage.php');
}
}
?>