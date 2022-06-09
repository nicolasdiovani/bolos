<?php 
        include_once './includes/_dados.php';
        include_once './includes/_head.php';
        include_once'./includes/_functions.php';
        $paginaAtual='produto-detalhe';
        $id = $_GET['id'];
        $produto= $dadosProdutos[$id];
        include_once './includes/_header.php';
    ?>
    <h1>produto-detalhe</h1>
    <h1><?php echo $produto['nome']?></h1>
    <hr>
    <p><?php echo $produto['descrição'] ?></p>
    <hr>
    <span>
    <?php echo ConverterEmMoeda($produto['preco']);?>
    </span>
    
    <?php
        include_once './includes/_footer.php';
    ?>