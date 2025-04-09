<?php
//dependencias

require_once('inc/config.php');
require_once ('inc/api_functions.php');

$variaveis=[
    'nome'=>'Círia',
    'sobrenome'=>'Chagas'
];

$result=api_request('status', 'GET', $variaveis);
echo'<pre>';
print_r($result);

?>