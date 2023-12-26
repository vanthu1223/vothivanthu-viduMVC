<?php
require "models/post.model.php";

$heading = "Post Page";

$statement = $connection->prepare("select * from posts");
$statement->execute();
$posts = $statement->fetchAll();
require "views/post/post.view.php";
?>