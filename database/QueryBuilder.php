<?php

class QueryBuilder extends ConnectDB
{
    protected $tabl;
    protected $table_fields;
    protected $post;
    protected $user;


    public function __construct(){

        parent::__construct();

        $this->tabl = 'not set';
        $this->table_fields = 'not set';
        $this->post = 'not set';
        $this->user = 'not set';

    }

    public function get_collumn_tabl($tabl){    //возвращает массив с именами колонок таблици
        $this->tabl = $tabl;
        $sql = "DESCRIBE {$this->tabl}";
        $q = $this->pdo->prepare($sql);
        $q->execute();
        $this->table_fields = $q->fetchAll(PDO::FETCH_COLUMN);
        var_dump($this->pdo);
        return $this->table_fields;
}

}

?>
