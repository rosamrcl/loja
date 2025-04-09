<?php
header("Content-Type: application/json");

$data['status']='SUCESS';
$data['method']=$_SERVER['REQUEST_METHOD'];

//apresentar as variaveis que vieram no pedido (GET ou POST)

if($data['method']=='GET'){
    $data['data']=$_GET;

}elseif($data['method']=='POST'){
    $data['data']==$_POST;
}

echo json_encode($data);


?>