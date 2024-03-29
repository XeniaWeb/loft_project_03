<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная страница</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/libs.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/media.css">
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a href="/"><img src="<?php echo get_stylesheet_directory_uri()?>/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
                </div>
                <nav class="main-navigation">
                    <ul class="nav-list">
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Главная</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Полезная информация</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Последние акции</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">О сервисе</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Новости</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form class="search-form">
                    <input type="text" placeholder="Поиск..." class="search-form__input">
                    <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>
    <!-- header_end-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title-page">Последние новости и акции из мира туризма</h1>
                <div class="posts-list">
                    <!-- post-mini-->
                    <div class="post-wrap">
                        <div class="post-thumbnail"><img src="<?php echo get_stylesheet_directory_uri()?>/img/post_thumb/thumb_1.jpg" alt="Image поста" class="post-thumbnail__image"></div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date">29.07.2016</div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
                                    В германии завершается распродажа железнодорожных билетов от 19
                                    евро
                                </div>
                                <p>
                                    Идейные соображения высшего порядка, а также сложившаяся структура организации
                                    обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений
                                    развития...
                                </p>
                            </div>
                            <div class="post-content__post-control"><a href="#" class="btn-read-post">Читать далее >></a></div>
                        </div>
                    </div>
                    <!-- post-mini_end-->
                    <!-- post-mini-->
                    <div class="post-wrap">
                        <div class="post-thumbnail"><img src="<?php echo get_stylesheet_directory_uri()?>/img/post_thumb/thumb_2.jpg" alt="Image поста" class="post-thumbnail__image"></div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date">29.07.2016</div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
                                    В германии завершается распродажа железнодорожных билетов от 19
                                    евро
                                </div>
                                <p>
                                    Идейные соображения высшего порядка, а также сложившаяся структура организации
                                    обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений
                                    развития...
                                </p>
                            </div>
                            <div class="post-content__post-control"><a href="#" class="btn-read-post">Читать далее >></a></div>
                        </div>
                    </div>
                    <!-- post-mini_end-->
                    <!-- post-mini-->
                    <div class="post-wrap">
                        <div class="post-thumbnail"><img src="<?php echo get_stylesheet_directory_uri()?>/img/post_thumb/thumb_3.jpg" alt="Image поста" class="post-thumbnail__image"></div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date">29.07.2016</div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
                                    В германии завершается распродажа железнодорожных билетов от 19
                                    евро
                                </div>
                                <p>
                                    Идейные соображения высшего порядка, а также сложившаяся структура организации
                                    обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений
                                    развития...
                                </p>
                            </div>
                            <div class="post-content__post-control"><a href="#" class="btn-read-post">Читать далее >></a></div>
                        </div>
                    </div>
                    <!-- post-mini_end-->
                </div>
                <div class="pagenavi-post-wrap"><a href="#" class="pagenavi-post__prev-postlink"><i class="icon icon-angle-double-left"></i></a><span class="pagenavi-post__current">1</span><a href="#" class="pagenavi-post__page">2</a><a href="#" class="pagenavi-post__page">3</a><a href="#" class="pagenavi-post__page">...</a><a href="#" class="pagenavi-post__page">10</a><a href="#" class="pagenavi-post__next-postlink"><i class="icon icon-angle-double-right"></i></a></div>
            </div>
            <!-- sidebar-->
            <div class="sidebar">
                <div class="sidebar__sidebar-item">
                    <div class="sidebar-item__title">Теги</div>
                    <div class="sidebar-item__content">
                        <ul class="tags-list">
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">путешествия по россии</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">турция</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">гоа</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">авиабилеты</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">отели</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">европа</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">азия</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">тайланд</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">хостелы</a></li>
                            <li class="tags-list__item"><a href="#" class="tags-list__item__link">шоппинг</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar__sidebar-item">
                    <div class="sidebar-item__title">Категории</div>
                    <div class="sidebar-item__content">
                        <ul class="category-list">
                            <li class="category-list__item"><a href="#" class="category-list__item__link">
                                    Вылеты из
                                    столиц</a>
                                <ul class="category-list__inner">
                                    <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                                    <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                                </ul>
                            </li>
                            <li class="category-list__item"><a href="#" class="category-list__item__link">
                                    Вылеты из
                                    регионов</a>
                                <ul class="category-list__inner">
                                    <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                                    <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="content-footer">
            <div class="bottom-menu">
                <ul class="b-menu__list">
                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Главная</a></li>
                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Полезная информация</a></li>
                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Последние акции</a></li>
                    <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">О сервисе</a></li>
                </ul>
            </div>
            <div class="copyright-wrap">
                <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2016</a></div>
            </div>
        </div>
    </footer>
</div>
<!-- wrapper_end-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri()?>/js/main.js"></script>
</body>
</html>