<?php require "partial/header.php" ?>
<?php require "partial/navbar.php" ?>

<table class="table table-striped mt-4">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?=$data->id?></th>
        <td><?= $data->title ?></td>
        <td><?= $data->body ?></td>
    </tr>
    </tbody>
</table>
<div class="d-flex justify-content-end">
    <a href="/articles" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
</div>
<?php require "partial/footer.php" ?>
