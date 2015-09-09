<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="my_style.css">
    <script type="text/javascript"  src=""></script>
     
  <title>Моя статья</title>
  </head>
 <body>
	<div class="container">
		<h1>Моя статья</h1>
		<div>
			<h3><?=$article['title']." №".$article['id']?></h3>
			<em>Опубликовано: <?=$article['date']?> </em>
			 <?php  foreach($images as $img): ?>
					
					 <img class="illustrazia" src="<?=$img['src_image']?>" alt="<?=$img['alt_image']?>"/>
					 
				 
			<?php endforeach ?>
			<p><?=$article['content']?></p>
		</div>
		<footer>
			<a href="index.php">Все статьи</a><br>
			<a href="admin">Панель админа</a>
			<p>Мой блог<br>Copyright &copy; 2015</p>
		</footer>
   </div>
 </body>
</html>
