<?php

	function articles_all($link){
		 
		//Запрос к базе
		$query = "SELECT * FROM articles ORDER BY id DESC";		 
		$result = mysqli_query($link, $query);
 		 
		if(!$result) die(mysqli_error($link));
		//извление из бд
		$n = mysqli_num_rows($result);
		
		$articles = array();
		
		for($i = 0; $i < $n; $i++) {
			$row = mysqli_fetch_assoc($result);
			
			$articles[] = $row;
		
		}
		 return $articles;
	}
	function articles_get($link, $id_article){
		//Запрос к базе
		$query = "SELECT * FROM articles WHERE  id = $id_article ";		 
		$result = mysqli_query($link, $query);
 		 
		if(!$result) die(mysqli_error($link));
		//извление из бд
		$n = mysqli_num_rows($result);
		
		$article = array();
		
		for($i = 0; $i < $n; $i++) {
			$row = mysqli_fetch_assoc($result);
			
			$article = $row;
		
		}
		 return $article;
		
		
		
		
		
	}
	function articles_edit($id, $title, $date, $content){
		
	}
	function articles_new($title, $date, $content){
		
	}
	function articles_del($id) {
		
	}
	
?>
