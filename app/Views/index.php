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
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100 img-slider" src="images/slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-slider" src="images/slider2.jpg" alt="Second slide">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <img class="img-menu" src="images/slider1.jpg">
                    <h4>Company Profile</h4>
                    <p>find out more about us and our vision</p>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <img class="img-menu" src="images/slider1.jpg">
                    <h4>Our Product</h4>
                    <p>we serve plastics supply and tarpaulin products</p>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <img class="img-menu" src="images/slider1.jpg">
                    <h4>Our Facilities</h4>
                    <p>our facilities continues to develop to meet our customers requirements</p>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="tab-menu">
                    <img class="img-menu" src="images/slider1.jpg">
                    <h4>Major Project</h4>
                    <p>highlight and our track record to assure you of our capabilities</p>
                    
                </div>
            </div>
        </div>
    </div>

    



    <?= $this->include('template/script') ?>

    




</body>
</html>