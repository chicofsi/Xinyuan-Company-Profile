<!DOCTYPE html>
<html lang="en">

<head>
    
    <?= $this->include('template/meta') ?>

    <title>Diamond</title>

    
    <?= $this->include('template/style') ?>

    

</head>
<body>

    
    <?= $this->include('template/preloader') ?>
    <?= $this->include('template/header') ?>
    
    

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:160px">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100 img-slider" src="images/home3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-slider" src="images/home1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-slider" src="images/home2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-slider" src="images/home4.jpg" alt="Second slide">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <img class="img-menu" src="images/company-profile-image.png">
                    <span>Company Profile</span>
                    <p>find out more about us and our vision</p>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <img class="img-menu" src="images/tarpaulin4.png">
                    <span>Our Product</span>
                    <p>we serve plastics supply and tarpaulin products</p>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <img class="img-menu" src="images/workshop1.jpg">
                    <span>Our Facilities</span>
                    <p>our facilities continues to develop to meet our customers requirements</p>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <img class="img-menu" src="images/tarpaulin2.png">
                    <span>Major Project</span>
                    <p>highlight and our track record to assure you of our capabilities</p>
                    
                </div>
            </div>
        </div>
    </div>

    



    <?= $this->include('template/script') ?>

    




</body>
</html>