<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Панель администратора</title>
	</head>
<body>
	<h1>Панель Администратора</h1>
	<br>
    <div>
        <form method="POST" action="index.php?action=add">
            <input type="text" name="title" value="" placeholder="Название статьи"><br>
            <textarea name="content" cols="30" rows="5"></textarea><br>
            <input type="submit" value="Добавить"><br>
        </form>
    </div>
    <br>
	<div class="container">
		<div>
			<table border="1">
				<tr>
					<th>ID</th>
					<th>Дата</th>
					<th>Заголовок</th>
					<th></th>
					<th></th>
				<tr>
				<?php foreach($articles as $a): ?>
					<tr>
						<td><?=$a['id']?></td>
						<td><?=$a['date']?></td>
						<td><?=$a['title']?></td>
						<td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
					<tr>
				<?php endforeach ?>
			</table>
		</div>
		
		<footer>
			<p>My first blog <br>
			Copyright &copy; 2019</p>
		</footer>
	<div>
</body>
</html>