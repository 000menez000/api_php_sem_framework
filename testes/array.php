<?php

// 01 - CRIANDO ARRAYS

echo "ARRAY INDEXADO:\n";
$frutas = ["Maçã", "Banana", "Laranja"];
print_r($frutas);

echo "\nARRAY ASSOCIATIVO:\n";
$pessoa = [
    "nome" => "Kauãh",
    "idade"=> 19,
    "cidade" => "Samonte"
];
print_r($pessoa);
print_r($pessoa['nome']);

echo "\n\nARRAY MULTIDIMENSIONAL:\n";
$matriz = [
    ["João", 20, "São Paulo"],
    ["Maria", 25, "Rio de Janeiro"],
    ["Carlos", 30, "Belo Horizonte"]
];
print_r($matriz);


// 02 - ADICIONANDO E REMOVENDO ELEMENTOS

$cores = ["Vermelho", "Azul"];

// ADD
$cores[] = "Verde"; // Uma forma de adicionar (no final da lista)
array_push($cores, "Amarelo"); // Outra forma de adicionar (no final da lista)
array_unshift($cores, "Preto"); // Adiciona no Início da lista.

// DEL
array_pop($cores); // remove o ultimo elemento
array_shift($cores); // remove o primeiro elemento


// 03 - PERCORRENDO ARRAYS

$numeros = [10, 20, 30, 40];

// FOR
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "\n";
}

// FOREACH
foreach ($numeros as $numero) {
    echo $numero . "\n";
}

// PERCORRENDO ARRAY ASSOCIATIVO
$pessoa = ["nome" => "Kauãh", "idade" => 25];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor\n";
}


// 04 - FILTRANDO E MODIFICANDO ARRAYS
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// FILTRAR APENAS NÚMEROS PARES
$pares = array_filter($numeros, function($num) {
    return $num % 2 == 0;
});
print_r($pares);

// MULTIPLICAR CADA ELEMENTO POR 2
$dobrados = array_map(fn($num) => $num * 2, $numeros);
print_r($dobrados);


// 05 - ORDENANDO ARRAYS

// ORDEM ALFABÉTICA
$nomes = ["Carlos", "Ana", "Bruno"];
sort($nomes);
print_r($nomes);

// ORDEM DECRESCENTE
$numeros = [3, 1, 4, 2];
rsort($numeros);
print_r($numeros);

// ORDENA VALORES MANTENDO AS CHAVES
$idades = ["João" => 30, "Maria" => 25, "Carlos" => 35];
asort($idades);
print_r($idades);
