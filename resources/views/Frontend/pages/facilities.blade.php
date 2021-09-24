@extends('Frontend.app')
<style>
    .facilities .first{
        height: 30vh;
        width: 1519.5px;
        padding: 0px 50px;  
    }

    .first h1{
        font-family: Georgia;
        font-size: 40px;
        color: #003797;
        padding-top: 150px;
        text-shadow: 5px 5px 5px rgb(155, 154, 154); 
    }

    .fcontent h1{
        font-family: Georgia;
        font-size: 35px;
        color: black;
        text-align: center;
        text-shadow: 5px 0px 5px rgb(155, 154, 154);
    }

    .facilities main{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        grid-template-rows: repeat(2,1fr);
        width: 1200px;
        text-align: center;
        margin: 10px 55px 0px 55px;
        grid-gap: 1rem 1rem;
    }

    main img{
        width: 300px;
        height: 40vh;
    }

   .f1,.f2,.f3,.f4,.f5,.f6,.f7,.f8{
        border: 1px solid #0061c95e;
        background-color: #E1E2E1;
        border-radius: 10px;
        padding: 20px 20px 0px 20px;
        box-shadow: 10px 10px 5px rgb(155, 154, 154);
    }

</style>
@section('content')
<div class="facilities">
    <div class="container" >
        <div class="first" style="background-color:#0061c95e;">
            <h1><b>Home/Facilities</b></h1>
        </div>
        <div class="fcontent">
            <h1><b>Our services</b></h1>
            <main>
                <div class="f1">
                    <div>
                        <img src="https://images.pexels.com/photos/618116/pexels-photo-618116.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=400" alt="">
                    </div>
                    <h1>Transports</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="f2">
                    <div>
                        <img src="https://images.pexels.com/photos/8926408/pexels-photo-8926408.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=400" alt="">
                    </div>
                    <h1>classrooms</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="f3">
                    <div>
                        <img src="https://images.pexels.com/photos/1370295/pexels-photo-1370295.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=400
                        " alt="">
                    </div>
                    <h1>Libaries</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="f4">
                    <div>
                        <img src="https://images.pexels.com/photos/7088524/pexels-photo-7088524.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=400
                        " alt="">
                    </div>
                    <h1>Computers Labs</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="f5">
                    <div>
                        <img src="https://images.pexels.com/photos/5726837/pexels-photo-5726837.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=400
                        " alt="">
                    </div>
                    <h1>Chemistry Labs</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="f6">
                    <div>
                        <img src="https://images.pexels.com/photos/6457514/pexels-photo-6457514.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=400
                        " alt="">
                    </div>
                    <h1>Canteens</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="f7">
                    <div>
                        <img src="https://images.pexels.com/photos/1171084/pexels-photo-1171084.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=400
                        " alt="">
                    </div>
                    <h1>Play Ground</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="f8">
                    <div>
                        <img src="https://images.pexels.com/photos/248547/pexels-photo-248547.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500
                        " alt="">
                    </div>
                    <h1>Sports</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection