<?php require("../views/parts/head.view.php") ?>

<?php require("../views/parts/header.view.php") ?>

<?php 

function HTMLDisplayError($name) 
{
    global $errors;

    if (isset($errors[$name])) {
        echo
        "<small class='text-danger'>
            {$errors[$name]}
        </small>";
    }
}

?>

<h1>Create Note</h1>

<form method="POST" action="/notes" class="my-3" novalidate>
    <div class="col-md-4 mb-2">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?= $_POST['title'] ?? '' ?>" id="title" required>
        <?= HTMLDisplayError('title') ?>
    </div>

    <div class="col-md-4 mb-4">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" name="body" id="body" required><?= $_POST['body'] ?? '' ?></textarea>
        <?= HTMLDisplayError('body') ?>
    </div>

    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>

<a href="/notes">Go back</a>

<?php require("../views/parts/footer.view.php") ?>
