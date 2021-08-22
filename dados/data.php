<?php
//Inicialização dos vetores com informações dos produtos
$produto1 = [
    "produto" => "Bolo de Chocolate",
    "unidade" => "Kg",
    "valor" => 50,
    "desc" => "Delicioso bolo de chocolate, feito com cacau puro. Vendido por Kg, consulte personalizações!",
    "img" => "boloChoc",
];

$produto2 = [
    "produto" => "Bolo de Coco",
    "unidade" => "Kg",
    "valor" => 40,
    "desc" => "Delicioso bolo de coco, feito com o melhor coco do Nordeste. Vendido por Kg, consulte personalizações!",
    "img" => "boloCoco",
];

$produto3 = [
    "produto" => "Bolo de Cenoura",
    "unidade" => "Kg",
    "valor" => 25,
    "desc" => "Delicioso bolo de cenoura, feito com cenoura plantada no quintal. Vendido por Kg, consulte personalizações!",
    "img" => "boloCenoura",
];

$produto4 = [
    "produto" => "Bolo de Milho",
    "unidade" => "Kg",
    "valor" => 15,
    "desc" => "Delicioso bolo de Milho, feito com milho importado. Vendido por Kg, consulte personalizações!",
    "img" => "boloMilho",
];


//Inicialização do vetor que irá armazenar todos os produtos para poder usar durante a execução do site
$dados = [];
array_push($dados, $produto1, $produto2, $produto3, $produto4);
