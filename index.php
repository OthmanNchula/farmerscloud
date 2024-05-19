<?php include('navbar.php') ?>

<body>
    <!--Search bar starts-->
    <div class="container-fluid container-1 border mt-3" style="background-image: url('images/bg3.jpg'); background-size: cover; background-position: center;">
        <div class="ms-5 mt-5">
            <p class="text-dark">Click <a href="#" class="text-danger">here</a> to sell your product</p>
        </div>
        <div class="container mt-5">
            <form class="form-1 row g-2 align-items-center">
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="location" name="location" placeholder="I am looking for">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="location" name="locality" placeholder="Location">
                </div>
                <div class="col-sm-3">
                    <select type="number" class="form-control" id="distance" name="distance">
                        <option style="font-size: 14px" value="" selected>
                            <p>Distance</p>
                        </option>
                        <option value="5">
                            <p>+5KM</p>
                        </option>
                        <option value="10">
                            <p>+10KM</p>
                        </option>
                        <option value="20">
                            <p>+20KM</p>
                        </option>
                        <option value="50">
                            <p>+50KM</p>
                        </option>
                        <option value="100">
                            <p>+100KM</p>
                        </option>
                        <option value="500">
                            <p>+500KM</p>
                        </option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <button type="submit" class=" btn-outline-success btn-lg btn-block">Search</button>
                </div>
            </form>
        </div>
    </div>
    <!--Search bar ends-->

    <!-- Products Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-success px-3">Products</h6>
                <h1 class="mb-5">Featured Product</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/coffee.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Coffee</small>
                            <small class="flex-fill text-center border-end py-2">KG:200</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-map-marker-alt text-success me-2"></i>Rungwe,Mbeya</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">TSH 100,000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-success px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-success px-3" style="border-radius: 0 30px 30px 0;">Request Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/maize.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Maize</small>
                            <small class="flex-fill text-center border-end py-2">KG:600</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-map-marker-alt text-success me-2"></i>Tandahimba,Mtwara</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">TSH 50,000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-success px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-success px-3" style="border-radius: 0 30px 30px 0;">Request Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/potatoes.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Potatoes</small>
                            <small class="flex-fill text-center border-end py-2">KG:500</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-map-marker-alt text-success me-2"></i>Kilosa,Morogoro</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">TSH 70,000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                                <small class="fa fa-star text-success"></small>
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-success px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-success px-3" style="border-radius: 0 30px 30px 0;">Request Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <!--Button Start -->
    <div class="container text-center ">
        <a href="market.php" class="btn btn-outline-success" role="button">ALL PRODUCTS</a>
    </div><br>
    <!--Button End-->

    <!--Request Start-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-success px-3">Requests</h6>
                <h1 class="mb-5">View Requests</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Coffee</small>
                            <small class="flex-fill text-center border-end py-2">KG:300</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-map-marker-alt text-success me-2"></i>Dodoma</small>
                        </div>
                        <div class="text-center p-4">
                            <p>I need a supplier of coffee 300kg at TSH350,000. We can negotiate.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-success px-3 border-end" style="border-radius: 20px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Rice</small>
                            <small class="flex-fill text-center border-end py-2">KG:950</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-map-marker-alt text-success me-2"></i>Mwanza</small>
                        </div>
                        <div class="text-center p-4">
                            <p>I need a supplier of coffee 300kg at TSH350,000. We can negotiate.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-success px-3 border-end" style="border-radius: 20px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Maize</small>
                            <small class="flex-fill text-center border-end py-2">KG:100</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-map-marker-alt text-success me-2"></i>Iringa</small>
                        </div>
                        <div class="text-center p-4">
                            <p>I need a supplier of maize 100kg at TSH50,000.Payments after delivery</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-success px-3 border-end" style="border-radius: 20px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Request End-->
    <!--Button Start -->
    <div class="container text-center ">
        <a href="buyer_req.php" class="btn btn-outline-success" role="button">ALL REQUESTS</a>
    </div><br>
    <!--Button End-->
    <?php include('footer.php') ?>
</body>

</html>