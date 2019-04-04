<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vikre</title>
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
            <img src="images/logo.png" width="180" height="180" alt="logo">
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


<div class="jumbotron">
    <div class="col-md-3 offset-md-3">
        <h2>Vikre Tour</h2>
    </div>

    <div id="subtext" class="row">
        <div class="col-md-4 offset-md-2 text-center">
            <img src="images/logo_vikre.png" alt="logo" class="img-fluid">
            <p>Vikre distills the best of the pristine beauty of Lake Superior, the North
                Woods and the Boundary Waters into flavors so thoughtful and innovative it
                will keep you coming back for more. Founded in 2012, Vikre began foraging
                the Northwoods for wild botanicals; using local and organic grains, handcrafted
                Minnesota oak barrels, and the clean, cold water of Lake Superior.
                Vikre has been winning statewide accolades for some time and has won medals
                from the American Craft Distiller’s Association and they took first place in a USA
                Today’s 10 Best Readers’ Choice award for best craft specialty spirits.  You can
                visit them in their Distillery Visitor Center and Cocktail Room and see for yourself!
            </p>
        </div>
        <div class="col-md-4 offset-md-6 text-center">
            <img src="images/vikre_landingImage.jpg" width="400" height="400" alt="logo" class="img-fluid">
        </div>
    </div>
    <div class="col-md-4 offset-md-2">
        <p class="lead text-center">
            <a class="btn btn-primary btn-lg" href="http://www.vikredistillery.com/" role="button">Vikre Website</a>
        </p>
    </div>
</div>

<div class="container brews">
    <div class="row feature">
        <h3>Featured Brews</h3>
    </div>
    <div class="row text-center">
        <?php
        require('cms/database.php');

        $category_id = $_GET['category_id'];


        // Get name for current category
        $category = $db->prepare('select * from categories where categoryID = :category_id');
        $category->execute(array(':category_id' => $category_id));
        //

        //Fetches a row from a result set associated with a PDOStatement object.

        $category_row = $category->fetch();
        $category_name = $category_row['categoryName'];

        // Get products by category
        $products = $db->prepare('select * from products where categoryID = :category_id');
        $products->execute(array(':category_id' => $category_id));
        ?>
        <?php foreach ($products as $product) : ?>
            <div class="col-sm">
                <a href="item.php?product_id=<?php echo $product['productID']; ?>">
                    <img src="sm_images/<?php echo $product['productID']; ?>.<?php echo $product['file_ext']; ?>" width="180" alt="beer" class="img-responsive"></a>
                <h4 class="imagestxt"><?php echo $product['productName']; ?></h4>
            </div>
        <?php endforeach; ?>
<!--        <div class="col-sm">-->
<!--            <a href="singleimagecd.html">-->
<!--                <img src="images/vikre_juniperGin.jpg" width="180" alt="beer" class="img-responsive"></a>-->
<!--            <h4 class="imagestxt">Boreal Juniper Gin</h4>-->
<!--        </div>-->
<!--        <div class="col-sm">-->
<!--            <a href="singleimagecd.html">-->
<!--                <img src="images/vikre_sugarbrush.png" width="180" alt="beer" class="img-responsive"></a>-->
<!--            <h4 class="imagestxt">Sugarbush Whiskey</h4>-->
<!--        </div>-->
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