<?php

	class login{
		// public $nome;
		private $senha;
		private $email;
		
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			 $this->email = $email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			 $this->senha = $senha;
		}

		 public function Entrar(){
		   if($this ->email == "andeson@gmail" && $this->senha == "123"){
			echo"Logado com Sucesso</script>";
		}else{
			echo "Bagulhos errados";
		}
		
	}
}
$objeto = new login();
$objeto->setEmail("andeson@gmail");
$objeto->setSenha("123");
echo $objeto->Entrar();	


$objetoTeste = new login();
$objetoTeste->setEmail("fff");
$objetoTeste->setSenha("nfhf");
echo $objetoTeste->Entrar();
echo $objetoTeste->getEmail();
?>