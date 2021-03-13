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
}
