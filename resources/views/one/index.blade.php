<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset("images/icon.png")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/css/style.css")}}">
    <title>Eco Universe</title>
</head>
<body>
<div class="container">
    <div class="logotype">
        <p class="shadow text fadeInUpBig">Eco Universe</p>
    </div>
    <div class="planet-animation fadeInUpBig">
        <img src="{{asset("images/5.png")}}" alt="">
    </div>
    <div class="nextButton fadeInUpBig">
        <button class="learn-more ">
                <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
                </span>
            <a href="{{route('home')}}"><span class="button-text">Learn More</span></a>
        </button>
    </div>
</div>
</body>
</html>
