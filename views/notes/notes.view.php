<?php require("views/parts/head.view.php") ?>

<?php require("views/parts/header.view.php") ?>

    <h1>Notes</h1>

<ul class="list-group m-3">
    <?php foreach ($notes as $note) : ?>
        <li class="list-group-item">
            <a href="/note?id=<?=$note['id']?>"><?= $note['title'] ?></a>
        </li>
    <?php endforeach; ?>
</ul>


<?php require("views/parts/footer.view.php") ?>
