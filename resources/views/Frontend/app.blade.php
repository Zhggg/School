<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Template</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        :root{
        --primary-color: #0060c9;
        --secondary-color: #003797;
        --ancent-color: #78C0E0;
        --primary-text:#727272;
        --secondary-text: #000000;
        }

        /* top bar*/
        .topmenu .container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 55px;
            font-family: Georgia;
            font-size: 14px;
            color: #ffff;
        }

        .topmenu a{
            text-decoration: none;
            color: white;
            padding: 0px 10px;
        }

        /*nav-bar*/
        .mainmenu .container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 50px;
            font-family: Georgia;
            color: #fff;
        }

        .mainmenu a{
            text-decoration: none;
            color: white;
            font-size: 18px;
            padding: 5px 30px;
        }

        .mainmenu a:hover{
            color: var(--secondary-text);
        }

        /*footer*/
        .footer .container{
            font-family: Georgia;
            color: #fff;
            text-align: center;
            padding: 0px 0px;
        }

        .footer a{
            text-decoration: none;
            color: white;
            font-family: Georgia;
            font-size: 20px;
            padding: 0px 5px;
        }

        .footer a:hover{
            color: var(--secondary-text);
        }
        /*icon
        .icon i{
            font-size: 30px; 
            background-color: var(--secondary-color);
            border-radius: 100%;
            color: white;
            text-align: center;
            width: 70px;
            height: 70px;
        }

        .icon i:hover{
            color: var(--secondary-text);
        }
        */
    </style>
    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <!-- Top Menu -->
    <div class="topmenu" style="background-color: var(--secondary-color);">
        <div class="container">
            <div class="address"><address>Itahari-2 Tarahara</address></div>
            <div class="menu"style="margin-right: 15px;">
                <a href="/career">Career</a>
                <a href="/blog">Blog</a>
                <a href="/contact">Contact</a>
                <a href="/result">Exam Result</a>
            </div>
        </div>
    </div>
    <!-- Nav Bar -->
    <div class="mainmenu" style="background-color: var(--primary-color);">
        <div class="container">
            <div class="name">
                <h1 style="font-size: 30px; color: var(--Secondary-text);">School Template</h1>
            </div>
            <div class="navbar">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/gallery">Gallery</a>
                <a href="/events">Events</a>
                <a href="/facilities">Facilities</a>
            </div>
        </div>
    </div>

    <!-- icon
    <div class="icon">
        <div class="container" style="text-align: right; padding: 100px, 0px;">
            <div class="phone">
                <a href=""><i class="fas fa-phone-volume" style="color: white; padding: 20px;"></i></a>
            </div>
            <div class="question">
                <a href=""><i class="fas fa-question" style="color: white; padding: 20px;"></i></a>
            </div>
        </div>
    </div>
     -->

    <!-- main content -->
    @yield('content')

    <!-- footer -->
    <div class="footer" style="background-color: var(--primary-color);">
        <div class="container">
            <div class="name" style="font-size: 40px; color: var(--Secondary-text); padding: 15px 0px;"><b>School Template</b></div>
            <a href="mailto:schooltemplate@gmail.com" style="padding: 15px 0px; font-family: Arial; font-size: 16px;"><i>Schooltemplate@gmail.com</i></a>
            <div class="address" style="padding: 15px 0px;"><address>Itahari-2 Tarahara</address></div>
            <div class="connect" style="padding: 15px 0px;">
                <h5 style="font-family: Georgia; font-size: 25px;">Stay Connected</h5>
                <div style="padding: 15px 0px;">
                    <a href="https://en.wikipedia.org/wiki/History_of_Facebook" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://en.wikipedia.org/wiki/Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://en.wikipedia.org/wiki/Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://en.wikipedia.org/wiki/WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="copyright" style="padding: 15px 0px;">
                <p><i>Copyright &copy; 2021 All right reserved | This template is made by Rakish Rai (ZhG &hearts;)</i></p>
            </div>
        </div>
    </div>
</body>
</html>