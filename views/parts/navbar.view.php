
<?php 
function isUrl($value) {
    return $_SERVER['REQUEST_URI'] == $value;
} 
?>

<div class="p-3 bg-dark text-white">
    <div class="container">        
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg> -->
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/home" class="nav-link px-2y <?= isUrl('/home') ? 'text-secondary' : 'text-white' ?>">Home</a></li>
                <li><a href="/notes" class="nav-link px-2 <?= isUrl('/notes') ? 'text-secondary' : 'text-white' ?>">Notes</a></li>
                <li><a href="/about" class="nav-link px-2 <?= isUrl('/about') ? 'text-secondary' : 'text-white' ?>">About</a></li>
                <li><a href="/contact" class="nav-link px-2 <?= isUrl('/contact') ? 'text-secondary' : 'text-white' ?>">Contact</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            <?php if ($_SESSION['user'] ?? false) : ?>
                <div class="align-self-center">
                    <p class=""><?= $_SESSION['user']['email'] ?></p>
                </div>
                <form action="/session" method="POST">
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-outline-light me-2">Log out</button>
                </form>
            <?php else : ?>
                <div class="text-end">
                    <a href="/login" class="btn btn-outline-light me-2">Login</a>
                    <a href="/register" class="btn btn-warning">Sign-up</a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>