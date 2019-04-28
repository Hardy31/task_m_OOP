<?php
session_start();
/*
//незарегистрированный в сесии пользователь возвращается на страницу login-form.php
if (!isset($_SESSION['id_user'])) {
    header('Location: /login-form.php');
    exit;
}
*/
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Create Task</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>

    </style>
</head>

<body>
<div class="form-wrapper text-center">
    <form class="form-signin" action="store.php" method="post" enctype="multipart/form-data">

        <img class="mb-6" src="assets/img/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Добавить запись</h1>

        <label for="inputEmail" class="sr-only">Название</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Название" name="get_post_name">

        <label for="inputEmail" class="sr-only">Описание</label>
        <textarea  class="form-control" cols="30" rows="3" placeholder="Описание" name="get_post_descrip"></textarea>

        <label for="inputEmail" class="sr-only">Описание</label>
        <textarea  class="form-control" cols="30" rows="10" placeholder="содержание" name="get_post_article"></textarea>

        <input type="file" name="image"> <br>

        <select class="custom-select" name="get_post_status">
            <option selected>Open this select menu</option>
            <option selected value="draft"> draft</option>
            <option value="private">private</option>
            <option value="general">general</option>
        </select>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
</div>
</body>
</html>