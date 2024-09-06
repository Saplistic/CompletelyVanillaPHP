<?php require("views/parts/head.view.php") ?>

<?php require("views/parts/header.view.php") ?>

<main>
    <h1>Note</h1>
    <h6><?= $note['title'] ?></h6>
    <p><?= $note['content'] ?></p>

    <a href="/notes">Go back</a>
</main>

<?php require("views/parts/footer.view.php") ?>
