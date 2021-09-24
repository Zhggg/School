@extends('Frontend.app')
<style>
    .gallery .first{
        height: 30vh;
        width: 1519.5px;
        padding: 0px 50px;  
    }

    .first h1{
        font-family: Georgia;
        font-size: 40px;
        color: #003797;
        padding-top: 150px; 
    }

    .events .container{
        width: 1519.5px;
        height: 1150px;
        background-color: #E1E2E1;
    }
    .events main{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(3, 1fr);
        grid-gap: 1rem 1rem;
        width: 1200px;
        margin-left: 35px;
        padding: 10px 0px;
    }

    .events .e1{
        background-color: #ffffff;
        border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        text-align: center;
        padding: 10px 0px;
    }

    .e1 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e1 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e1 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }
    .events .e2{
        background-color: #ffffff;
         border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        text-align: center;
        padding: 10px 0px;
    }

    .e2 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e2 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e2 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e3{
        background-color: #ffffff;
         border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        padding: 10px 0px;
        text-align: center;
    }

    .e3 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e3 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e3 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e4{
        background-color: #ffffff;
        border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        padding: 10px 0px;
        text-align: center;
    }

    .e4 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e4 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }

    .e4 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e5{
        background-color: #ffffff;
        border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        text-align: center;
        padding: 10px 0px;
    }

    .e5 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e5 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e5 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }
    .events .e6{
        background-color: #ffffff;
         border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        text-align: center;
        padding: 10px 0px;
    }

    .e6 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e6 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e6 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e7{
        background-color: #ffffff;
         border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        padding: 10px 0px;
        text-align: center;
    }

    .e7 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e7 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e7 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e8{
        background-color: #ffffff;
        border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        padding: 10px 0px;
        text-align: center;
    }

    .e8 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e8 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }

    .e8 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e9{
        background-color: #ffffff;
        border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        text-align: center;
        padding: 10px 0px;
    }

    .e9 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e9 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e9 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }
    .events .e10{
        background-color: #ffffff;
         border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        text-align: center;
        padding: 10px 0px;
    }

    .e10 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e10 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e10 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e11{
        background-color: #ffffff;
         border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        padding: 10px 0px;
        text-align: center;
    }

    .e11 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e11 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e11 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e12{
        background-color: #ffffff;
        border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        padding: 10px 0px;
        text-align: center;
    }

    .e12 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .e12 h5{
        font-family: Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }

    .e12 p{
        font-family: Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

</style>
@section('content')
<div class="events">
    <div class="container" >
        <div class="first" style="background-color:#0061c95e;">
            <h1><b>Home/Events</b></h1>
        </div>
        <div>
            <main>
                <div class="e1">
                    <i class="fas fa-volleyball-ball"></i>
                    <h5>Sports</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e2">
                    <i class="fas fa-route"></i>
                    <h5>Tours</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e3">
                    <i class="fas fa-glass-cheers"></i>
                    <h5>Programs</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e4">
                    <i class="fas fa-tv"></i>
                    <h5>Labs</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e5">
                    <i class="fas fa-user-cog"></i>
                    <h5>Teachers Meeting</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e6">
                    <i class="far fa-handshake"></i>
                    <h5>Parents Meetings</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e7">
                    <i class="fas fa-award"></i>
                    <h5>Price Distrubtion</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e8">
                    <i class="fas fa-diagnoses"></i>
                    <h5>Exams</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e9">
                    <i class="fas fa-poll"></i>
                    <h5>Exams Result</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e10">
                    <i class="fas fa-hamburger"></i>
                    <h5>Picnic</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e11">
                    <i class="fas fa-brain"></i>
                    <h5>Quiz</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
                <div class="e12">
                    <i class="fas fa-heartbeat"></i>
                    <h5>Health Checkup</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                </div>
            </main> 
        </div>

    </div>
</div>    
@endsection