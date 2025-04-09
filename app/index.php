<?php
//dependencias

require_once('inc/config.php');
require_once ('inc/api_functions.php');

$variaveis=[
    'nome'=>'Círia',
    'sobrenome'=>'Chagas'
];

api_request('stauts', 'GET', $variaveis);

?>