<?php

    require_once "../../models/CategoriaCrud.php";

    $c = new CategoriaCrud();
    $categorias = $c->getCategorias();


    $listaCategorias = [];

    foreach ($categorias as $categoria){
        $arCat = ["id" => $categoria->getId(), "nome" => utf8_encode($categoria->getNome())];

    $listaCategorias[] = $arCat;
    }

    $catJson = json_encode($listaCategorias);
    header('Content-type:application/json');
    echo  $catJson;

