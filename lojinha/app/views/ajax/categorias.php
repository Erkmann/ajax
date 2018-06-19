<?php

    require_once "../../models/CategoriaCrud.php";

    $c = new CategoriaCrud();
    $categorias = $c->getCategorias();
    ?>
<ul>
    <?php foreach ($categorias as $cat): ?>
        <li><?= utf8_encode($cat->getNome()) ?></li>
    <?php endforeach;?>
</ul>

