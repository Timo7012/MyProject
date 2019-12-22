<html>
<head>
  	<link rel="stylesheet" href="newsite.css">
	<meta charset="UTF-8">
</head>
<body class="bodybackground">
	<div class="admmod">
		<h3 align="center">Страница модератора</h3>
		<form action="moder_page_red.php" method="POST">				
			<select name="sector">
		  		<option>Базовый сектор</option>
		  		<option>Продвинутый сектор</option>
	 		</select>
								
			<select name="idpubl">
				<?php
		  		for($i=1;$i<256;$i++){
		  		echo '<option>'.$i.'</option>';}
		  		?>
		  	</select>

		  	<input type="submit" value="Изменить">
		</form>
		

		<h3><a class="a_auth" href="moder_page_add.php">Добавить Запись</a></h3>
	
	</div>
</body>
</html>';
