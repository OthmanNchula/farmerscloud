<?php include('navbar.php') ?>

<section class="bg-image " style="background-image: url('images/bg2.jpg'); background-size: cover; background-repeat: no-repeat;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
    <div class="container h-100 mt-5 mb-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Fill Product Information</h2>

              <form action="insert_product.php" method="POST" enctype="multipart/form-data" class="mb-4">
                <div class="form-group">
                  <label for="title">Product Name:</label>
                  <input type="text" class="form-control" id="title" name="title" required>
                </div><br>

                <div class="form-group">
                  <label for="availability">When are your product available:</label>
                  <select class="form-control custom-select browser-default" name="availability">
                    <option value="immediately"> </option>
                    <option value="immediately">Immediately Availability</option>
                    <option value="later">Available at late date</option>
                  </select>
                </div><br>

                <div class="form-group">
                  <label for="description">Describe Your Product:</label>
                  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div><br>

                <div class="form-group">
                  <label for="pricing">Are you pricing per Unit or as a Whole?:</label>
                  <select class="form-control custom-select browser-default" name="availability">
                    <option value="immediately"> </option>
                    <option value="immediately">As a Whole</option>
                    <option value="later">Per Unit</option>
                  </select>
                </div><br>

                <div class="form-group">
                  <label for="country">Which region are your product(s) based from?:</label>
                  <input type="text" class="form-control" id="country" name="country">
                </div><br>

                <div class="form-group">
                  <label for="price">Enter Price:</label>
                  <input type="number" class="form-control" id="price" name="price" step="0.01">
                </div><br>

                <div class="form-group">
                  <label for="amount">Enter Amount:</label>
                  <input type="number" class="form-control" id="amount" name="amount">
                </div><br>

                <div class="form-group py-4">
                  <label for="photo">Photo:</label>
                  <input type="file" class="form-control-file" id="photo" name="photo">
                </div><br>

                <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Add your product</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<? include('footer.php') ?>

</body>

</html>