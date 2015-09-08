<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=""/>
    <script type="text/javascript"  src=""></script>
     
  <title>Мо   </title>
  </head>
 <body>
	<div class="container">
		<h1>Моя статья</h1>
		<div>
			<h3><?=$article['title']." №".$article['id']?></h3>
			<em>Опубликовано: <?=$article['date']?> </em>
			<p><?=$article['content']?></p>
		</div>
		<footer>
			<p>Мой блог<br>Copyright &copy; 2015</p>
		</footer>
   </div>
 </body>
</html>
