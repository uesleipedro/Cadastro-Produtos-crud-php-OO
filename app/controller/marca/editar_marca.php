<?php

include __DIR__ . '/../../model/Marca.php';
define('TITLE', 'Editar Marca');

$objMarca = Marca::getMarca($_GET['id_marca']);

if (isset($_POST['nome_marca'])) {

    $objMarca->nome_marca = $_POST['nome_marca'];
    $objMarca->atualizar();

    header('location: ../../index.php?pagina=marca/lista_marca&status=success');
    exit;
} 

include __DIR__ . '/../../view/marca/cadastro_marca.php';
