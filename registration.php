 <?php include('navbar.php')?>

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

                <form action="regAct.php" method="POST">

                  <div class="form-outline mb-4">
                  	<label class="form-label" for="form3Example1cg">first Name</label>
                    <input type="text" name="fname" id="" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                  	 <label class="form-label" for="form3Example3cg">last name</label>
                    <input type="text" name ="lastname" id="" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                  	  <label class="form-label" for="form3Example3cg">phone</label>
                    <input type="phone" name ="phone" id="" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                  	  <label class="form-label" for="form3Example3cg">Your Email</label>
                    <input type="email" name="email" id="" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="roleSelect">Are you a farmer (seller) or buyer?</label>
                    <select class="form-select form-select" name="type" id="roleSelect">
                      <option value="">Select Role</option>
                      <option value="farmer">I am a farmer (seller)</option>
                      <option value="buyer">I am a buyer</option>
                    </select>
                  </div>

                  <div class="form-outline mb-4">
                  	<label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" name="pwd" id="form3Example4cg" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                  	<label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    <input type="password" name="pwd" id="form3Example4cdg" class="form-control form-control-lg" />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                  	 <label class="form-check-label" for="form2Example3g">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" name="register_btn" 
                     class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                      class="fw-bold text-body"><u>Login here</u></a></p>

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