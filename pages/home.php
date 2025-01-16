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
                <div class="hero__container">
                    <div class="hero__wrapper">
                        <div class="hero__picture">
                            <picture>
                                <img src="../assets/img/hero-img-1-@2x.jpg" alt="hero img 1">
                            </picture>
                        </div>
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
                                            <picture class="sugar-card__picture">
                                                <img src="../assets/img/hero-img-2.png" alt="sugar 1">
                                            </picture>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="sugar-card">
                                            <div class="sugar-card__main">
                                                <div class="sugar-card__title">
                                                    test title
                                                </div>
                                                <div class="sugar-card__content content-typ">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, odio, officiis. Deleniti ducimus necessitatibus odio perferendis, perspiciatis tempora voluptatibus! Aperiam blanditiis cupiditate dolor, et fugiat illum non repudiandae sapiente sed.
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
                                            <picture class="sugar-card__picture">
                                                <img src="../assets/img/test-imh-2.png" alt="sugar 2">
                                            </picture>
                                        </div>
                                    </div>
                                </div>

                                <div class="hero__pagination js-hero-pagination"></div>
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