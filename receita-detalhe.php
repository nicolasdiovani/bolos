<?php 
        include_once './includes/_dados.php';
        include_once './includes/_head.php';
        include_once'./includes/_functions.php';
        $paginaAtual='receita-detalhe';
        $id = $_GET['id'];
        $receita= $dadosReceita[$id];
        include_once './includes/_header.php';
    ?>
    <h1>receita-detalhe</h1>
    <h1><?php echo $receita['titulo']?></h1>
    <hr>
    <p><?php echo $receita['descricao'] ?></p>
    <hr>
    <img class="card-img-top" src="./produtos/<?php echo $receita['imagem']?>" alt="Card image cap">
    <br>
    <hr>
    <h2><?php echo $receita['receita']?></h2><br>
    <iframe width="560" height="315" src="<?php echo $receita['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php
        include_once './includes/_footer.php';
    ?>