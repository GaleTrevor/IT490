<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['username']) && isset($_POST['password']) && isset ($_POST['confirm_password'])) {
		if ($_POST['password'] !== $_POST['confirm_password']){
			$error = "Passwords do not match.";
		}else{
			$hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

			header('Location: login.html');
			exit();
		}
	}
}
