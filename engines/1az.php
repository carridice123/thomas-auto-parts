<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../gallerytest.css">

</head>

<body>
    <section class="path">
        <ul class="breadcrumb">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../index.php">Next</a></li>
    </section>

    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="https://github.com/carridice123/gallery-test/blob/main/Pics/IMG-20240309-WA0035.jpg?raw=true">
                        <img src="https://github.com/carridice123/gallery-test/blob/main/Pics/IMG-20240309-WA0034.jpg?raw=true">
                        <img src="https://github.com/carridice123/gallery-test/blob/main/Pics/IMG-20240309-WA0033.jpg?raw=true">
                        <img src="https://github.com/carridice123/gallery-test/blob/main/Pics/IMG-20240309-WA0032.jpg?raw=true">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="https://github.com/carridice123/gallery-test/blob/main/Pics/IMG-20240309-WA0035.jpg?raw=true">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="https://github.com/carridice123/gallery-test/blob/main/Pics/IMG-20240309-WA0034.jpg?raw=true">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img src="https://github.com/carridice123/gallery-test/blob/main/Pics/IMG-20240309-WA0033.jpg?raw=true">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img src="https://github.com/carridice123/gallery-test/blob/main/Pics/IMG-20240309-WA0032.jpg?raw=true">
                        </a>
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="product-title">1AZ engine</h2>
                <a href="#" class="product-link">get it from our shop today</a>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="product-price">
                    <p class="last-price">Price: Negotiable</p>
                </div>

                <div class="product-detail">
                    <h2>about this item: </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
                    <ul>
                        <li>Color: <span>Black</span></li>
                        <li>Available: <span>Yes</span></li>
                        <li>Category: <span>Engine</span></li>
                        <li>location: <span>Main street Chapelton</span></li>
                        <li>Discout: <span>10% off when you follow us</span></li>
                    </ul>
                </div>

                <div class="purchase-info">
                    <input type="number" min="0" value="1">
                    <button type="button" class="btn">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                    <button type="button" class="btn">Compare</button>
                </div>

                <div class="social-links">
                    <p>Share At: </p>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <section class="test">
        <?php include '../pathnback.php';
        echo "<link rel='stylesheet' type='text/css' href='../pathnback.css' />"
        ?>
    </section>

    <script src='../gallerytest.js'></script>
</body>

</html>