<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
include "conexao.php";
session_unset();
session_destroy();
 ?>
 <script type="text/javascript">	
alert( 'Não chore nesta despedida; Ela deixará voçê mais forte');
window.location.href="../";
 </script>
</body>
</html>
