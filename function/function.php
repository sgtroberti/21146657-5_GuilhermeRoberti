<?php

//Função que gera o HTML para a página do cardápio.
//Pode ser implementado um Banco de Dados para substituir o array estático
function geraCardapio($array)
{
    echo "<br><br>";
    echo "<div class='row row-cols-1 row-cols-md-4 g-4 centralizar'>";

    //Percorre o array de dados para montar os cards
    foreach ($array as $produto) {
?>
        <!-- Cria formulário para enviar dados para página de detalhes -->
        <form action="../../21146657-5_GuilhermeRoberti/pages/detalhes.php" method="POST">
            <input type="text" name="produto" value="<?= $produto['produto'] ?>" hidden>
            <input type="text" name="unidade" value="<?= $produto['unidade'] ?>" hidden>
            <input type="text" name="valor" value="<?= $produto['valor'] ?>" hidden>
            <input type="text" name="desc" value="<?= $produto['desc'] ?>" hidden>
            <input type="text" name="img" value="<?= $produto['img'] ?>" hidden>

            <!-- Monta cada card -->
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../../21146657-5_GuilhermeRoberti/images/<?= $produto['img'] ?>.jpg" alt='Imagem' class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produto["produto"] ?></h5>
                        <p class="card-text"><?= $produto["desc"] ?></p>
                        <input type="submit" class="btn btn-primary" value="Detalhes">
                    </div>
                </div>
            </div>
        </form>
<?php
    }
    echo "</div>";
}
