<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?= $this->include('template/meta') ?>
    <?= $this->include('template/style') ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Facilities - Diamond</title>
</head>
<body>

    <?= $this->include('template/preloader') ?>
    <?= $this->include('template/header') ?>

    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-lg-3">
                <nav class="sidebar">
                    <div class="text">Our Facilities</div>
                    <ul>
                    <li>
                            <a type="button" style="padding:5px" data-toggle="collapse" data-target="#production-yards-show" aria-expanded="false" aria-controls="production-yards-show"></i>Production Yards
                            <i class="fa fa-angle-right first" aria-hidden="true" style="margin-right: 10px"></i></a>
                            <div class="collapse multi-collapse" id="production-yards-show">
                                <ul>
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a type="button" style="padding:5px" data-toggle="collapse" data-target="#workshops-show" aria-expanded="false" aria-controls="workshops-show"></i>Workshops
                            <i class="fa fa-angle-right first" aria-hidden="true" style="margin-right: 10px"></i></a>
                            <div class="collapse multi-collapse" id="workshops-show">
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
                                <a href="#" style="margin-top: 20px">Our Product<i class="fa fa-angle-right first" aria-hidden="true" style="margin-left: 10px"></i></a>
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
                        </div>
                    </div>
                </div>                    

                <div class="row">
                    <div class="col-lg-6">
                        <h3 style="margin-top:30px">
                            Production Yards
                        </h3>
                        <hr height="12px">
                        <p>
                            <strong>
                                Bonded Area - 
                            </strong>
                        </p>
                        <img style="width: 100%; max-height:100px; object-fit: cover;" src="images/bonded-area.jpg" alt="photo not already">
                    </div>

                    <div class="col-lg-6">
                        <h3 style="margin-top:30px">
                            Workshops
                        </h3>
                        <hr>
                        <p>
                            <strong>
                            Machining Workshop -
                            </strong>
                        </p>
                    <img style="width: 100%; max-height:100px; object-fit: cover;" src="images/machining-workshop.jpg" alt="photo not already">
                    </div>
                </div>
            </div>



        </div>
    </div>


    <?= $this->include('template/script') ?>
</body>
</html>