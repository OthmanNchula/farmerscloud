<?php include('navbar.php') ?>

<body>
  <section class="bg-image "
    style="background-image: url('images/bg2.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
      <div class="container h-100 mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Sign Up</h2>

                <form action="logAct.php" method="POST" class="mb-4">
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Your Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="pwd" id="pwd" class="form-control form-control-lg" />
                    <label class="form-label" for="pwd">Password</label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" name="login_btn" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                  </div>

                  <p class="text-center text-muted mt-3 mb-0">Don't have an account? <a href="#" class="fw-bold text-body"><u>Register here</u></a></p>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include('footer.php') ?>
</body>

</html>