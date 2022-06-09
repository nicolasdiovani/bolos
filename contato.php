<?php 
        include_once './includes/_dados.php';
        include_once './includes/_head.php';
        $paginaAtual='contato';
        include_once './includes/_header.php';
    ?>
    <h1>Contato</h1>
    <hr>
    <form action="envia.php" method="post">
        <ul>
            <li>
                <label for="txtNome">Nome Completo</label>
                <input type="text" name="txtNome" required>
            </li>
            <li>
                <label for="txtEmail">E-mail</label>
                <input type="email" name="txtEmail" required>
            </li>
            <li>
                <label for="txtTelefone">Telefone</label>
                <input type="tel" name="txtTelefone" required>
            </li>
            <li>
                <label for="selEstado">Estado</label>
                <select name="selEstado">
                    <option>- selecione seu estado -</option>
                    <option value="RS">Rio grande do sul</option>
                    <option value="PR">Parana</option>
                    <option value="SP">São paulo</option>
                    <option value="SC">Santa catarina</option>
                </select>
            </li>
            <li>
                <input type="submit" value="Enviar">
            </li>
        </ul>
    </form>
    <?php 
        include_once './includes/_footer.php';
    ?>