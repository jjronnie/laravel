<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Horizon Trips and Tours</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel="stylesheet" href="css/responsive.css" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="img/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="img/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="img/favicon-16x16.png"
        />
        <link rel="manifest" href="/site.webmanifest" />
    </head>
    <body
        onload='if (window.location.href.substr(window.location.href.length - 6) == "#about") { introAboutLogoTransition(); }'
    >
    @yield('content')



    <script>
        const menuBtn = document.querySelector(".menu-btn");
        const navlinks = document.querySelector(".nav-links");

        menuBtn.addEventListener("click", () => {
            navlinks.classList.toggle("mobile-menu");
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/script.js"></script>




</body>
</html>