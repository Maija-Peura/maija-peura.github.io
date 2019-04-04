

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lake Superior Spirits & Brews</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet" type="text/css">



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Acme|Quattrocento" rel="stylesheet">

    <!-- Favicon -->

</head>
<body>

<div class="container">
    <!-- logo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom">
        <a class="navbar-brand" href="index.php">
            <img class="img-responsive" src="images/logo.png" width="180" height="180" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.html">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="castledanger.php?category_id=11">Castle Danger <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="bentpaddle.php?category_id=10">Bent Paddle <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="vikre.php?category_id=12">Vikre <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Contact <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div id="myhero" class="container">
    <!-- Hero Image Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/vikre_hero.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/cd_hero.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/bp_taproom.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div id="main" class="container">
    <h1>Distilled Spirits & Craft Beer are our Specialty</h1>
    <p>Hop aboard the virtual bus and prepare to wet your whistle with these
        behind-the-scenes distilled spirit and craft beer adventures!</p><br>
    <p>Whether you’re an aficionado or simply excited to learn about these
        growing industries, our Tours provide fun and educational experiences
        that you won’t soon forget. Join our expert, local guides and get to know
        the people and places that make Duluth’s craft beer and spirits scene so amazing!</p>
</div>

<div id="tours" class="container">
    <div id="tourimg" class="row">
        <div class="col-sm">
            <div class="text-center">
                <h4>Castle Danger Tour</h4>
                <a href="castledanger.php?category_id=11" target="_blank" class="img-responsive">
                    <img id="cd" src="images/logo_cd.png" alt="logo">
                </a>
            </div>
        </div>


        <div class="col-sm">
            <div class="text-center">
                <h4>Bent Paddle Tour</h4>
                <a href="bentpaddle.php?category_id=10" target="_blank" class="img-responsive">
                    <img id="bp" src="images/logo_bp.jpg"  alt="logo">
                </a>
            </div>
        </div>

        <div class="col-sm">
            <div class="text-center">
                <h4>Vikre Tour</h4>
                <a href="vikre.php?category_id=12" target="_blank" class="img-responsive">
                    <img id="vikre" src="images/logo_vikre.png"  alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="bottomborder"></div>
    <footer class="navbar navbar-default navbar-static">
             <!--<div class="row">-->
                <div class="col-8">
                    <p>&copy; Copyright 2018. Maija Peura - student practice site. All Rights Reserved.</p>
                </div>
                <div class="col-4">
                    <ul id="social" class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/">
                            <img src="images/icon_fb.png" width="40" height="40" alt="facebook" class="img-responsive"></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.pinterest.com/">
                            <img src="images/icon_pinterest.png" width="40" height="40" alt="facebook" class="img-responsive"></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/">
                            <img src="images/icon_youtube.png" width="40" height="40" alt="facebook" class="img-responsive"></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://twitter.com//">
                            <img src="images/icon_twitter.png" width="40" height="40" alt="facebook" class="img-responsive"></a>
                        </li>
                    </ul>

                </div>
            <!--</div>-->

    </footer>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>