<?php 
        include_once './includes/_dados.php';
        include_once './includes/_head.php';
        include_once'./includes/_functions.php';
        $paginaAtual='produtos';
        include_once './includes/_header.php';
    ?>
    <main class="container">
        <section id="produtos">
            <div class="row">
            <?php 
            foreach($dadosProdutos as $key => $value){
            ?>
            <div class="card col-3" style="width: 18rem;">
            <a href="./produto-detalhe.php?id=<?php echo $key;?>">
                <img class="card-img-top" src="./produtos/<?php echo $value['imagem']?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value['nome'] ?></h4>
                    <span class="card-price"><?php echo ConverterEmMoeda($value['preco']); ?></span>
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