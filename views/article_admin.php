<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../my_style.css"> 
    
    <script type="text/javascript"  src=""></script>
     
  <title>Панель администратора</title>
  </head>
 <body>
	 
   <div class="container">
   	<h1>Моя форма. </h1>
 		<div>
	 		<form method="POST" action="index.php">
	 		<label>
			 		Название
			 		<input  type="text" name="title" value=""
			 			class="form-item" autofocus required />
	 		</label>
	 		<label>
		 		Дата
		 		<input  type="date" name="date" value=""
			 			class="form-item" required />
	 		</label>
	 		<label>
		 		Содержимое
				<textarea class="form-item" name="content" required ></textarea> 		
	 		</label>
	 		<input type="submit" name="submit" value="Сохранить" class="btn" />
	 		</form> 		
 		</div> 
   	<footer>
			<a href="../index.php">Все статьи</a><br>
			<p>Мой блог <br>Copyright &copy; 2015</p>
		</footer>
   </div>
 </body>
</html>
 