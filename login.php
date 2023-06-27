<?php 
session_start(); 
include "conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: form.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: form.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id_user'] = $row['id_user'];
            	header("Location: dashboard/admin/index.php");
		        exit();
            }else{
				header("Location: form.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: form.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: form.php");
	exit();
}