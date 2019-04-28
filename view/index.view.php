
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tasks</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="ind.php">MainPage</a>
                </li>


            </ul>

        </div>
    </nav>
<div class="span9">
    <div class="row">
        <div class="col-md-12
">
            <a href="create.php" class="btn btn-success" >add post</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">user_id</th>
                    <th scope="col">pic</th>
                    <th scope="col">name       </th>
                    <th scope="col">description</th>
                    <th scope="col">article     </th>




                </tr>
                </thead>
                <tbody>
                <?php foreach($posts as $post):?>
                    <tr>
                        <th scope="row"><?php echo $post['id'] ?></th>
                        <td><?php echo $post['user_id'] ?></td>
                        <td><?php echo $post['picture_name'] ?></td>
                        <td><?php echo $post['name'] ?></td>
                        <td><?php echo $post['description'] ?></td>
                        <td><?php echo $post['article'] ?></td>
                        <td>
                            <a href="<?php echo "edit-form.php?id_post=".$post['id']?>" class="btn btn-warning" >Edit</a>
                            <a href="<?php echo "delete.php?id_post=".$post['id']?>" class="btn btn-danger" >Delete</a>
                        </td>
                    </tr>

                <?php endforeach;?>


                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
