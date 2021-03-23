<?php

include __DIR__ . '/../../model/Marca.php';

if (isset($_GET['id_marca'])) {
    try {
        $objMarca = Marca::getMarca($_GET['id_marca']);
        $objMarca->excluir();
        header('location: index.php?pagina=marca/lista_marca&status=success');
    } catch (\Throwable $th) {
        header('location: index.php?pagina=marca/lista_marca&status=error');
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

$marcas = Marca::getMarcas(); 
$resultados = '';
foreach ($marcas as $marca) {
    $resultados .= 
        '<tr>
            <td>' . $marca->id_marca . '</td>
                <td>' . $marca->nome_marca . '</td>
                <td>
                    <a href="index.php?pagina=marca/editar_marca&id_marca=' . $marca->id_marca . ' ">
                        <button type="button" class="btn btn-primary">Editar</button>
                    </a>
                    <a href="index.php?pagina=marca/lista_marca&id_marca=' . $marca->id_marca . ' ">
                        <button type="button" class="btn btn-danger" 
                        onclick="return window.confirm(\'Deseja realmente excluir a marca ' . $marca->nome_marca . '?\')" >Excluir</button>
                    </a> 
                </td>
            </tr>';
}

$resultados = strlen($resultados) ? $resultados : 
'<tr>
    <td colspan="6" class="text-center">Nenhum grupo encontrado</td> 
</tr>';



include __DIR__ . '/../../view/marca/lista_marca.php';
