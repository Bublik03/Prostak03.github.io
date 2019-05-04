<?php
	require_once("../database.php");
	require_once("../models/articles.php");
	
	$link = db_connect();
	$articles = articles_all($link);
	
	if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";
    if($action == "add") {
        if(!empty($_POST)) {
            articles_create($link, $_POST['title'], $_POST['content']);
            header("Location: index.php");
        }
    } else if ($action == "delete") {
        $id = $_GET['id'];
        articles_delete($link, $id);
        header("Location: index.php");
    }

	include("../views/articles_admin.php");
?>