<?php

include __DIR__ . '/../../model/Produto.php';
include __DIR__ . '/../../model/Grupo.php';
include __DIR__ . '/../../model/Marca.php';

define('TITLE', 'Cadastrar Produto');

$objProduto = new Produto;
//isset($_POST['submit']) && 
if (isset($_POST['nome_produto'])) {

    $objProduto->nome_produto = $_POST['nome_produto'];
    $objProduto->npm = $_POST['npm'];
    $objProduto->grupo_id_grupo = $_POST['grupo'];
    $objProduto->marca_id_marca = $_POST['marca'];
    //$objProduto->unidade_medida_id_unidade_medida = $_POST['unidade_medida_id_unidade_medida'];

    $objProduto->cadastrar();

    header('location: ../../index.php?pagina=produto/lista_produto&status=success');
    exit;
}

$grupos = Grupo::getGrupos('*');
$grupo_result = '';
foreach ($grupos as $grupo) {
    $grupo_result .= '<option value="'.$grupo->id_grupo.'">' . $grupo->nome_grupo . '</option>';
}

$marcas = Marca::getMarcas('*');
$marca_result = '';
foreach ($marcas as $marca) {
    $marca_result .= '<option value="'.$marca->id_marca.'">' . $marca->nome_marca . '</option>';
}

include __DIR__ . '/../../view/produto/cadastro_produto.php';
