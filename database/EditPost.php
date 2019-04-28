<?php

class EditPost extends Messag
{


    public function __construct(){

        parent::__construct();


        $this->id =  $_POST['get_id_post'];
        $this->user_id =  $_POST['get_id_users'];

        $this->picture_name = md5 ($_FILES['image']['name']).'.jpg';
        move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$this->picture_name);
        $this->name = $_POST['get_post_name'];
        $this->description = $_POST['get_post_descrip'];
        $this->article = $_POST['get_post_article'];



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

    function update_post ()
    {
        //$this->id = $_GET['id_post'];
        //$this->id = $_GET['id_post'];

        $request = "UPDATE `$this->tabl` SET `user_id`='$this->user_id', `picture_name`='$this->picture_name', `name`='$this->name', `description`='$this->description', 
`article`='$this->article' WHERE `id`= '$this->id'";

        echo $request."<br>";

        //    UPDATE `posts` SET `user_id`='1',`picture_name`='057c0789bdb3a49e44cb31296cfaaa7b.jpg',`name`='lll',`description`='llllll',`article`='llllllllllll' WHERE `id`= '26'
        $statement = $this->pdo->query($request);

 /*





        $request = "UPDATE $this->tabl SET user_id = :user_id,
                                    picture_name = :picture_name,
                                    name = :name,
                                    description = :description,
                                    article = :article
                                    WHERE id = :id";


        $statement = $this->pdo->prepare($request);


        $data = [
            'user_id' => $this->user_id,
            'picture_name' => $this->picture_name,
            'name' => $this->name,
            'description' => $this->description,
            'article' => $this->article,
            'id' => $this->id,

        ];
        $statement->execute($data);


        $statement->bindParam(':user_id',$this->user_id);
        $statement->bindParam(':picture_name',$this->picture_name);
        $statement->bindParam(':name', $this->name );
        $statement->bindParam(':description',$this->description);
        $statement->bindParam(':article',$this->article);
        $statement->bindParam(':id',$this->id);

        $statement->execute();
*/







        echo "<br>";echo "<br>";
        echo 'выполнение  var_dump($statement) после выполнения метода  $statement->execute() '."<br>";
        var_dump($statement);
    }




}
?>
