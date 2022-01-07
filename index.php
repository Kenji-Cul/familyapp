<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Family</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="icons/css/all.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <style type="text/css">
            /* @keyframes slider{
                100%{background-image: url('images/slider-badag.jpg');  }
                75%{background-image: url('images/slider-badging.jpg');  }
                100%{background-image: url('images/slider-badag.jpg');  }
		} */
        .gallery {
     height: 130vh;
     background: #4f4f4f;
     overflow:hidden;
     position: relative;
 }
 i{
		font-size: 20px;
		padding-right: 22px;
	}
 .hh{
    display:flex;
     justify-content:center;
     align-items:center;
    color:white;
    font-size:19px;
    padding:5rem 0;
 }

 .events{
     height:150vh;
     background: #4f4f4f;
     position: relative;
     justify-content:center;
     align-items:center;
 }
 .famvideo{
     display:flex;
     align-items:center;
     justify-content:center;
     padding:2rem;
 }
        </style>
    </head>
    <body>
       <div class="header">
           <h4 class="logo">Family</h4>
           <div class="navmenu2"></div>
           <div class="navmenu">
               <a href="#">
                   <span>HOME</span>
               </a>
               <a href="#events">
                   <span>EVENTS</span>
               </a>
               <a href="#">
                   <span>NAME</span>
               </a>
               <a href="#gallery">
                   <span>GALLERY</span>
               </a>
           </div>
           <img src="images/img1.jpeg" alt="" class="img">
       </div>

    <div class="backgrounddiv" style="height: 90vh;
     /* background: url(images/slider-badag.jpg) no-repeat; */
     background-color:#4f4f4f;
     background-size: cover;
     background-position: center;
     background-attachment: fixed;
     z-index: 0;
     overflow: hidden;
     position: relative;
     animation: slider 9s infinite linear;">
      <div class="famname">
        <h1>The Akin Family</h1>
    </div>
    <div class="famphoto">
        <div class="photo" id="img3">
            <img src="images/img1.jpeg" alt="" class="img2">
        </div>
        <div class="photo">
            <img src="images/img2.jpeg" alt="" class="img2">
        </div>
        <div class="photo">
            <img src="images/img3.jpeg" alt="" class="img2">
        </div>
        <div class="photo">
            <img src="images/img4.jpeg" alt="" class="img2">
        </div>
        <div class="photo">
            <img src="images/img5.jpeg" alt="" class="img2">
        </div>
    </div>
    
    <div class="famphoto2" style="display:none;">
        <div class="photo" id="img3">
            <img src="images/img1.jpeg" alt="" class="img2">
        </div>
        <div class="photo">
            <img src="images/img2.jpeg" alt="" class="img2">
        </div>
    </div>

    </div>

    <div class="gallery" id="gallery">
        <div class="hh">
     <h1>YOUR GALLERY</h1>
     </div>
     
     <span class="slider-span" id="slider-span1"></span>
           <span class="slider-span" id="slider-span2"></span>
           <span class="slider-span" id="slider-span3"></span>
           <span class="slider-span" id="slider-span4"></span>
           <span class="slider-span" id="slider-span5"></span>
           <span class="slider-span" id="slider-span6"></span>
           <span class="slider-span" id="slider-span7"></span>

           <div class="image-slider">
               <div class="slides-div" id="slide-1">
                   <img src="images/img1.jpeg" alt="" class="imge" id="img1">
                   <a href="#slider-span1" class="button" id="button-1"></a>
               </div>
               <div class="slides-div" id="slide-2">
               <img src="images/img8.jpeg" alt="" class="imge" id="img2">
                   <a href="#slider-span2" class="button" id="button-2"></a>
               </div>
               <div class="slides-div" id="slide-3">
               <img src="images/img3.jpeg" alt="" class="imge" id="img3">
                   <a href="#slider-span3" class="button" id="button-3"></a>
               </div>
               <div class="slides-div" id="slide-4">
               <img src="images/img9.jpeg" alt="" class="imge" id="img4">
                   <a href="#slider-span4" class="button" id="button-4"></a>
               </div>
               <div class="slides-div" id="slide-5">
               <img src="images/img5.jpeg" alt="" class="imge" id="img5">
                   <a href="#slider-span5" class="button" id="button-5"></a>
               </div>
               <div class="slides-div" id="slide-6">
               <img src="images/img10.jpeg" alt="" class="imge" id="img6">
                   <a href="#slider-span6" class="button" id="button-6"></a>
               </div>
               <div class="slides-div" id="slide-7">
               <img src="images/img7.jpeg" alt="" class="imge" id="img7">
                   <a href="#slider-span7" class="button" id="button-7"></a>
               </div>
           </div>
           
     
    </div>

    <div class="events" id="events">
    <div class="hh">
     <h1>YOUR EVENTS</h1>
     </div>

     <div class="famvideo">
        <div class="photo" id="img3" style="width:40vw; height:50vh; display:block; padding:2rem;">
            <img src="images/img1.jpeg" alt="" style="width: 100%;
     height: 100%;
     object-fit: cover;">
        </div>

        <div class="photo" id="img3" style="width:40vw; height:50vh; display:block; padding:2rem;">
            <img src="images/img1.jpeg" alt="" style="width: 100%;
     height: 100%;
     object-fit: cover;">
        </div>
</div>

<div class="famvideo">
        <div class="photo" id="img3" style="width:40vw; height:50vh; display:block; padding:2rem;">
            <img src="images/img1.jpeg" alt="" style="width: 100%;
     height: 100%;
     object-fit: cover;">
        </div>

        <div class="photo" id="img3" style="width:40vw; height:50vh; display:block; padding:2rem;">
            <img src="images/img1.jpeg" alt="" style="width: 100%;
     height: 100%;
     object-fit: cover;">
        </div>
</div>
    </div>

    <div class="hh" style=" background: #4f4f4f; padding:0;">
     <h3>All rights reserved</h3>
     </div>
     <div class="hh" style="background: #4f4f4f; color:black;">
     <i class="fab fa-twitter" style="padding-bottom:1rem; font-size:35px;"></i>
	<i class="fab fa-youtube" style="padding-bottom:1rem; font-size:35px;"></i>
	<i class="fab fa-facebook" style="padding-bottom:1rem; font-size:35px;"></i>
	<i class="fab fa-whatsapp" style="padding-bottom:1rem; font-size:35px;"></i>
     </div>
    </body>
</html>