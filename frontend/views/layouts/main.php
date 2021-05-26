<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/struct.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <header class="header" id="company">
        <div class="container">
            <?php if( Yii::$app->session->hasFlash('success') ): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo Yii::$app->session->getFlash('success'); ?>
                </div>
            <?php endif;?>
            <div class="header__top">
                <a href="/">
                    <img class="header__logo" src="/img/new/Frame 2290.svg" alt="logo">
                </a>
                <div class="header__menu menu">
                    <div class="menu__icon icon-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="menu__body">
                        <nav class="menu__nav">
                            <ul class="menu__list">
                                <li class="menu__item"><a href="/#company " class="menu__link to-decisions">О компании</a></li>
                                <li class="menu__item"><a href="/#advantages " class="menu__link to-decisions">Цены</a></li>
                                <li class="menu__item"><a href="/#decisions" class="menu__link to-vacancies">Услуги</a></li>
                                <li class="menu__item"><a href="/#contacts" class="menu__link to-contacts">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header__phone">
                    <div class="phone">
                        <img src="img/phone.svg" alt="">
                        <a href="tel:+79313009924" class="phone__number">+7 931 300 99 24</a>
                    </div>
                </div>
            </div>
            <div class="header__content">
                <div class="header__info">
                    <h1 class="header__title">Современные digital решения для вашего бизнеса</h1>
                    <p class="header__descr">
                        Мы полносервисная digital-компания с 10-летним опытом. Разрабатываем, интегрируем и продвигаем web-проекты разной масштабности и для разных отраслей. Помогаем решать задачи вашего бизнеса, больше зарабатывать и повышать лояльность клиентов.
                    </p>
                    <a href="#" class="header__button btn">Подробнее</a>
                </div>
                <div class="header__image">
                    <img src="img/new/IMG/10.svg" alt="">
                </div>
            </div>
        </div>
    </header>

    <main>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </main>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__row">
<!--            <img src="/img/new/Frame 2290.png" alt="" class="footer__logo">-->
            <div class="footer__box">
                <div class="footer__info">
                    <div class="footer__addr footer__contacts">Контакты</div>
                </div>
                <div class="footer__menu">
                    <div class="footer__col">
                        <a href="#company" class="footer__link to-company">О компании</a>
                        <a href="#advantages" class="footer__link to-decisions">Цены</a>
                    </div>
                    <div class="footer__col">
                        <a href="#vacancies" class="footer__link to-vacancies">Услуги</a>
                        <a href="#contacts" class="footer__link to-contacts">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">© ASNagensy.ru  Все права защищены.</div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
