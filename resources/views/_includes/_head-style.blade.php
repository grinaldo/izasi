<!-- Custom Theme Style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<style type="text/css">
.slide {
    position: relative;
    padding: 25vh 10%;
    min-height: 100vh;
    width: 100vw;
    box-sizing: border-box;
    box-shadow: 0 -1px 10px rgba(0, 0, 0, .7);
    transform-style: inherit;
}

.slide:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    box-shadow: 0 0 8px 1px rgba(0, 0, 0, .7);
}

.title {
    width: 50%;
    padding: 5%;
    border-radius: 5px;
    background: rgba(240,230,220, .7);
    box-shadow: 0 0 8px rgba(0, 0, 0, .7);
}

#title {
    background-image: url("https://lorempixel.com/640/480/abstract/6/");
    z-index:2;
}

#title h1 {
    transform: translateZ(.25px) scale(.75);
    transform-origin: 50% 100%;
}

#slide1:before {
    background-image: url("https://lorempixel.com/640/480/abstract/4/");
    transform: translateZ(-1px) scale(2);
}

</style>