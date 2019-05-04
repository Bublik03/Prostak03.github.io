<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой новостной портал</title>
</head>
<body>
	<div class="container">
		<h1>Полная информация</h1>
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em>Published date: <?=$article['date']?></em>
				<p><?=$article['content']?></p>				
			</div>
		</div>
		<footer>
			<p>My first blog <br>
			Copyright &copy; 2019</p>
		</footer>
	<div>
</body>
</html>