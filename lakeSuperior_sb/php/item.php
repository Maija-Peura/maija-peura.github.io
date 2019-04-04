<?php
//require('database.php');
//$query = 'select * from categories order by categoryName';
//$categories_menu = $db->query($query);
//
//?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Single Image</title>
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
<?php
require('cms/database.php');
$product_id = $_GET['product_id'];

$products = $db->prepare('select * from categories inner join products on categories.categoryID = products.categoryID where productID = :product_id');
//join those two tables together on those two id's.  it's syncing up categoryID (in products) with categoryID (in categories)
//:product_id = one product id
$products->execute(array(':product_id' => $product_id));

$product = $products->fetch();
//fetch turns it into an array
?>
<div class="container">
    <div id="sub" class="row">
<!--        <div class="col-sm-8"></div>-->
        <div class="col-md-4 offset-md-6 text-center">
        <h1><?php echo $product['categoryName']; ?></h1>
        </div>
    </div>

    <div class="row">
<!--        <div class="col-sm-8"></div>-->
        <div class="col-md-4 offset-md-6 text-center">
        <h3><?php echo $product['productName']; ?></h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="item.php">
                <img class="w-50 p-3 float-right img-fluid img-responsive" src="sm_images/<?php echo $product['productID']; ?>.<?php echo $product['file_ext']; ?>" alt="beer">
            </a>
            <!--</div>-->
        </div>
        <div class="col justify-content-center align-self-center">
            <p class="itemdesc"><?php echo $product['description']; ?></p>
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