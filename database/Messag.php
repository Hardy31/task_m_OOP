<?php


 class Messag extends QueryBuilder
{
    protected $tabl;
    protected $id;
    protected $user_id;
    protected $picture_name;
    protected $name;
    protected $description;
    protected $article;

    public function __construct() {
	 parent::__construct();

        $this->tabl = TABL_POST;
        $this->id = 'not set';
        $this->user_id = 1;
        $this->picture_name = 'not set';
        $this->name = 'not set';
        $this->description = 'not set';
        $this->article = 'not set';
        }

    public function getAll() {

         $sql = "SELECT * FROM {$this->tabl}";
         $statement = $this->pdo->prepare($sql);
         $statement->execute();
         $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
         return $posts;
     }

}

?>
