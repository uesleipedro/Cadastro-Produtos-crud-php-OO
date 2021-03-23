<?php

include __DIR__ . '/../../model/Grupo.php';
define('TITLE', 'Editar Grupo');

$objGrupo = Grupo::getGrupo($_GET['id_grupo']);

if (isset($_POST['nome_grupo'])) {

    $objGrupo->nome_grupo = $_POST['nome_grupo'];
    $objGrupo->atualizar();

    header('location: ../../index.php?pagina=grupo/lista_grupo&status=success');
    exit;
} 

include __DIR__ . '/../../view/grupo/cadastro_grupo.php';
