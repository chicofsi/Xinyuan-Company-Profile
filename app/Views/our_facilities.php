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
            <div class="col-lg-4">
                <nav class="sidebar">
                    <div class="text">Our Facilities</div>
                    <ul>
                        <li>
                            <a href="#" class="production-yards-btn"></i>Production Yards
                            <i class="fa fa-angle-right first" aria-hidden="true" style="margin-right: 10px"></i></a>
                            <ul class="production-yards-show">
                            <li><a href="#">Menu 1</a></li>
                            <li><a href="#">Menu 2</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="production-yards-btn">Workshops
                            <i class="fa fa-angle-right second" aria-hidden="true" style="margin-right: 10px"></i></a>
                            <ul>
                            <li><a href="#">Menu 1</a></li>
                            <li><a href="#">Menu 2</a></li>
                            </ul>
                        </li>
                            
                        </li>
                        
                        <div class="img-menu">
                        <img src="images/slider1.jpg" alt="Photos not already">
                        </div>
                        
                    </ul>

                   

                </nav>
            </div>
        </div>
    </div>

<script>
    $('.production-yards-btn').click(function(){
        sidebar
    });
</script>

</body>
</html>