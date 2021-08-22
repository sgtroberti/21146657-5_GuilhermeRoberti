<?php

//Valida os dados de POST
if (isset($_POST['produto']) && isset($_POST['unidade']) && isset($_POST['valor']) && isset($_POST['desc']) && isset($_POST['img'])) {
    $produto = $_POST['produto'];
    $unidade = $_POST['unidade'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];
    $img = $_POST['img'];
}
?>
<br><br>

<!-- Cria cartão centralizado -->
<div class="card text-center cartao">
    <div class="card-header">
        <h2><?= $produto ?></h2>
        <img width="400px" src="./images/<?= $img ?>.jpg" alt="Imagem">
    </div>
    <div class="card-body">
        <h5 class="card-title">Preço por <?= $unidade ?>: R$ <?= $valor ?>,00</h5>
        <p class="card-text"><?= $desc ?></p>
        <a href="?pagina=cardapio" class="btn btn-primary">Voltar</a>

        <!-- Este link abre uma conversa em nova aba no whatsapp com o nome do produto selecionado -->
        <a href="https://api.whatsapp.com/send?phone=5545987654321&text=Quero%20experimentar%20o%20bolo%20<?= $produto ?>" target="_blank" class="btn btn-success">Peça pelo WhatsApp</a>
    </div>
 
</div>
