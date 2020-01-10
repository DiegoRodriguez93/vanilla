<?php 

$name = $_POST['nombre'];

$res =  array('result'=>true,'nombre'=>$name);

echo json_encode($res);

?>