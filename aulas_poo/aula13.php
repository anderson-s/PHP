<?php
		class Email{
			public function CadastrarEmail($email){
					if (!Filter_var($email, FILTER_VALIDATE_EMAIL)) {
						throw new Exception ("Email invalido", 1);
					}else{
						echo "Email Valido";

						
					}


			}
		}


$teste = new Email;
try {
    $teste->CadastrarEmail("hbcm");
} catch(Exception $teu){
	echo "Menssagem: ".$teu->getMessage()."<br>";
	echo "Codigo: ".$teu->getCode()."<br>";
	echo "Linha : ".$teu->getLine()."<br>";
}	

?>