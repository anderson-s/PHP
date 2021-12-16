<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form class="text-left" action="controle/cadastrando.php" method="POST">
            <div class="form-group"> <label for="form16">Nome do usuario</label>
              <input type="text" class="form-control" id="form16" placeholder="Nome do usuario"  name="nome" required="required"> </div>
            <div class="form-group"> <label for="form18">E-mail</label> 
              <input type="email" class="form-control" id="form18" placeholder="E-mail" name="email" required="required"> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="form19">Senha</label> 
                <input type="password" class="form-control" id="form19" placeholder="•••" name="senha" required="required"> </div>
            <div class="form-group"> <label for="form17">Logradouro<br></label> 
              <input type="text" class="form-control" id="form17" placeholder="Logradouro" name="logradouro" required="required"> </div>    
            </div>
            <div class="form-group"> <label for="form17">Num casa<br></label> 
              <input type="text" class="form-control" id="form17" placeholder="Num" name="num" required="required"> </div>    
            </div>
            <div class="form-group"> <label for="form17">Rua<br></label> 
              <input type="text" class="form-control" id="form17" placeholder="rua" name="rua" required="required"> </div>    
            </div>
            <div class="form-group">
              <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21">Manter conectado</label> </div>
            </div> <button type="submit" class="btn btn-primary" value="cadastrar">Cadastrar</button>
            <button ><a href="login.php">Entrar</a></button>
            <input type="reset" value="Limpar">

          </form>
</body>
</html>
