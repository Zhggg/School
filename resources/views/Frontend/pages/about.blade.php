@extends('Frontend.app')
<style>
    *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
    /* First content*/
    .about .first{
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

    .about .cont{
        display: flex;
        justify-content: space-between;
    }

    .cont .aboutimg{
        padding: 0px 50px;
    }

    .cont p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding: 10px 0px;
    }
    
    /*Third content*/
    .gallery h1{
        font-family:Georgia;
        font-size: 35px;
        color: black;
        text-align: center;
    }

    .gallery .container{
        border: 4px solid #0060c9;
        border-radius: 100px;
        box-shadow: 10px 10px 5px grey;
        margin-left: 60px;
        width: 1400px;
        height: 100vh;
    }
    main{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2,1fr);
        grid-gap: 1rem 1rem;
        width: 1200px;
        margin-left: 77px;
        padding: 10px 0px;
    }

    main img{
        width: 400px;
        height: 40vh;
        box-shadow: 10px 10px 5px rgb(155, 154, 154);
    }

    .gallery button{
        background-color: #00675b;
        height: 40px;
        width: 120px;
        border-radius: 100px;
        color: white;
        font-family:Georgia;
        font-size: 18px;
        margin-left: 625px;
        box-shadow: 5px 5px 5px rgb(97, 119, 89);
    }

    .gallery button:hover{
        background-color: #0060c9;
        color: white;
        box-shadow: 0px 0px 5px 5px #0099ff85;
    }
    /*Fourth Content*/
    
    .events h1{
        font-family:Georgia;
        font-size: 35px;
        color: black;
        text-align: center;
    }

    .events .container{
        width: 1519.5px;
        height: 60vh;
    }
    .events main{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: 1fr;
        grid-gap: 1rem 1rem;
        width: 1200px;
        margin-left: 35px;
        padding: 10px 0px;
    }

    .events .e1{
        background-color: #E1E2E1;
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
        font-family:Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e1 p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }
    .events .e2{
        background-color: #E1E2E1;
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
        font-family:Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e2 p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e3{
        background-color: #E1E2E1;
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
        font-family:Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .e3 p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events .e4{
        background-color: #E1E2E1;
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
        font-family:Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }

    .e4 p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .events button{
        background-color: #00675b;
        height: 40px;
        width: 120px;
        border-radius: 100px;
        color: white;
        font-family:Georgia;
        font-size: 18px;
        margin-left: 690px;
        box-shadow: 5px 5px 5px rgb(97, 119, 89);
    }

    .events button:hover{
        background-color: #0060c9;
        color: white;
        box-shadow: 0px 0px 5px 5px #0099ff85;
    }

    /*Fifth Content*/
    .facilities h1{
        font-family:Georgia;
        font-size: 35px;
        color: black;
        text-align: center;
        padding: 5px 0px;
    }

    .facilities .container{
        background-color: #0061c95e;
        width: 1519.5px;
        height: 100vh;
    }

    .facilities .fcontent{
        display: flex;
        justify-content: space-between;
        border-radius: 10px;
        width: 1519.5px;
        height: 98vh;
    }

    .facilities main{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2,1fr);
        width: 760px;
        margin-left: 8px;
        padding: 5px 0px;
    }

    .facilities .f1{
        background-color: white;
        border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        text-align: center;
        padding: 10px 0px;
    }

    .f1 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .f1 h5{
        font-family:Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .f1 p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }
    .facilities .f2{
        background-color: white;
         border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        text-align: center;
        padding: 10px 0px;
    }

    .f2 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .f2 h5{
        font-family:Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .f2 p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .facilities .f3{
        background-color: white;
         border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        padding: 10px 0px;
        text-align: center;
    }

    .f3 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .f3 h5{
        font-family:Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }
    .f3 p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .facilities .f4{
        background-color: white;
        border: 2px solid #0061c95e;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        width: 350px;
        height: 40vh;
        padding: 10px 0px;
        text-align: center;
    }

    .f4 i{
        font-size: 40px; 
        background-color: #0061c95e;
        border-radius: 100%;
        color: #0060c9;
        width: 70px;
        height: 70px;
        padding-top: 15px; 
    }

    .f4 h5{
        font-family:Georgia;
        font-size: 25px;
        color: #000;
        padding:10px 0px;
    }

    .f4 p{
        font-family:Georgia;
        font-size: 16px;
        color: #727272;
        padding:10px 0px;
    }

    .facilities button{
        background-color: #00675b;
        height: 40px;
        width: 120px;
        border-radius: 100px;
        color: white;
        font-family:Georgia;
        font-size: 18px;
        margin-left:315px;
        box-shadow: 5px 5px 5px rgb(97, 119, 89);
    }

    .facilities button:hover{
        background-color: #0060c9;
        color: white;
        box-shadow: 0px 0px 5px 5px #0099ff85;
    }

    .facilities .registration{
        width: 760px;
        height: 100vh;
    }

    .facilities .rcontent{
        background-color: white;
        width: 380px;
        height: 100vh;
        margin-left: 180px;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
        }

    input[type=submit] {
        background-color: #00675b;
        height: 40px;
        width: 100px;
        border-radius: 100px;
        color: white;
        font-family:Georgia;
        font-size: 18px;
        margin: 50px 125px;
        box-shadow: 5px 5px 5px rgb(97, 119, 89);
        cursor: pointer;
        }

    input[type=submit]:hover {
        background-color: #0060c9;
        color: white;
        box-shadow: 0px 0px 5px 5px #0099ff85;
        }

    .registration .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
        width: 380px;
        height: 100vh;
        }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
        }
        
</style>
@section('content')
<div class="about">
    <div class="container" >
        <div class="first" style="background-color:#0061c95e;">
            <h1><b>Home/About</b></h1>
        </div>
        <div class="cont">
            <div class="aboutimg">
                <img src="https://images.pexels.com/photos/207692/pexels-photo-207692.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 50px; padding-top: 10px;" alt="school building">
            </div>
            <div class="acontent">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, corporis odit delectus, hic possimus cum recusandae sunt soluta sed atque quod esse molestias sapiente odio. Architecto, doloremque consequuntur. Ab harum dignissimos repellat dicta error fugit nobis! Possimus totam harum voluptas quam adipisci consequatur mollitia ratione iure distinctio molestias quia esse tempore, dolorum dignissimos quisquam fugiat odio a enim vero! Assumenda incidunt, quibusdam eius tempore dolore reiciendis quas earum dicta libero facilis perspiciatis rem eligendi porro. Rerum dolorem, iste tempore aliquam unde dolore quaerat nihil quo laboriosam cumque voluptatum laudantium totam labore at obcaecati, minima deserunt! Maiores sint ipsam distinctio fugiat.</p>

                <p style="padding-top: 10px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, corporis odit delectus, hic possimus cum recusandae sunt soluta sed atque quod esse molestias sapiente odio. Architecto, doloremque consequuntur. Ab harum dignissimos repellat dicta error fugit nobis! Possimus totam harum voluptas quam adipisci consequatur mollitia ratione iure distinctio molestias quia esse tempore, dolorum dignissimos quisquam fugiat odio a enim vero! Assumenda incidunt, quibusdam eius tempore dolore reiciendis quas earum dicta libero facilis perspiciatis rem eligendi porro. Rerum dolorem, iste tempore aliquam unde dolore quaerat nihil quo laboriosam cumque voluptatum laudantium totam labore at obcaecati, minima deserunt! Maiores sint ipsam distinctio fugiat.</p>
                <p style="padding-top: 10px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, corporis odit delectus, hic possimus cum recusandae sunt soluta sed atque quod esse molestias sapiente odio. Architecto, doloremque consequuntur. Ab harum dignissimos repellat dicta error fugit nobis! Possimus totam harum voluptas quam adipisci consequatur mollitia ratione iure distinctio molestias quia esse tempore, dolorum dignissimos quisquam fugiat odio a enim vero! Assumenda incidunt, quibusdam eius tempore dolore reiciendis quas earum dicta libero facilis perspiciatis rem eligendi porro. Rerum dolorem, iste tempore aliquam unde dolore quaerat nihil quo laboriosam cumque voluptatum laudantium totam labore at obcaecati, minima deserunt! Maiores sint ipsam distinctio fugiat.</p>
                <p style="padding-top: 10px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, corporis odit delectus, hic possimus cum recusandae sunt soluta sed atque quod esse molestias sapiente odio. Architecto, doloremque consequuntur.</p>
            </div>
        </div>
    </div>
</div>

<!-- third content -->
<div class="gallery" style="padding-top: 15px;">
    <div class="container">
        <div class="gcontent">
            <h1>Gallery</h1>
            <div>
                <main>
                    <div class="d1">
                        <img src="https://images.pexels.com/photos/248547/pexels-photo-248547.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </div>
                    <div class="d2">
                        <img src="https://images.pexels.com/photos/46798/the-ball-stadion-football-the-pitch-46798.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </div>
                    <div class="d3">
                        <img src="https://images.pexels.com/photos/1618269/pexels-photo-1618269.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </div>
                    <div class="d4">
                        <img src="https://images.pexels.com/photos/269948/pexels-photo-269948.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </div>
                    <div class="d5">
                        <img src="https://images.pexels.com/photos/296302/pexels-photo-296302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </div>
                    <div class="d6">
                        <img src="https://images.pexels.com/photos/1263426/pexels-photo-1263426.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </div>
                </main>
            </div>
            <a href="/gallery"><button type="button" style="margin-top: 10px;">Show More</button></a>
        </div>
    </div>
</div>

<!-- fourth content -->
<div class="events" style="padding-top: 20px;">
    <div class="container">
        <div class="econtent">
            <h1><b>Events</b></h1>
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
                </main> 
            </div>
            <a href="/events"><button type="button" style="margin-top: 10px;">Show More</button></a>
        </div>
    </div>
</div>

<!-- fifth content-->
<div class="facilities" style="padding-top: 20px;">
    <div class="container">
        <div> 
            <div class="fcontent">
                <div class="services">
                    <h1><b>Facilities</b></h1>
                    <main>
                        <div class="f1">
                            <i class="fas fa-bus"></i>
                            <h5>Transports</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                        </div>
                        <div class="f2">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h5>classrooms</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                        </div>
                        <div class="f3">
                            <i class="fas fa-book-open"></i>
                            <h5>Libaries</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                        </div>
                        <div class="f4">
                            <i class="fas fa-tv"></i>
                            <h5>Labs</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cumque magnam voluptate enim quaerat aliquid sunt omnis impedit fugiat, incidunt, eligendi optio recusandae doloremque totam adipisci! Nihil quaerat iure officia.</p>
                        </div>
                    </main>
                    <a href="/facilities"><button type="button" style="margin-top: 10px;">Show More</button></a>
                </div>
                <div class="registration">
                    <div class="rcontent">
                        <div class="container">
                            <h4 style="text-align: center; color: black; font-family:Georgia; font-size: 30px;"><b>Register</b></h4>
                            <p style="text-align: center; font-family:Georgia; font-size: 16px; color: #727272; padding:10px 0px;">Let's connect if you are intrested by fill in the gaps.</p>
                            <form action="/action_page.php">
                              <div class="row">
                                <div>
                                  <label for="fname">First Name</label>
                                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                  <label for="lname">Last Name</label>
                                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                  <label for="country">Country</label>
                                  <select id="country" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                  </select>
                                  <label for="subject">Subject</label>
                                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
                                </div>
                              </div>
                              <div class="row">
                                <input type="submit" value="Submit">
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection