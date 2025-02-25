<?php
header('Access-Control-Allow-Origin: *'); // Libera para que qualquer domínio consiga acessar a API.
header('Content-type: application/json'); // Configura para que todos os dados retornem em JSON.

date_default_timezone_set('America/Sao_Paulo'); // Configura a data e a hora do sistema para horário de São Paulo.

var_dump($_GET['path']);