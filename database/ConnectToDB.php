<?php
include 'config.php';
abstract class ConnectDB {
    protected $host_db;
    protected $data_base;
    protected $charset_db;
    protected $user_db;
    protected $password_db;
    protected $pdo;

    public function __construct() {
        $this->host_db = HOST;
        $this->data_base = DB;
        $this->charset_db = CHARSET;
        $this->user_db = USER;
        $this->password_db = PASSWORD;


        $this->pdo = new PDO("mysql:host=$this->host_db;dbname=$this->data_base;charset=$this->charset_db", $this->user_db, $this->password_db);
        //var_dump($this->pdo);


        if (!$this->pdo){
            exit("Ошибка соединения с БД. ".mysqli_error() );
        }else{
            //var_dump($this->pdo );
            //echo "соединение произошло";
        }

    }


}

?>