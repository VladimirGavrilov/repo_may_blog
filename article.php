<?php
	require_once("datebase.php");
	require_once("models/articles.php");
	
	$articles = articles_get($_GET['id']);
 
	
	require_once("views/article.php");
	 
?>