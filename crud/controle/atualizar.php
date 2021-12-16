<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action= "update.php" method="POST">
	<input type="hidden" value="<?php echo $_GET['id'];
	?>" name="id">
	Nome:<input type="text" name ="nome" required="required"><br>
	Email:<input type="email" name ="email" required="required"><br>
	<!-- Senha:<input type="senha" name ="senha" required="required"><br> -->
	<input type="Submit" value="Atualizar">
</form>	
 </script>
</body>
</html>

