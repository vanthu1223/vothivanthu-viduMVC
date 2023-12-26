<?php require "partials/head.php";
 require "partials/nav.php" ?>

<div class="card mt-5">
    <div class="card-body">
        <form action="/post/create" method="post">
            <div class="form-group">
                <input type="text" placeholder="title" class="form-control" name="title">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Description" name="description"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add Post</button>
            </div>
        </form>
    </div>
</div>

<?php require "partials/footer.php" ?>