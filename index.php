<?php
//Inclui cabeçalho
require_once("./pages/header.php");


if (!isset($_GET['pagina'])) {
?>
    <!-- Vídeo de background -->
    <video id="videoBG" poster="" autoplay muted loop>
        <source src="./images/final.mp4" type="video/mp4">
    </video>
<?php
} else {
    $pagina = $_GET['pagina'];
    require_once("./dados/data.php");
    require_once("./function/function.php");
    include("./pages/$pagina.php");
}


//Inclui rodapé
require_once("./pages/footer.php");
?>