<?php

include __DIR__ . '/../model/Grupo.php';

if (isset($_GET['id_grupo'])) {
    try {
        $objGrupo = Grupo::getGrupo($_GET['id_grupo']);
        $objGrupo->excluir();
        header('location: index.php?pagina=lista_grupo&status=success');
    } catch (\Throwable $th) {
        header('location: index.php?pagina=lista_grupo&status=error');
    }
}

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação excecutada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não excecutada!</div>';
            break;
    }
}

$grupos = Grupo::getGrupos(); 
$resultados = '';
foreach ($grupos as $grupo) {
    $resultados .= 
        '<tr>
            <td>' . $grupo->id_grupo . '</td>
                <td>' . $grupo->nome_grupo . '</td>
                <td>
                    <a href="index.php?pagina=editar_grupo&id_grupo=' . $grupo->id_grupo . ' ">
                        <button type="button" class="btn btn-primary">Editar</button>
                    </a>
                    <a href="index.php?pagina=lista_grupo&id_grupo=' . $grupo->id_grupo . ' ">
                        <button type="button" class="btn btn-danger" 
                        onclick="return window.confirm(\'Deseja realmente excluir o grupo ' . $grupo->nome_grupo . '?\')" >Excluir</button>
                    </a> 
                </td>
            </tr>';
}

$resultados = strlen($resultados) ? $resultados : 
'<tr>
    <td colspan="6" class="text-center">Nenhum grupo encontrado</td> 
</tr>';



include __DIR__ . '/../view/grupo/lista_grupo.php';
