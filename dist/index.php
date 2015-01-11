<?php

$page = $_GET['page'];

$data = array();

switch ($page) {
	case 'admin':
		$title = "Авторизация";
		require "admin.php";
		break;
	
	case 'works':
		$title = "Мои работы";
		require "portfolio.php";
		break;
	
	case 'contacts':
		$title = "Мои контакты";
		require "contact.php";
		break;
	
	default:
		$title = "Обо мне";
		$page = 'about';
		require "about.php";
		break;
}