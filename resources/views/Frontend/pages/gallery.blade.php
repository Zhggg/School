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

    .maingallery h1{
        font-family: Georgia;
        font-size: 35px;
        color: black;
        padding: 10px 0px;
        text-align: center;
    }

    @import url(https://fonts.googleapis.com/css?family=Montserrat:500);
.gallery {
	display: flex;
	flex-wrap: wrap;
	/* Compensate for excess margin on outer gallery flex items */
	margin: -1rem -1rem;
}

.gallery-item {
	/* Minimum width of 24rem and grow to fit available space */
	flex: 1 0 24rem;
	/* Margin value should be half of grid-gap value as margins on flex items don't collapse */
	margin: 1rem;
	box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
	overflow: hidden;
}

.gallery-image {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: transform 400ms ease-out;
}

.gallery-image:hover {
	transform: scale(1.15);
}

/*

The following rule will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling. 

*/

@supports (display: grid) {
	.gallery {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
		grid-gap: 2rem;
	}

	.gallery,
	.gallery-item {
		margin: 0;
	}
}

</style>
@section('content')
<div class="gallery">
    <div class="container" >
        <div class="first" style="background-color:#0061c95e;">
            <h1><b>Home/Gallery</b></h1>
        </div>
        <div class="maingallery">
            <h1><b>Gallery</b></h1>
            <main>
                <div class="gallery">
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?school,sports" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?bus,school building" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?teaching,computer" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?teacher,students" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?lab,kids" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?school bus,students" alt="">
                    </div>
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?school,sports" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?bus,school building" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?teaching,computer" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?teacher,students" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?lab,kids" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?school bus,students" alt="">
                    </div>
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?school,sports" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?bus,school building" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?teaching,computer" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?teacher,students" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?lab,kids" alt="">
                    </div>
            
                    <div class="gallery-item">
                        <img class="gallery-image" src="https://source.unsplash.com/1600x900/?school bus,students" alt="">
                    </div>
                </div>
            </main>
        </div>
@endsection