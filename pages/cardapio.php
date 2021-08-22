<?php
//Inclui cabeçalho, dados e funções
require_once("../../21146657-5_GuilhermeRoberti/pages/header.php");
require_once("../../21146657-5_GuilhermeRoberti/dados/data.php");
require_once("../../21146657-5_GuilhermeRoberti/function/function.php");

//Chama função para gerar os cards com cada item do cardápio
geraCardapio($dados);
?>



<?php
//Inclui rodapé
require_once("../../21146657-5_GuilhermeRoberti/pages/footer.php");
?>