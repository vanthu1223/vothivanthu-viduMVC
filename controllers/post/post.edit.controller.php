<?php

require "models/post.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) and !empty($_POST['description'])) {
        $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
        $statement->execute([
            ':title' => $_POST['title'],
            ':description' => $_POST['description'],
            ':id' => $_POST['id']

        ]);

        header('location: /post');
    }
}
require "views/post/form.edit.view.php";

?>