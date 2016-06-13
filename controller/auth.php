<?php

session_start();

if(isset($_POST['submitSignUp']))
{
	signUp();
}

if(isset($_POST['submitSignIn']))
{
	signIn();
}

function signUp()
{
	require 'connect.php';
		
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	
	if (!($stmt = $mysqli->prepare("INSERT INTO users(username,password,email) VALUES ('".$username."','".$password."','".$email."')"))) 
	{
		echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	if (!$stmt->execute()) 
	{
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['logged'] = true;
		
	$mysqli->close();
	
	header("Location: ../index.php");
}

function signIn()
{
	require 'connect.php';
		
	$email = $mysqli->real_escape_string($_POST['email']);
	$password = $_POST['password'];
	
	if(!($res = $mysqli->query("SELECT id, username, password FROM users WHERE email = '$email'")))
	{
		 echo "Query failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}		
	
	if($row = $res->fetch_assoc())
	{	
		if($password === $row['password'])
		{
			echo "ok";
			$_SESSION['userid'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['logged'] = true;
			header("Location: ../home.php");
		}
		else
		{
			echo "blad";
		}		
		$mysqli->close();
	}
}
?>