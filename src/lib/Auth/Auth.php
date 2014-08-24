<?php

namespace Auth;

Class Auth {
	
}

session_start();

if(!isset($_SESSION['id'])) {

	header('Location: ' . WEBROOT . 'login.php');
}

?>