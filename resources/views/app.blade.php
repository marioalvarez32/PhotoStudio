<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Foto Estudio Chino Quintanilla">
        <meta name="author" content="Mario Alvarez">
        <title>Chino Quintanilla</title>
        <!-- Latest compiled and minified CSS-->
        <link rel='stylesheet' href='{{asset('/css/purecss_minified.css')}}' type='text/css' /> 
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        @yield('styles')
        
        <style>
            @-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spin{0%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg)}}#loader-wrapper,body,html{height:100%;width:100%}#loader-wrapper{position:fixed;top:0;left:0;z-index:9999}#loader,#loader-center{position:absolute;left:50%;top:50%;border-radius:50%}#loader{display:block;border:0 solid transparent;border-top-color:#3498db;-webkit-animation:spin 3s linear infinite;animation:spin 3s linear infinite;background-image:url(../images/loader.png);background-repeat:no-repeat;background-size:auto;width:150px;height:150px;margin:-75px 0 0 -75px;z-index:1001}#loader-center{height:100px;width:100px;margin:-50px 0 0 -50px;z-index:1002;background-color:#222}#loader-wrapper .loader-section{position:fixed;top:0;width:51%;height:100%;background:#222;z-index:1000;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}#loader-wrapper .loader-section.section-left{left:0}#loader-wrapper .loader-section.section-right{right:0}.loaded #loader-wrapper .loader-section.section-left,.loaded #loader-wrapper .loader-section.section-right{-webkit-transform:translateX(-100%);-ms-transform:translateX(-100%);transform:translateX(-100%);-webkit-transition:all .3s .2s cubic-bezier(.645,.045,.355,1);transition:all .3s .2s cubic-bezier(.645,.045,.355,1)}.loaded #loader-wrapper .loader-section.section-right{-webkit-transform:translateX(100%);-ms-transform:translateX(100%);transform:translateX(100%)}.loaded #nav{display:block}.loaded #loader{opacity:0;-webkit-transition:all .1s ease-out;transition:all .1s ease-out}.loaded #loader-center{opacity:0;-webkit-transition:all .4s ease-out;transition:all .4s ease-out}.loaded #loader-wrapper{visibility:hidden;-webkit-transform:translateY(-100%);-ms-transform:translateY(-100%);transform:translateY(-100%);-webkit-transition:all .3s 1s ease-out;transition:all .3s 1s ease-out}.no-js #loader-wrapper{display:none}.no-js h1{color:#222}
        </style>
        @yield('scripts')
    </head>
    <body>
        @yield('nav-home')
        
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>

        <div class="nav">
            <div class="test"><a href="/" ><img id ="nav-logo" alt="Studio Logo" src="images/logo.svg" alt=""></a></div>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </body>
    <script>
    $(window).bind("load", function () {
        $('body').addClass('loaded');
    });

    isInViewport();
    $('img').on('dragstart', function(event) { event.preventDefault(); });
    function isInViewport(){
        
        var elementTop = $('.wrapper').offset().top;
        var elementBottom = elementTop + $('.wrapper').outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        if(elementBottom > viewportTop && elementTop < viewportBottom){
            $('.nav').fadeOut();
        }else{
            $('.nav').fadeIn();
        }
    }

    $(window).on('resize scroll', function () {
        isInViewport();
    });
    </script>

</html>
