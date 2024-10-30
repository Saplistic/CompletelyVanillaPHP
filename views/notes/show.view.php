<?php require("../views/parts/head.view.php") ?>

<?php require("../views/parts/header.view.php") ?>

<h1>Note</h1>
<div class="card">
    <div class="card-body">
        <h6><?= htmlspecialchars($note['title']) ?></h6>
        
        <p><?= htmlspecialchars($note['body']) ?></p>
        
        <a href="/note/edit?id=<?= $note['id'] ?>" class="btn btn-primary d-block ms-2" style="float:right">Edit</a>

        <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger d-block" style="float:right">Delete</button>
        </form>

        <br><a href="/notes">Go back</a>
    </div>
</div>

<?php require("../views/parts/footer.view.php") ?>
