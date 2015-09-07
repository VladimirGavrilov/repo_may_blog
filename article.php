<?php
	require_once("database.php");
	require_once("models/articles.php");
	echo $_GET['id'];	
	$articles = articles_get($_GET['id']);
	//подключаем вид	
	require_once("views/article_view.php");
	
?>
