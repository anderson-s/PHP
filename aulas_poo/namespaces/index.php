<?php
include "model/aula11.php";
include "controller/aula11.php";
use\model\Animal as Vc;
use\controller\Animal as Eu;
$obj = new Vc;
$obj->Andar();
$obj = new Eu;
$obj->Andar();
 ?>