<?php

	function articles_all(){
		$arc1 = ["id"=>1, "title"=>"Title1", "date"=>"2015-01-01", "content"=>"content1"];
		$arc2 = ["id"=>2, "title"=>"Title2", "date"=>"2015-02-01", "content"=>"content2"];
		
		$arr[0] = $arc1;
		$arr[1] = $arc2;

		return $arr;
	}
	function articles_get($id){
		return ["id"=>$id, "title"=>"Просто заголовок", "date"=>"25-01-01", "content"=>"Здесь статья"];
	}
	function articles_edit($id, $title, $date, $content){
		
	}
	function articles_new($title, $date, $content){
		
	}
	function articles_del($id) {
		
	}
	
?>
