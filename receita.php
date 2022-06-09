<?php 
        include_once './includes/_dados.php';
        include_once './includes/_head.php';
        include_once'./includes/_functions.php';
        $paginaAtual='receita';
        include_once './includes/_header.php';
?>
<main class="container">
        <section id="receitas">
            <div class="row">
            <?php 
            foreach($dadosReceita as $key2 => $value2){
            ?>
            <div class="card col-3" style="width: 18rem;">
            <a href="./receita-detalhe.php?id=<?php echo $key2;?>">
                <img class="card-img-top" src="./produtos/<?php echo $value2['imagem']?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value2['titulo'] ?></h4>
                    <h6 class="card-title"><?php echo $value2['descricao'] ?></h6>
                </div>
            </div>
            <?php
            }
            ?>
            </div>
        </section>
    </main>
    <?php 
        include_once './includes/_footer.php';
    ?>