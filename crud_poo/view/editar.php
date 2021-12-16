<?php
require_once("../controller/c_controller.php");
//Pegar o id pelo metodo get para ser enviado pela URL e setar na variavel $id no função EditarDados da classe controller 
$cli1 = new controller();
if (isset($_POST['nome'])) {
    $sql = $cli1->EditarDados($_GET['id'],$_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['logradouro'],$_POST['num'],$_POST['rua']);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript">
        function Editar(){   
            alert("Cliente atualizado com sucesso!");   
        }
        
    </script>

</head>

<body>
<center>
        <h1>Atualizar Dados do Cliente</h1>
    
        <form action="#" method="POST">
            <table>
                <tr>
                    <td>Nome</td>
                    <td><input type="text" name="nome"></td>
                </tr>   
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>    
                    <td>Senha</td>
                    <td><input type="password" name="senha"></td>
                </tr>
                <tr>    
                    <td>Logradouro</td>
                    <td><input type="text" name="logradouro"></td>
                </tr>
                <tr>    
                    <td>Numero da casa</td>
                    <td><input type="number" name="num"></td>
                </tr>
                <tr>    
                    <td>Rua</td>
                    <td><input type="text" name="rua"></td>
                </tr>
                <tr><td><input type="Submit" onclick="Editar()"  value="Atualizar"></td></tr>
                <tr><td><a href="index.php">Voltar<a></td></tr>
            </table>
        </form>
    </center>
</body>

</html> 