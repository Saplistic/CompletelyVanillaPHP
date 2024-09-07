<?php require("../views/parts/head.view.php") ?>

<?php require("../views/parts/header.view.php") ?>

<h1>Note</h1>
<div class="card">
    <div class="card-body">
        <h6><?= htmlspecialchars($note['title']) ?></h6>
        
        <p><?= htmlspecialchars($note['body']) ?></p>
        
        <a href="/notes">Go back</a>
    </div>
</div>

<?php require("../views/parts/footer.view.php") ?>
