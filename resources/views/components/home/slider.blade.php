<style>
    * {
        box-sizing: border-box
    }
    img {
        vertical-align: middle;
    }       
    .home__slider {
        width: 100%;
        height: 75vh;
        overflow: hidden;
    }
    .slides {
        display: flex;
        width: 500%;
        height: 100%;
    }

    .slide {
        width: 20%;
        flex: none;
        display: none
    }

    .slide img {
        width: 100%;
        max-width: 100%;
        height: auto;
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 45%;
        padding: 16px;
        margin: -25px 10px;
        color: white;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 50%;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        border-radius: 50%;
    }

    .dot {
        position: relative;
        top: -20px;
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
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
        .prev, .next, {font-size: 11px}
    }
</style>

<section class="home__slider">
    <div class="slides">
        <div class="slide fade">
            <a href="/">
                <img src="/images/slider/1.png">
            </a>
        </div>
        <div class="slide fade">
            <a href="/">
                <img src="/images/slider/2.png">
            </a>
        </div>
        <div class="slide fade">
            <a href="/">
                <img src="/images/slider/3.png">
            </a>
        </div>
        <div class="slide fade">
            <a href="/">
                <img src="/images/slider/4.png">
            </a>
        </div>
        <div class="slide fade">
            <a href="/">
                <img src="/images/slider/5.png">
            </a>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span>  
    </div>
</section>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }
</script>