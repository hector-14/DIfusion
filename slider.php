<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <style>

        * {
    box-sizing: border-box;
    }
    body {
        font-family: Verdana, sans-serif; 
        margin:0;
    }
    
    .slideshow-container {
        width: 100%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mySlides {
        display: none;
        width: 100%;
        height: 450px;
    }

    .slideshow-container .mySlides img {
        /*vertical-align: middle;*/
        width: 100%;
        max-height: 100%;
    }
    
    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 40px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }
    /* Position the "next button" to the right */
    .prev {
        left: 0;
        border-radius: 3px 0 0 3px;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
    }
    /* Caption text 
    .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
    }*/
    /* Number text (1/3 etc)
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }*/
    .botones{
        position: absolute;
        bottom: 5%;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 13px;
        width: 13px;
        margin: 0 10px;
        background-color: #101010;
        background-image: url(../imagenes/adm.jpg);
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #f1f1f1;
    }
    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }
    @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
    }
    .dot{
    height: 13px;
    width: 13px;
    }

    @media only screen and (max-width: 500px) {
    .prev, .next,.text {font-size: 14px}
    }

    </style>
</head>
<body>
    
    <div class="slideshow-container">
        
        <div class="mySlides fade">
            
            <img src="imagenes/sliderAdm.jpg">
            
        </div>
        <div class="mySlides fade">
           
            <img src="imagenes/sliderAud.jpg">
            
        </div>
        <div class="mySlides fade">
            
            <img src="imagenes/sliderAud2.jpg">
           
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="botones">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    

    <script>

    var slideIndex = 1;
    showSlides(slideIndex);

    setInterval(function () { plusSlides(1); }, 6000);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");

        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    
    </script>
</body>
</html>
