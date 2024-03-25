<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>

<body>
    <?php
    include "./nav2.php" ?>
    <!-- main slider after nav -->
    <section class="mainslider">
        <div class="main-wrapper">
            <!-- <div class="slider-btns">
                <span id="prev-btn"><i class="fa-solid fa-chevron-left"></i></span>
                <span id="next-btn"><i class="fa-solid fa-angle-right greaterthan"></i></span>
            </div> -->
            <div class="slider-wrapper">
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
                <div class="slides">
                    <img src="./public/thomasusedparts2.jpg" alt="Thomas Auto Parts shop" class="sliderimg">
                </div>
                <div class="slides">
                    <img src="./public/thomasusedparts2.jpg" alt="image" class="sliderimg">
                </div>

            </div>
        </div>
    </section>
    <section class="body">
        <section class="enginenosecut">
            <section>
                <div class="engines">
                    <a href="#" class="enginelink">
                        <h2 class="enginetext">Engines</h2>

                    </a>
                    <a href="#" class="moreengines">(more)</a>
                </div>
                <ul class="enginelist">
                    <li><a href="./engines/1az.php" class="enginename">1AZ</a></li>
                    <li><a href="./engines/1kr.php" class="enginename">1KR</a></li>
                    <li><a href="./engines/1nz.php" class="enginename">1NZ</a></li>
                    <li><a href="./engines/2nzprboxtype.php" class="enginename">2NZ Probox type</a></li>
                    <li><a href="./engines/2zr.php" class="enginename">2ZR</a></li>
                    <li><a href="./engines/cr12.php" class="enginename">CR12</a></li>
                    <li><a href="./engines/hr15.php" class="enginename">HR15</a></li>
                    <li><a href="./engines/l13ahondafit.php" class="enginename">L13A Honda fit</a></li>
                    <li><a href="./engines/qg15.php" class="enginename">QG15</a></li>
                    <li><a href="./engines/sr20.php" class="enginename">SR20</a></li>
                </ul>

            </section>

            <section>
                <div class="nosecut">
                    <a href="#" class="nosecutlink">
                        <h2 class="nosetext">Nose Cut</h2>

                    </a>
                    <a href="#" class="more">(more)</a>


                </div>
                <ul class="nosecutlist">
                    <li><a href="#" class="nosecutname">nosecut</a></li>
                    <li><a href="#" class="nosecutname">nosecut</a></li>
                    <li><a href="#" class="nosecutname">nosecut</a></li>
                    <li><a href="#" class="nosecutname">nosecut</a></li>
                    <li><a href="#" class="nosecutname">nosecut</a></li>
                    <li><a href="#" class="nosecutname">nosecut</a></li>
                    <li><a href="#" class="nosecutname">nosecut</a></li>
                </ul>

            </section>

        </section>
        <section class="trunkanddoor">
            <section>
                <div class="trunk">
                    <a href="#" class="trunklink">
                        <h2 class="trunktext">Trunk</h2>

                    </a>
                    <a href="#" class="more">(more)</a>


                </div>
                <ul class="trunklist">
                    <li><a href="#" class="trunkname">trunk</a></li>
                    <li><a href="#" class="trunkname">trunk</a></li>
                    <li><a href="#" class="trunkname">trunk</a></li>
                    <li><a href="#" class="trunkname">trunk</a></li>
                    <li><a href="#" class="trunkname">trunk</a></li>
                    <li><a href="#" class="trunkname">trunk</a></li>
                    <li><a href="#" class="trunkname">trunk</a></li>
                </ul>

            </section>
            <section>
                <div class="doors">
                    <a href="#" class="doorlink">
                        <h2 class="nosetext">Doors</h2>

                    </a>
                    <a href="#" class="more">(more)</a>


                </div>
                <ul class="doorlist">
                    <li><a href="#" class="doorname">nosecut</a></li>
                    <li><a href="#" class="doorname">nosecut</a></li>
                    <li><a href="#" class="doorname">nosecut</a></li>
                    <li><a href="#" class="doorname">nosecut</a></li>
                    <li><a href="#" class="doorname">nosecut</a></li>
                    <li><a href="#" class="doorname">nosecut</a></li>
                    <li><a href="#" class="doorname">nosecut</a></li>
                </ul>

            </section>

        </section>
        <!-- become a member section should be like a 'what you get when you become a member?' should be a drop down list   -->
        <section class="contactus">
            <?php include 'contactus.php' ?>

        </section>
        <section class="footer">
            <?php include 'footer.php' ?>
        </section>
        <!-- membership section should have car type and year look at berts own -->
    </section>

    <!-- when customers sign up membership they should get access to whatsapp group -->
    <!-- get the image of the evergreen container saying "cant get the parts for your car? order it in the next container" -->
    <!-- get the image of the shop to and use css blur them -->
    <script src="./js/index.js" defer></script>
</body>

</html>