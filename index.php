<?php
require_once 'App/auth.php';
if ($usuario && $tipo){
	header('Location: views/');
}else{
header('Location: login.php');
}
?>