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

    if (isset($_POST["collegefname"])) {
		if (empty($_POST["collegefname"])) {
		  $colnameErr = "College Name is required";
		  array_push($errors,$colnameErr);
		} 
        else {
            $col =$_POST["collegefname"];
          }
    }

    if (isset($_POST["year"])) {
		if (empty($_POST["year"])) {
		  $yearErr = "Year is required";
		  array_push($errors,$yearErr);
		} 
        else {
            $year=$_POST["year"];
          }
    }

    if (isset($_POST["branch"])) {
		if (empty($_POST["branch"])) {
		  $branchErr = "Branch is required";
		  array_push($errors,$branchErr);
		} 
        else {
            $branch=$_POST["branch"];
          }
    }

    if (isset($_POST["sem"])) {
		if (empty($_POST["sem"])) {
		  $semErr = "Semester is required";
		  array_push($errors,$semErr);
		} 
        else {
            $sem=$_POST["sem"];
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

	
	if(isset($_POST["submit"])){
	if(count($errors)==0){
		
	$password = password_hash($psswd, PASSWORD_DEFAULT); // for encrypting password

    $sqlin = "INSERT into student(student_name, roll_no,college_name,year,semester,branch, e_mail,username,student_type) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($db);

    if(mysqli_stmt_prepare($stmt,$sqlin)){
        mysqli_stmt_bind_param($stmt, "sssssssss",$fname,$roll,$col,$year,$sem,$branch,$mail,$uname,$type);
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
	
		header("Location: ../index.php");
		
	}
	}
	
	//Login Part
// 	if (isset($_POST['login'])) {
//     $email = mysqli_real_escape_string($db, $_POST['email']);
//     $pwd = mysqli_real_escape_string($db, $_POST['password']);

//     $unameErr = $passErr = $wrongErr = $notexistErr = "";
  
//     if (empty($email)) {
//         $mailErr = "Email ID is required";
//         array_push($errors, $mailErr);
//     }
//     if (empty($pwd)) {
//         $passErr = "Password is required";
//         array_push($errors, $passErr);
//     }
  
//     if (count($errors) == 0) {
//         $query = "SELECT * FROM student_data WHERE email = '$email'";  
//         $result = mysqli_query($db, $query);  
//         if(mysqli_num_rows($result) > 0)  
//         {  
//              while($row = mysqli_fetch_array($result))  
//              {  
//                   if(password_verify($pwd, $row["psswd"]))  
//                   {  
//                     header('Location: login.php?LoginSuccess'); 
//                   }  
//                   else  
//                   {  
//                     $wrongErr = "Wrong username/password combination";
//                     array_push($errors, $wrongErr);
//                   }  
//              }  
//         }  
//         else  
//         {  
//              $wrongErr = "User does not exist! Sign Up for more...";
//              array_push($errors, $notexistErr);
//         }  
//    } 
// 	}
  
	
?>