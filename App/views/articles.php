<?php require "partial/header.php" ?>
<?php require "partial/navbar.php" ?>
<table class="table table-striped table-hover mt-4">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Operation</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $article) : ?>
    <tr>
        <th scope="row"><?=$article->id?></th>
        <td><?= $article->title ?></td>
        <td><?= $article->body ?></td>
        <td>
            <a href="/delete_article?id=<?=$article->id?>" title="Delete" class="text-light  btn btn-danger"><i class="fas fa-trash"></i></a>
            <a href="/edit_article?id=<?= $article->id ?>" title="Edit" class="text-light btn btn-primary"><i class="fas fa-edit"></i></a>
            <a href="/create_article" title="Create" class="text-light btn btn-success"><i class="fas fa-plus"></i></a>
            <a href="/article?id=<?= $article->id ?>" title="View" class="text-light btn btn-info"><i class="fa fa-eye"></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="d-flex justify-content-end">
    <a href="/" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
</div>
<?php require "partial/footer.php" ?>
