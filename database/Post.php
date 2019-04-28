<?php

class Post extends Messag
{


    public function __construct(){

        parent::__construct();



    }
    public function set_id() {

        $this->id = $_GET['id_post'];

    }

    public function set_post() {

        $this->tabl = TABL_POST;
        echo'<br>';
        echo $this->tabl ;
        echo'<br>';
        $this->id = 'not set';
        $this->user_id = '1';
        $this->picture_name = md5 ($_FILES['image']['name']).'.jpg';
        move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$this->picture_name);
        $this->name = $_POST['get_post_name'];
        $this->description = $_POST['get_post_descrip'];
        $this->article = $_POST['get_post_article'];
        print_r($this);

    }


    public function get_post() {

        print_r($this);

    }

    function insert_post ()
    {

        $sql = "INSERT INTO `$this->tabl`( `user_id`, `picture_name`, `name`, `description`, `article`) VALUES ('$this->user_id','$this->picture_name','$this->name','$this->description','$this->article')";
    echo $sql;
    $statement = $this->pdo->query($sql);

    }
    public function get_on_post() {


        $sql = "SELECT * FROM {$this->tabl} WHERE id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':id',$this->id);
        $statement->execute();
        $post = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $post;

    }
    public function del_on_post() {

        $sql = "DELETE FROM {$this->tabl} WHERE id = :id";
        echo $sql;
        $statement = $this->pdo->prepare($sql);
        dd($statement);
        $statement->bindParam(':id',$this->id);
        $statement->execute();
        dd($statement);


    }


}
?>
