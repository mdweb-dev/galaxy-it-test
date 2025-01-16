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

            <section class="baker">
                <div class="baker__switcher-buttons js-switcher-scroll">
                    <button class="btn-switch js-switcher-button active" data-related-class="baker-1">
                        Home baker
                    </button>
                    <button class="btn-switch js-switcher-button" data-related-class="baker-2">
                        <picture>
                            <img src="../assets/img/tab-icon.png" alt="baker-2">
                        </picture>
                        professional
                    </button>
                </div>
                <div class="baker__container">
                    <div class="baker__content content-switch js-switcher-content baker-1 active fade-in">
                        <div class="baker__swiper">
                            <div class="swiper js-baker-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="baker-card">
                                            <div class="baker-card__wrapper">
                                                <div class="baker-card__picture">
                                                    <a href="#">
                                                        <picture>
                                                            <img src="../assets/img/baker-img-1.jpg" alt="1">
                                                        </picture>
                                                    </a>
                                                    <div class="baker-card__discount label-discount">
                                                        -25%
                                                    </div>
                                                    <div class="baker-card__fav">
                                                        <button class="btn-favorite">
                                                            <svg class="icon">
                                                                <use href="../assets/icons/sprite.svg#favorite"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="baker-card__inner">
                                                    <div class="baker-card__title">
                                                        HVD-A57-Liege-Waffle-Iron
                                                    </div>
                                                    <div class="baker-card__row row-1">
                                                        <div class="baker-card__model">
                                                            model wedceat
                                                        </div>
                                                        <div class="baker-card__old-price">
                                                            $1,800,oo
                                                        </div>
                                                    </div>
                                                    <div class="baker-card__row row-2">
                                                        <div class="baker-card__rating">
                                                            <div class="rating-short">
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                            </div>
                                                            <span>(34)</span>
                                                        </div>
                                                        <div class="baker-card__new-price">
                                                            $1,401,6o
                                                        </div>
                                                    </div>
                                                    <div class="baker-card__row row-3">
                                                        <div class="baker-card__buy-text">
                                                            <p>Buy 4 or more $1,200,00</p>
                                                            <p>Limit 10 per order</p>
                                                        </div>
                                                        <div class="baker-card__buy-btn">
                                                            <form action="#">
                                                                <input type="text" hidden>
                                                                <button class="btn-addcart">
                                                                    <svg class="icon">
                                                                        <use href="../assets/icons/sprite.svg?v=1#basket"></use>
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="baker-card">
                                            <div class="baker-card__wrapper">
                                                <div class="baker-card__picture">
                                                    <a href="#">
                                                        <picture>
                                                            <img src="../assets/img/test-imh-2.png" alt="1">
                                                        </picture>
                                                    </a>
                                                    <div class="baker-card__discount label-discount">
                                                        -25%
                                                    </div>
                                                    <div class="baker-card__fav">
                                                        <button class="btn-favorite">
                                                            <svg class="icon">
                                                                <use href="../assets/icons/sprite.svg?v=1#favorite"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="baker-card__inner">
                                                    <div class="baker-card__title">
                                                        HVD-A57-Liege-Waffle-Iron
                                                    </div>
                                                    <div class="baker-card__row row-1">
                                                        <div class="baker-card__model">
                                                            model wedceat
                                                        </div>
                                                        <div class="baker-card__old-price">
                                                            $1,800,oo
                                                        </div>
                                                    </div>
                                                    <div class="baker-card__row row-2">
                                                        <div class="baker-card__rating">
                                                            <div class="rating-short">
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                            </div>
                                                            <span>(34)</span>
                                                        </div>
                                                        <div class="baker-card__new-price">
                                                            $1,401,6o
                                                        </div>
                                                    </div>
                                                    <div class="baker-card__row row-3">
                                                        <div class="baker-card__buy-text">
                                                            <p>Buy 4 or more $1,200,00</p>
                                                            <p>Limit 10 per order</p>
                                                        </div>
                                                        <div class="baker-card__buy-btn">
                                                            <form action="#">
                                                                <input type="text" hidden>
                                                                <button class="btn-addcart">
                                                                    <svg class="icon">
                                                                        <use href="../assets/icons/sprite.svg?v=1#basket"></use>
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="baker-card">
                                            <div class="baker-card__wrapper">
                                                <div class="baker-card__picture">
                                                    <a href="#">
                                                        <picture>
                                                            <img src="../assets/img/baker-img-3.jpg" alt="1">
                                                        </picture>
                                                    </a>
                                                    <div class="baker-card__discount label-discount">
                                                        -25%
                                                    </div>
                                                    <div class="baker-card__fav">
                                                        <button class="btn-favorite">
                                                            <svg class="icon">
                                                                <use href="../assets/icons/sprite.svg#favorite"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="baker-card__inner">
                                                    <div class="baker-card__title">
                                                        HVD-A57-Liege-Waffle-Iron
                                                    </div>
                                                    <div class="baker-card__row row-1">
                                                        <div class="baker-card__model">
                                                            model wedceat
                                                        </div>
                                                        <div class="baker-card__old-price">
                                                            $1,800,oo
                                                        </div>
                                                    </div>
                                                    <div class="baker-card__row row-2">
                                                        <div class="baker-card__rating">
                                                            <div class="rating-short">
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                            </div>
                                                            <span>(34)</span>
                                                        </div>
                                                        <div class="baker-card__new-price">
                                                            $1,401,6o
                                                        </div>
                                                    </div>
                                                    <div class="baker-card__row row-3">
                                                        <div class="baker-card__buy-text">
                                                            <p>Buy 4 or more $1,200,00</p>
                                                            <p>Limit 10 per order</p>
                                                        </div>
                                                        <div class="baker-card__buy-btn">
                                                            <form action="#">
                                                                <input type="text" hidden>
                                                                <button class="btn-addcart">
                                                                    <svg class="icon">
                                                                        <use href="../assets/icons/sprite.svg?v=1#basket"></use>
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="baker-card">
                                            <div class="baker-card__wrapper">
                                                <div class="baker-card__picture">
                                                    <a href="#">
                                                        <picture>
                                                            <img src="../assets/img/baker-img-4.jpg" alt="1">
                                                        </picture>
                                                    </a>
                                                    <div class="baker-card__discount label-discount">
                                                        -25%
                                                    </div>
                                                    <div class="baker-card__fav">
                                                        <button class="btn-favorite">
                                                            <svg class="icon">
                                                                <use href="../assets/icons/sprite.svg#favorite"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="baker-card__inner">
                                                    <div class="baker-card__title">
                                                        HVD-A57-Liege-Waffle-Iron
                                                    </div>
                                                    <div class="baker-card__row row-1">
                                                        <div class="baker-card__model">
                                                            model wedceat
                                                        </div>
                                                        <div class="baker-card__old-price">
                                                            $1,800,oo
                                                        </div>
                                                    </div>
                                                    <div class="baker-card__row row-2">
                                                        <div class="baker-card__rating">
                                                            <div class="rating-short">
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg class="icon">
                                                                    <use href="../assets/icons/sprite.svg#star"></use>
                                                                </svg>
                                                            </div>
                                                            <span>(34)</span>
                                                        </div>
                                                        <div class="baker-card__new-price">
                                                            $1,401,6o
                                                        </div>
                                                    </div>
                                                    <div class="baker-card__row row-3">
                                                        <div class="baker-card__buy-text">
                                                            <p>Buy 4 or more $1,200,00</p>
                                                            <p>Limit 10 per order</p>
                                                        </div>
                                                        <div class="baker-card__buy-btn">
                                                            <form action="#">
                                                                <input type="text" hidden>
                                                                <button class="btn-addcart">
                                                                    <svg class="icon">
                                                                        <use href="../assets/icons/sprite.svg?v=1#basket"></use>
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="baker__prev js-baker-prev">
                                <svg class="icon">
                                    <use href="../assets/icons/sprite.svg?v=2#arrow-left"></use>
                                </svg>
                            </button>
                            <button class="baker__next js-baker-next">
                                <svg class="icon">
                                    <use href="../assets/icons/sprite.svg?v=2#arrow-left"></use>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="baker__content content-switch js-switcher-content baker-2">
                        <p>
                            Content for Button 2
                        </p>
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