<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/csstwo/style.css")}}">
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <title>Eco Universe</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-nav">
            <a href="#!" class="logo">Eco Universe</a>
            <nav class="nav" id="nav">
                <ul class="nav-list">
                    <button class="btn"> Sign Up
                    </button>
                </ul>
            </nav>
        </div>
        <img src="{{asset("images/cloud.png")}}" alt="" class="cloud-animation">
        <div class="espaço"></div>
        <div class="globe"></div>
        <canvas class="webgl"></canvas>
        <div class="text-title">
            ИЗУЧИМ ЭКОЛОГИЮ ВМЕСТЕ..
        </div>
        <div class="text-introduction">
            <p> Добро пожаловать на наш сайт, посвященный изучению экологии – ключевого аспекта понимания и сохранения нашей планеты для будущих поколений.</p>
        </div>
        <div class="block-arrow">
            <img src="{{asset("images/down-arrow.png")}}" alt="" class="down-arrow">
        </div>
    </div>
</header>
<section class="services">
    <div class="container">
        <div class="title-servisec">
            Экологические проблемы и пути их решения..
        </div>
        <div class="services-row">
            <div class="services-card services-style  card-one" style="background: url({{asset("images/11.jpg")}});background-size: cover;">
                <a href="./climate/index.html">
                    <div class="services-card-img">
                        <p class="title-card">Изменение климата</p>
                    </div>
                </a>
            </div>
            <div class="services-card services-style card-two" style="background: url({{asset("images/12.jpg")}}); background-size: cover;">
                <a href="./water/index.html">
                    <div class="services-card-img">
                        <p class="title-card">Загрязнение водных ресурсов</p>
                    </div>
                </a>
            </div>
            <div class="services-card services-style card-three" style="background: url({{asset("images/13.jpg")}}); background-size: cover;">
                <a href="./air/index.html">
                    <div class="services-card-img">
                        <p class="title-card">Загрязнение воздуха</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="services-row">
            <div class="services-card services-style  card-four" style="background: url({{asset("images/14.jpeg")}}); background-size: cover;">
                <a href="./biodiversity/index.html">
                    <div class="services-card-img">
                        <p class="title-card">Утрата биоразно - <br>образия</p>
                    </div>
                </a>
            </div>
            <div class="services-card services-style card-five" style="background: url({{asset("images/15.jpg")}}); background-size: cover;">
                <a href="./resources/index.html">
                    <div class="services-card-img">
                        <p class="title-card">Истощение природных ресурсов</p>
                    </div>
                </a>
            </div>
            <div class="services-card services-style card-six" style="background: url({{asset("images/16.webp")}}); background-size: cover;">
                <a href="./thesoil/index.html">
                    <div class="services-card-img">
                        <p class="title-card">Загрязнение почвы</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="photo_slider">
    <div class="container">
        <div class="title-servisec">
            Самые запоминающиеся фото об экологических проблемах мира
        </div>
        <div class="slider middle">
            <div class="slides">
                <input type="radio" name="r" id="r1" checked>
                <input type="radio" name="r" id="r2">
                <input type="radio" name="r" id="r3">
                <input type="radio" name="r" id="r4">

                <div class="slide s1">
                    <img src="https://s9.travelask.ru/system/images/files/000/390/600/wysiwyg_jpg/2736.jpg?1509358083" alt="Изображение" class="img">
                </div>
                <div class="slide">
                    <img src="https://cdn.forbes.ru/files/c/760x508/photo_galleries/6.jpg__1569965843__20031.webp" alt="Изображение" class="img">
                </div>
                <div class="slide">
                    <img src="https://cdn.forbes.ru/files/c/760x508/photo_galleries/10.jpg__1569965843__12591.webp" alt="Изображение" class="img">
                </div>
                <div class="slide">
                    <img src="https://cdn.forbes.ru/files/c/760x508/photo_galleries/14.jpg__1569965843__17930.webp" alt="Изображение" class="img">
                </div>
            </div>
            <div class="navigation">
                <label for="r1" class="bar"></label>
                <label for="r2" class="bar"></label>
                <label for="r3" class="bar"></label>
                <label for="r4" class="bar"></label>
            </div>
        </div>



    </div>
</section>
<footer>
    <div class="container">
        <p style="color: white;">© Eco Universe 2023</p>
    </div>
</footer>
<script type="module" src="./client.js"></script>
<script src="js/three.js"></script>
</body>
</html>

