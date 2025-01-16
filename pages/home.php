<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <?php include('../components/head/_head.php') ?>
    <!--    add styles for sections here-->

</head>
<body>
    <div class="wrapper">
        <?php include('../components/header/_header.php') ?>

        <main class="main">
            <section class="hero">
                <div class="hero__wrapper">
                    <picture class="hero__picture">
                        <img src="assets/img/hero-img-1-@2x.jpg" alt="hero img 1">
                    </picture>

                    <div class="hero__main">
                        <div class="hero__swiper swiper js-hero-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="sugar-card">
                                        <div class="sugar-card__main">
                                            <div class="sugar-card__title">
                                                PEARL
                                                SUGAR
                                            </div>
                                            <div class="sugar-card__content content-typ">
                                                <p>
                                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound.
                                                </p>
                                            </div>
                                            <div class="sugar-card__action">
                                                <a href="#" class="btn-rect btn-rect_yellow">
                                                    Shop now
                                                    <svg class="icon">
                                                        <use href="../assets/icons/sprite.svg#arrow-right"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <picture>
                                            <img src="assets/img/hero-img-2-@2x.jpg" alt="sugar 1">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('../components/footer/_footer.php') ?>
    </div>

    <?php include('../components/scripts/_scripts.php') ?>
    <!--add scripts for sections here-->
</body>
</html>