<?php
	class login{
		public static $user;

		public static function VerificarLogin(){
			echo "Usuario ".self::$user." logado";
		}
		public static function SairLogin(){
			echo "Usuario ".self::$user." deslogado";
		}
	}
login::$user = "Silva";
login::VerificarLogin();

$var = new login;
echo $var->SairLogin();


?>