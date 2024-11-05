<?php view("parts/head.view.php", [
  'title' => 'Login',
  'resources' => '<link href="/css/register.css" media="all" rel="stylesheet">'
]); ?>

<?php require viewPath("parts/navbar") ?>

<main>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">

              <h2 class="text-center mb-5">Log in!</h2>

              <form action="/session" method="POST">

                <div class="form-outline mb-4">
                  <input name="email" type="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Your Email</label>
                  <?= HTMLDisplayErrorMsg('email') ?>
                </div>
                
                <div class="form-outline mb-4">
                  <input name="password" type="password" id="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Password</label>
                  <?= HTMLDisplayErrorMsg('password') ?>
                </div>

                <?= HTMLDisplayErrorMsg('user') ?>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>
                
              </form>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php require viewPath("parts/footer") ?>

