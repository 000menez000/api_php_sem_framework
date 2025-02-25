<?php
header('Access-Control-Allow-Origins: *'); // Libera para que qualquer domínio consiga acessar a API.
header('Content-type: application/json'); // Configura para que todos os dados retornem em JSON.

date_default_timezone_get('America/Sao_Paulo'); // Configura a data e a hora do sistema para horário de São Paulo.

if (isset($_GET['path'])) {
    $path = explode("/", $_GET['path']);
} else { echo "Caminho não existe"; exit; }

if (isset($path[0])) {
    $api = $path[0];
} else { echo " "; }

// var_dump($path);