<?php

include __DIR__ . '/../model/Grupo.php';

$objGrupo = new Grupo;

if (isset($_POST['nome_grupo'])) {
    echo '<script>alert("chegou aqui");</script>';
    $objGrupo->nome_grupo = $_POST['nome_grupo'];
    
    $objGrupo->cadastrar();

   // header('location: ../../index.php?pagina=lista_grupo&status=success');
    //exit;

}


include __DIR__ . '/../view/cadastro_grupo.php';
