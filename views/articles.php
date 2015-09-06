<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=""/>
    
    <script type="text/javascript"  src=""></script>
     
  <title>Мой  блог  </title>
  </head>
 <body>
   <div class="container">
   	<h1>Мой блог</h1>
   	<?php foreach($article as $a  ):?>
   	<div class="article">   		
	   	<h3><a href="article.php?id= <?php $a['id']= ?>"><? =$a['title']?></a></h3>
	   	<em>Опубликовано: <?php =$a['date'] ?></em>
   		<p><?php $a['content']?></p>
   	</div>
   	<?php endforeach ?>
   	<footer><p>Мой блог<dr>Copyright &copy; 2015</p></footer>
   </div>
 </body>
</html>