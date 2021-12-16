<?php
    require_once("../controller/c_controller.php");
    //criacao de um objeto do controller da Classe
    $obj = new controller();
    $obj->DeletarDados($_GET['id']);
?>
<html>
<head>

    </script>
</head>
<body>
    <script>
        alert("Cliente deletado com sucesso!");    
        window.location.href = "index.php";
    </script>
</body>
</html>