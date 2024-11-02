<?php view("parts/head.view.php", [
  'title' => 'Register',
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

              <h2 class="text-center mb-5">Create an account</h2>

              <form method="POST" action="/register">

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

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">
                    Already have an account? 
                    <a href="#" class="fw-bold text-body">
                        <u>Login here</u>
                    </a>
                </p>
                
              </form>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php require viewPath("parts/footer") ?>

