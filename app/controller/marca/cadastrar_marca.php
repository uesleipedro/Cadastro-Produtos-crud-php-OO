<?php

include __DIR__ . '/../../model/Marca.php';

define('TITLE', 'Cadastrar Marca');

$objMarca = new Marca;

if (isset($_POST['nome_marca'])) {

    $objMarca->nome_marca = $_POST['nome_marca'];

    $objMarca->cadastrar();

    header('location: ../../index.php?pagina=marca/lista_marca&status=success');
    exit;
}

include __DIR__ . '/../../view/marca/cadastro_marca.php';
