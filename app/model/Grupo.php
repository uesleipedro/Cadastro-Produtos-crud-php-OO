<?php

include __DIR__ . '/../Db/Database.php';

class Grupo
{
    public $id_grupo;
    public $nome_grupo;
    public $createdAt;

    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');

        $objDatabase = new Database('grupo');
        $this->id_grupo = $objDatabase->insert([
            'nome_grupo' => $this->nome_grupo,
            'createdAt' => $this->data
        ]);

        return true;
    }

    public function atualizar()
    {
        return (new Database('grupo'))->update('id_grupo =' . $this->id_grupo, [
            'nome_grupo' => $this->nome_grupo,
        ]);
    }

    public function excluir(){
        return (new Database('grupo'))->delete('id_grupo =' . $this->id_grupo);
    }

    public static function getGrupos($where = null, $order = null, $limit = null){
        return (new Database('grupo'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getGrupo($id_grupo)
    {
        return (new Database('grupo'))->select('id_grupo = ' . $id_grupo)
            ->fetchObject(self::class);
    }
}
