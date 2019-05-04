<?php

	function articles_all($link){
		$query = "SELECT * FROM articles ORDER BY id DESC";
		$result = mysqli_query($link, $query);
		
		if (!$result) {
			die(mysqli_error($link));
		}
		
		$n = mysqli_num_rows($result);
		$articles = array();
		
		
		for ($i = 0; $i < $n; $i++) {
			$row = mysqli_fetch_assoc($result);
			$articles[] = $row;
		}
		
		return $articles;
	}
	
	function articles_get($link, $id){
		$query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id);
		$result = mysqli_query($link, $query);
		
		if (!$result) {
			die(mysqli_error($link));
		}
		
		$article = mysqli_fetch_assoc($result);
		return $article;
	}
	
	function articles_create($link, $title, $content){
		$title = trim($title);
		$content = trim($content);
		
		if ($title == '')
			return false;
		
		$date = date("y-m-d");
		$query = sprintf("INSERT INTO articles (title, content, date) VALUES ('%s', '%s', '%s')", 
			mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $content), $date) ;
		
		$result = mysqli_query($link, $query);
		
		if (!$result)
			die(mysqli_error($link));
		
		return true;
	}
	
	function articles_delete($link, $id){
		$id = (int)$id;
		if ($id == 0)
			return false;
		
		$query = sprintf("DELETE FROM articles WHERE id=%d", $id);
		$result = mysqli_query($link, $query);
		
		if (!$result)
			die(mysqli_error($link));
	}

	function article_preview($content) {
		return substr($content, 0, 30)."...";
	}
?>