<?php
//include 'database/ConnectToDB.php';
class QueryBuilder extends ConnectDB
{
    protected $tabl;
    protected $id_user;
    protected $name;
    protected $email;
    protected $password;
    //protected $avatar;


    public function __construct(){
        parent::__construct();


        $this->tabl = 'users';
        $this->id_user = 'not set';
        $this->name = 'not set';
        $this->email = 'not set';
        $this->password = 'not set';
        //$this->avatar = 'not set';
        //var_dump($this->pdo);

        echo $this->tabl;
        $this->email = 'hardy@mail.ru';
        $this->password = '202cb962ac59075b964b07152d234b70';


    }

    public function login() {

        $request = "SELECT * FROM {$this->tabl} WHERE email=:email && pw=:pw";
        echo $request;
        $d = $this->pdo;
        var_dump ($d);
        $statement = $d->prepare($request);
        var_dump ($statement);
        $arr = [':email' => $this->email, ':pw' => $this->password];
        var_dump($arr);
        $statement->execute($arr);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        print_r ($result);

    }




}

?>

