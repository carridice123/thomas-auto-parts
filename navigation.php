<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/navigation.css">
</head>

<body>

    <div class="off-screen-menu">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">contact</a></li>
        </ul>
    </div>



    <nav class="nav">
        <div class="logoholder">
            <img src="./public/autologonormalred.jpg" alt="Thomas Auto Parts Logo" class="logoimg">
        </div>
        <div class="ham-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <section class="sectionafternav">
        <div class="biggerlogo">
            <img src="./public/autologored.jpg" alt="" class="biggerlogoimg">
        </div>
    </section>
    <section class="imgandsearchbar">
        <input type="text" placeholder="Quickly find your autoparts" class="search">
        <div class="shopimgholder">
            <img src="./public/thomasusedparts2.jpg" alt="picture of the business" class="shopimg">
        </div>
    </section>
    <?php
    include 'gallery.php';
    ?>
    <section class="belowgallery">

    </section>
    <script src="./js/navigation.js" defer></script>
</body>

</html>