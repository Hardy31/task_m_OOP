<?php
define ('HOST', 'localhost');
define ('DB', 'php_course');
define ('CHARSET', 'utf8');
define ('USER', 'root');
define ('PASSWORD', '9959095');
define ('TABL_POST', 'posts');
define ('TABL_USER', 'signup');

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

    public function getAll($tabl) {

        $this->tabl = $tabl;
        $sql = "SELECT * FROM {$this->tabl}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $posts;

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
