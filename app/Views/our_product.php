<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('template/meta') ?>
    <title>News & Career - Diamond</title>
    <?= $this->include('template/style') ?>
</head>

<body>
    <?= $this->include('template/preloader') ?>
    <?= $this->include('template/header') ?>

    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-lg-3">
                <nav class="sidebar">
                    <div class="text">Our Products</div>
                        <ul>
                            <li>
                            <a type="button" style="padding:5px" data-toggle="collapse" data-target="#tarpaulin-production-show" aria-expanded="false" aria-controls="tarpaulin-production-show"></i>Tarpaulin Production
                            <i class="fa fa-angle-right first" aria-hidden="true" style="margin-right: 10px"></i></a>
                            <div class="collapse multi-collapse" id="tarpaulin-production-show">
                                <ul>
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                </ul>
                            </div>
                            </li>

                            <li>
                            <a type="button" style="padding:5px" data-toggle="collapse" data-target="#related-product-show" aria-expanded="false" aria-controls="related-product-show"></i>Related Product
                            <i class="fa fa-angle-right first" aria-hidden="true" style="margin-right: 10px"></i></a>
                            <div class="collapse multi-collapse" id="related-product-show">
                                <ul>
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                </ul>
                            </div>
                            </li>

                            <div class="img-menu">
                            <img width="100%"src="images/company-profile-image.png" alt="Photos not already" style="margin-top: 30px">
                                <a href="#" style="margin-top: 20px">Company Profile<i class="fa fa-angle-right first" aria-hidden="true" style="margin-left: 10px"></i></a>
                            </div>

                            <div class="img-menu">
                            <img width="100%"src="images/tarpaulin4.png" alt="Photos not already" style="margin-top: 20px">
                                <a href="#" style="margin-top: 20px">Our Facilities<i class="fa fa-angle-right first" aria-hidden="true" style="margin-left: 10px"></i></a>
                                <p style="">
                                    Our skilled teams are dedicated and ready to make it done on time and on budget
                                </p>
                            </div>
                     </ul>
                </nav>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img-big">
                            <img style="width: 100%; max-height:400px; object-fit: cover;" src="images/tarpaulin4.png" alt="photo not already">
                            <p><h5>Our skilled teams are dedicated and ready to make it done on time and on budget.</h3></p>
                            <hr>
                            <p>We are an integrated plastic supply company and manufacturer with strong focus in tarpaulin production and other related products, serving customers from Indonesia and foreign countries. <b>Over the past 4 years,</b> the company has developed into a market leading position of tarpaulin productions.</p>
                            <br>
                            <br>
                            <h4>Tarpaulin Production</h4>
                            <hr>
                            <p>Our products widely used in construction, agricutural, transportation industries, etc. Available in various sizes, specifications and colors in 2 x 100 meter rolls, jumbo rolls and finished tarpaulins sheets.</p>
                            <br>
                            <h4>Related Products</h4>
                            <hr>
                            <p>Coming Soon.</p>
                        </div>
                    </div>
                </div>               
        </div>
    </div>

    <?= $this->include('template/script') ?>

    
</body>
</html>