<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой новостной портал</title>
	</head>
<body>
	<div class="container">
		<h1>My first blog</h1>
		<a href="admin">Панель администратора</a>
		<div>
			<?php foreach($articles as $a): ?>
				<div class="article">
					<h3><a href="article.php?id=<?=$a['id']?>">
					<?=$a['title']?></a></h3>
					<em>Published date: <?=$a['date']?></em>
					<p><?=article_preview($a['content'])?></p>	
				</div>
			<?php endforeach ?>
		</div>
		
		<footer>
			<p>My first blog <br>
			Copyright &copy; 2019</p>
		</footer>
	<div>
</body>
</html>