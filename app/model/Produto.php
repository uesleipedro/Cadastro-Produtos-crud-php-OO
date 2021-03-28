<?php

require_once __DIR__ . '/../Db/Database.php';

class Produto
{
    public $id_produto;
    public $nome_produto;
    public $npm;
    public $grupo_id_grupo;
    public $marca_id_marca;
    public $unidade_medida_id_unidade_medida;
    public $imagem_path;
    public $createdAt;

    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');

        $objDatabase = new Database('produto');
        $this->id_produto = $objDatabase->insert([
            'nome_produto' => $this->nome_produto,
            'npm' => $this->npm,
            'grupo_id_grupo' => $this->grupo_id_grupo,
            'marca_id_marca' => $this->marca_id_marca,
            'unidade_medida_id_unidade_medida' => $this->unidade_medida_id_unidade_medida,
            'imagem_path' => $this->imagem_path,
            'createdAt' => $this->data
        ]);

        return true;
    }

    public function atualizar()
    {
        return (new Database('produto'))->update('id_produto =' . $this->id_produto, [
            'nome_produto' => $this->nome_produto,
            'npm' => $this->npm,
            'grupo_id_grupo' => $this->grupo_id_grupo,
            'marca_id_marca' => $this->marca_id_marca,
            'unidade_medida_id_unidade_medida' => $this->unidade_medida_id_unidade_medida,
            'imagem_path' => $this->imagem_path,
        ]);
    }

    public function excluir()
    {
        return (new Database('produto'))->delete('id_produto =' . $this->id_produto);
    }

    public static function getProdutos($fields = null, $where = null, $join = null, $order = null, $limit = null)
    {
        return (new Database('produto'))->select($fields, $where, $join, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getProduto($id_produto)
    {
        return (new Database('produto'))->select('*', 'id_produto = ' . $id_produto)
            ->fetchObject(self::class);
    }
}
