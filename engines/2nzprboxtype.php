<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../gallerytest.css">
</head>

<body>
    <?php
    include "nav2.php" ?>
    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="https://github.com/carridice123/gallery-test/blob/main/images/IMG-20240227-WA0067.jpg?raw=true">
                        <img src="https://github.com/carridice123/gallery-test/blob/main/images/IMG-20240227-WA0066.jpg?raw=true">
                        <img src="https://github.com/carridice123/gallery-test/blob/main/images/IMG-20240227-WA0060.jpg?raw=true">
                        <img src="https://github.com/carridice123/gallery-test/blob/main/images/IMG-20240227-WA0061.jpg?raw=true">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="https://github.com/carridice123/gallery-test/blob/main/images/IMG-20240227-WA0067.jpg?raw=true">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="https://github.com/carridice123/gallery-test/blob/main/images/IMG-20240227-WA0066.jpg?raw=true">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img src="https://github.com/carridice123/gallery-test/blob/main/images/IMG-20240227-WA0060.jpg?raw=true">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img src="https://github.com/carridice123/gallery-test/blob/main/images/IMG-20240227-WA0061.jpg?raw=true">
                        </a>
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="product-title">2NZ engine</h2>
                <a href="#" class="product-link">get it from our shop today</a>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>4.7(21)</span>
                </div>

                <div class="product-price">
                    <p class="last-price">Old Price: <span>$257.00</span></p>
                    <p class="new-price">New Price: <span>$249.00 (5%)</span></p>
                </div>

                <div class="product-detail">
                    <h2>about this item: </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
                    <ul>
                        <li>Color: <span>Black</span></li>
                        <li>Available: <span>in stock</span></li>
                        <li>Category: <span>Shoes</span></li>
                        <li>Shipping Area: <span>All over the world</span></li>
                        <li>Shipping Fee: <span>Free</span></li>
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
    <script src='../gallerytest.js'></script>
</body>
<!-- if there is not enough images for a parts add a request image button for that part or link to whatsapp -->

</html>