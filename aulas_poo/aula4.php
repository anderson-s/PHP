<?php

	class login{
		public $nome;
		private $email;
		private $senha;
		

		public function __construct($nome, $email, $senha){
			$this->nome = $nome;
			$this->setEmail("andeson@gmail");
			$this->setSenha("123");
				
		}
		
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
	$objeto = new login("Andeson","andeson@gmail", "123");
	echo $objeto->getEmail();
	echo $objeto->getSenha();


?>