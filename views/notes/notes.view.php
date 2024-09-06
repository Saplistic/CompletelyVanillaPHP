<?php require("views/parts/head.view.php") ?>

<?php require("views/parts/header.view.php") ?>

<main>
    <h1>Notes</h1>

    <?php foreach ($notes as $note) : ?>
        <li>
            <a href="/note?id=<?=$note['id']?>"><?= $note['title'] ?></a>
        </li>

    <?php endforeach; ?>
</main>

<?php require("views/parts/footer.view.php") ?>
