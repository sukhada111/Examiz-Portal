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
$fname="";
$roll="";
$mail="";
$col="";
$year="";
$branch="";
$sem="";
$uname="";
$psswd="";
$type="";


	$nameErr = "";
	$mailErr="";
	$psswdErr="";
    $rollErr="";
    $colnameErr="";
    $yearErr="";
    $branchErr="";
    $semErr="";
    $unameErr="";

	$errors = array();


	if (isset($_POST["fname"])) {
		if (empty($_POST["fname"])) {
		  $nameErr = "Name is required";
		  array_push($errors,$nameErr);
		} 
		else if(!preg_match("/^[a-zA-Z' ]*$/",$_POST["fname"])){
			$nameErr ="Should have only alphabetic characters";
			array_push($errors,$nameErr);
		  }
		else {
		  $fname =$_POST["fname"];
		}
	}

    if (isset($_POST["roll"])) {
		if (empty($_POST["roll"])) {
		  $rollErr = "Roll Number is required";
		  array_push($errors,$rollErr);
		} 
        else {
            $roll =$_POST["roll"];
          }
    }

	if(isset($_POST["email"])){
		if (empty($_POST["email"])) {
			$mailErr = "Email ID is required";
			array_push($errors,$mailErr);

		  } 
		else if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
			$mailErr ="Invalid Email Format";
			array_push($errors,$mailErr);
			  
		  }
		else {
			$mail = $_POST["email"];
		  }
	}

    if (isset($_POST["collegename"])) {
		if (empty($_POST["collegename"])) {
		  $colnameErr = "College Name is required";
		  array_push($errors,$colnameErr);
		} 
        else {
            $col =$_POST["collegename"];
          }
    }

    if (isset($_POST["year"])) {
		if (empty($_POST["year"])) {
		  $yearErr = "Grade is required";
		  array_push($errors,$yearErr);
		} 
        else {
            $year=$_POST["year"];
          }
    }

    
    if (isset($_POST["uname"])) {
		if (empty($_POST["uname"])) {
		  $unameErr = "Username is required";
		  array_push($errors,$unameErr);
		} 
        else {
            $uname =$_POST["uname"];
          }
    }

	if(isset($_POST["password"])){
		if (empty($_POST["password"])) {
			$psswdErr = "Password is required";
			array_push($errors,$psswdErr);
		  } 
		else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).*$/",$_POST["password"])){
			$psswdErr ="Password should have atleast one Uppercase one lowercase and one special character";
			  array_push($errors,$psswdErr);
		  }
		else {
			$psswd = $_POST["password"];
		  }
	}
    $type="student";
    $stud="hs";

	
	if(isset($_POST["submit"])){
	if(count($errors)==0){
		
	$password = password_hash($psswd, PASSWORD_DEFAULT); // for encrypting password

    $sqlin = "INSERT into student(student_name, roll_no,college_name,year,semester,branch, e_mail,username,student_type) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($db);

    if(mysqli_stmt_prepare($stmt,$sqlin)){
        mysqli_stmt_bind_param($stmt, "sssssssss",$fname,$roll,$col,$year,$sem,$branch,$mail,$uname,$stud);
        mysqli_stmt_execute($stmt);
    
        // Close statement
        mysqli_stmt_close($stmt);
	}
	    

      
//user table
$sqlin = "INSERT into user(username, password,login_role) VALUES (?,?,?)";
// $result = mysqli_query($db, $sqlin) or die("database error:". mysqli_error($db));
$stmt = mysqli_stmt_init($db);

if(mysqli_stmt_prepare($stmt,$sqlin)){
	mysqli_stmt_bind_param($stmt, "sss",$uname,$password,$type);
	mysqli_stmt_execute($stmt);

	// Close statement
	mysqli_stmt_close($stmt);
}
		$_SESSION['username'] = $uname;
		$_SESSION['success'] = "You are now logged in";
		header("Location: ../index.php");
		
	}
	}
	
	