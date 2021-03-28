<?php

include __DIR__ . '/../../model/Produto.php';
include __DIR__ . '/../../model/Grupo.php';
include __DIR__ . '/../../model/Marca.php';
define('TITLE', 'Editar Produto');

$objProduto = Produto::getProduto($_GET['id_produto']);

if (isset($_POST['nome_produto'])) {

    $objProduto->nome_produto = $_POST['nome_produto'];
    $objProduto->npm = $_POST['npm'];
    $objProduto->grupo_id_grupo = $_POST['grupo'];
    $objProduto->marca_id_marca = $_POST['marca'];
    $objProduto->atualizar();

    header('location: ../../index.php?pagina=produto/lista_produto&status=success');
    exit;
} 

$grupos = Grupo::getGrupos('*');
$grupo_result = '';

foreach ($grupos as $grupo) {
    $selected = '';
    if($grupo->id_grupo == $objProduto->grupo_id_grupo) $selected = "selected";
    $grupo_result .= '<option '.$selected.' value="'.$grupo->id_grupo.'" >' . $grupo->nome_grupo . '</option>';
}

$marcas = Marca::getMarcas('*');
$marca_result = '';
foreach ($marcas as $marca) {
    $selected = '';
    if($marca->id_marca == $objProduto->marca_id_marca) $selected = "selected";
    $marca_result .= '<option '.$selected.' value="'.$marca->id_marca.'">' . $marca->nome_marca . '</option>';
}

include __DIR__ . '/../../view/produto/cadastro_produto.php';
