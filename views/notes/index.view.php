<?php require viewPath("parts/head") ?>
<?php require viewPath("parts/header") ?>

<h1>Notes</h1>

<ul class="list-group m-3">
    <?php foreach ($notes as $note) : ?>
        <li class="list-group-item">
            <a href="/note?id=<?= $note['id']?>"><?= htmlspecialchars($note['title']) ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<a href="/note/create" class="btn btn-primary">Create note</a>

<?php require viewPath("parts/footer") ?>