<?php

include __DIR__ . '/../Db/Database.php';

class marca
{
    public $id_marca;
    public $nome_marca;
    public $createdAt;

    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');

        $objDatabase = new Database('marca');
        $this->id_marca = $objDatabase->insert([
            'nome_marca' => $this->nome_marca,
            'createdAt' => $this->data
        ]);

        return true;
    }

    public function atualizar()
    {
        return (new Database('marca'))->update('id_marca =' . $this->id_marca, [
            'nome_marca' => $this->nome_marca,
        ]);
    }

    public function excluir(){
        return (new Database('marca'))->delete('id_marca =' . $this->id_marca);
    }

    public static function getMarcas($where = null, $order = null, $limit = null){
        return (new Database('marca'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getMarca($id_marca)
    {
        return (new Database('marca'))->select('id_marca = ' . $id_marca)
            ->fetchObject(self::class);
    }
}
