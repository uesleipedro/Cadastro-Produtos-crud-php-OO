<?php

include __DIR__ . '/../../model/Produto.php';

if (isset($_GET['id_produto'])) {
    try {
        $objProduto = Produto::getProduto($_GET['id_produto']);
        $objProduto->excluir();
        header('location: index.php?pagina=produto/lista_produto&status=success');
    } catch (\Throwable $th) {
        header('location: index.php?pagina=protudo/lista_produto&status=error');
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

$fields = 'produto.id_produto, produto.nome_produto, marca.nome_marca as marca, grupo.nome_grupo as grupo';
$join = 'INNER JOIN grupo ON produto.grupo_id_grupo = grupo.id_grupo
         INNER JOIN marca ON produto.marca_id_marca = marca.id_marca;';
$produtos = Produto::getProdutos($fields,null,$join); 
$resultados = '';
foreach ($produtos as $produto) {
    $resultados .= 
        '<tr>
            <td>' . $produto->id_produto . '</td>
                <td>' . $produto->nome_produto . '</td>
                <td>' . $produto->grupo . '</td>
                <td>' . $produto->marca . '</td>
                <td>
                    <a href="index.php?pagina=produto/editar_produto&id_produto=' . $produto->id_produto . ' ">
                        <button type="button" class="btn btn-primary">Editar</button>
                    </a>
                    <a href="index.php?pagina=produto/lista_produto&id_produto=' . $produto->id_produto . ' ">
                        <button type="button" class="btn btn-danger" 
                        onclick="return window.confirm(\'Deseja realmente excluir a marca ' . $produto->nome_produto . '?\')" >Excluir</button>
                    </a> 
                </td>
            </tr>';
}

$resultados = strlen($resultados) ? $resultados : 
'<tr>
    <td colspan="6" class="text-center">Nenhum grupo encontrado</td> 
</tr>';



include __DIR__ . '/../../view/produto/lista_produto.php';
