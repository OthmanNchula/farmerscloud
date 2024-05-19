<?php include('navbar.php') ?>
<?php include('chartdb.php')?>

<!DOCTYPE HTML>
<html>

<head>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Product trending chart"
                },
                axisY: {
                    title: "Amount in Tsh"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.## tonnes",
                    dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

    <!-- New div container below the chart -->
    <div class="another-container">
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
</div>
<?php include('footer.php') ?>
</body>

</html>