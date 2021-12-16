<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="signup" method="POST" action="controle/ver.php">
    <div class="form-group"> <input type="email" class="form-control" placeholder="Email" id="form14" name="email"> </div>
    <div class="form-group"> <input type="password" class="form-control" placeholder="Password" id="form15" name="senha"> <small class="form-text text-muted text-right">

    <select name="tipo">
    	<option value="0">Cliente</option>
    	<option value="1">Admin</option>
    </select>
    </small> </div> <button type="submit" value="Entrar">Entrar</button>
</form>
</body>
</html>