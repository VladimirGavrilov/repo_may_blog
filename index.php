<?php
	require_once("database.php");
	require_once("models/articles.php");
	
	$articles = articles_all();
	
	require_once("views/articles_view.php");
    
	 
?>
