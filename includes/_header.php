<header>
    <h1>sandro&massas</h1>
    <nav>
        <ul>
            <li><a href="./empresa.php">Empresas</a></li>
            <li><a href="./produtos.php">Produtos</a></li>
            <li><a href="./receita.php">Receitas</a></li>
            <li><a href="./contato.php">Contato</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <?php if ($paginaAtual=="home") {?>
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Index</li>
            </ol>
            </nav>
        </div>
    </div>
    <?php }
    else{?>
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Index</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $paginaAtual; ?></li>
            </ol>
            </nav>
        </div>
    </div>
    <?php } ?>