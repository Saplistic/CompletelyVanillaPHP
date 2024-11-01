<?php require viewPath("parts/head") ?>
<?php require viewPath("parts/header") ?>

<h1>Edit Note</h1>

<form method="POST" action="/note?id=<?= $note['id'] ?>" class="my-3" novalidate>
    <div class="col-md-4 mb-2">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($_POST['title'] ?? $note['title']) ?>" id="title" required>
        <?= HTMLDisplayErrorMsg('title') ?>
    </div>

    <div class="col-md-4 mb-4">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" name="body" id="body" required><?= htmlspecialchars($_POST['body'] ?? $note['body']) ?></textarea>
        <?= HTMLDisplayErrorMsg('body') ?>
    </div>

    <div class="col-md-4">
        <input type="hidden" name="_method" value="PATCH">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<a href='/note?id=<?= $note['id'] ?>'>Go back</a>

<?php require viewPath("parts/footer") ?>
