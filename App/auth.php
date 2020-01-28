<?php
session_start();

//require_once 'connect.php';

if(!isset($_SESSION["idusuario"]) || !isset($_SESSION["usuario"])){
	header('Location: ../login.php');
}else{
	$idusuario = $_SESSION['idusuario'];
	$usuario = $_SESSION['usuario'];
	$tipo = $_SESSION['tipo'];
	$foto = $_SESSION['foto'];
}