<?php

	class login{
		// public $nome;
		public $senha;
		public $email;
	
		 public function Entrar(){
		   if($this ->email == "andeson@gmail" && $this->senha == "123"){
			echo"Logado com Sucesso</script>";
		}else{
			echo "Bagulhos errados";
		}
		
	}
}
$objeto = new login();
$objeto->email = "andeson@gmail";
$objeto->senha = "123";
echo $objeto->Entrar();	
?>