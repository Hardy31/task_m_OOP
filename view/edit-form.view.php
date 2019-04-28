

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Edit Task</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>

    </style>
</head>

<body>
<div class="form-wrapper text-center">
    <form class="form-signin" action="<?php echo "edit.php"?>"  method="post" novalidate enctype="multipart/form-data">
        <img class="mb-4" src="assets/img/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Изменить запись</h1>
        <input type="text"  id="inputEmail" class="form-control" placeholder="Название" required value=<?php echo $post[0]['user_id']; ?> name="get_id_users" hidden>
        <input type="text"  id="inputEmail" class="form-control" placeholder="Название" required value=<?php echo $post[0]['id']; ?> name="get_id_post" hidden>
        <label for="inputEmail" class="sr-only">Название</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Название" required value=<?php echo $post[0]['name']; ?> name="get_post_name">
        <label for="inputEmail" class="sr-only">Описание</label>
        <textarea  class="form-control" cols="30" rows="10" placeholder="Описание" name="get_post_descrip"><?php echo $post[0]['description'];?></textarea>
        <label for="inputEmail" class="sr-only">Описание</label>
        <textarea  class="form-control" cols="30" rows="10" placeholder="Описание" name="get_post_article"><?php echo $post[0]['article'];?></textarea>


        <input type="file" name="image"   > <br>




        <input type="image">

        <img src="assets/img/<?php echo $post[0]['post_picture'];?>" alt="" width="300" class="mb-3">
        <button class="btn btn-lg btn-success btn-block" type="submit">Редактировать</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
</div>
</body>
</html>



















