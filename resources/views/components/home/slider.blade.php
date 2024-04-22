<style>
    .home__slider{
        width: 100%;
        height: 704px;
        overflow: hidden;
    }
    .navigation{
        position: absolute;
        bottom:16px;
        left:50%;
        transform: translate(-50%,-800%);
        display:flex;
    }
    .bar{
        height:10px;
        width: 10px;
        margin: 6px;
        cursor: pointer;
        opacity: .7;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -o-border-radius: 50%;
        border-radius: 50%;
        transition: all .4s ease;
    }
    .bar:after{
        border: 2px solid rgb(0,0,0);
        content: " ";
        display: block;
        height: 12px;
        left: -3px;
        position: relative;
        top: -3px;
        width: 12px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -o-border-radius: 50%;
        border-radius: 50%;
    }
    .bar:hover{
        background-color: rgba(0,0,0,0.5);
        opacity:1;
        transform: scale(1.2);
    }
    input[name = "r"]{
        position:absolute;
        visibility:hidden;
    }
    .slides {
        width: 500%;
        height: 100%;
        display: flex;
        border: 2px solid black;
    }
    .slides img{
        width: 100%;
        height:100%;
        border: 2px solid black;
    }
    #r1:checked ~ .s1{
        margin-left:0;
        transition: 0.3s ease-in-out;
    }
    #r2:checked ~ .s1{
        margin-left:-20%;
        transition: 0.3s ease-in-out;
    }
    #r3:checked ~ .s1{
        margin-left:-40%;
        transition: 0.3s ease-in-out;
    }
    #r4:checked ~ .s1{
        margin-left:-60%;
        transition: 0.3s ease-in-out;
    }
    #r5:checked ~ .s1 {
        margin-left: -80%;
        transition: 0.3s ease-in-out;
    }
    .banki{
        width: 200px;
        position: absolute;
        top: 550px;
        left: 1250px;
    }
</style>
<section class="home__slider">
    <div class="slides">

        <input type="radio" name = "r" id = "r1" checked>
        <input type="radio" name = "r" id = "r2">
        <input type="radio" name = "r" id = "r3">
        <input type="radio" name = "r" id = "r4">
        <input type="radio" name = "r" id = "r5">

        <div class="slide s1"><img src="/images/slider/1.png"></div>
        <div class="slide"><img src="/images/slider/2.png"></div>
        <div class="slide"><img src="/images/slider/3.png"></div>
        <div class="slide"><img src="/images/slider/4.png"></div>
        <div class="slide"><img src="/images/slider/5.png"></div>
    </div>

    <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
    </div>
    <div class="banki">
        <img src="/images/slider/ban.png">
    </div>
</section>
    