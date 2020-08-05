@extends('layouts.HomePage')

@section('content')

<div class="frame">
    <div class="container breadcrum">
        <div class="row breadcrum-detail">
            <a href="#" class="a-breadcrum-detail">Home</a> / <a href="#" class="a-breadcrum-detail">Accessory</a> / <a href="#" class="a-breadcrum-detail">Case</a>
        </div>
    </div>
    <div class="info-product">
        <div class="container">
            <div class="row">
                <div class="col-8 product-gallery">
                    <div class="product-gallery-top">
                        <div class="mySlides">
                            <img src="{{ asset('images/my-ava.jpg') }}" class="image-top" id="myimage">
                        </div>

                        <div class="mySlides">
                            <img src="{{ asset('images/my-ava.jpg') }}" class="image-top" id="myimage">
                        </div>

                        <div class="mySlides">
                            <img src="{{ asset('images/0.jpeg') }}" class="image-top" id="myimage">
                        </div>

                        <div class="mySlides">
                            <img src="{{ asset('images/my-ava.jpg') }}" class="image-top" id="myimage">
                        </div>
                    </div>

                    <div class="product-gallery-space"></div>

                    <div class="product-gallery-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/my-ava.jpg') }}"  class="image-bottom" onclick="currentSlide(1)" alt="The Woods" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/my-ava.jpg') }}"  onclick="currentSlide(2)" alt="Cinque Terre" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/0.jpeg') }}"  onclick="currentSlide(3)" alt="Mountains and fjords" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/xocvan.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/xocvan.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/xocvan.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/xocvan.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/xocvan.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/xocvan.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights" id="myimage">
                                </div>
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/xocvan.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights" id="myimage">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 product-selector">
                    <h1 style="line-height: 27px; color: grey; font-size: 24px">
                        Name Product
                    </h1>
                    <hr >
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">SELECT SIZE:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slider">
    <div class="slider-tittle">
        <p>YOU MIGHT ALSO LIKE:</p>
    </div>
    <div class="slider-product">
        <div class="container slider-items">
            <div class="owl-carousel">
                <div class="div-items">
                    <div class="img-item" style="position: relative;">
                        <img src="{{ asset('images/0.jpeg') }}" alt="" style="width: 100%; height: max-height;">
                        <div class="overlay">
                            <div class="text">
                            </div>
                        </div>
                    </div>
                    <b><p style="text-align: center;">
                            Phone case - 3 Card <br>
                            89$
                        </p></b>
                </div>
                <div class="div-items">
                    <div class="img-item">
                        <a href="#"><img src="{{ asset('images/1.jpeg') }}" alt="" style="width: 100%; height: max-height"></a>
                    </div>
                    <b><p style="text-align: center;">
                            <a href="#">Phone case - 3 Card</a> <br>
                            <a href="#">89$</a>
                        </p></b>
                </div>
                <div class="div-items">
                    <div class="img-item">
                        <a href="#"><img src="{{ asset('images/2.jpeg') }}" alt="" style="width: 100%; height: max-height"></a>
                    </div>
                    <b><p style="text-align: center;">
                            <a href="#">Phone case - 3 Card</a> <br>
                            <a href="#">89$</a>
                        </p></b>
                </div>
                <div class="div-items">
                    <div class="img-item">
                        <a><img src="{{ asset('images/3.jpeg') }}" alt="" style="width: 100%; height: max-height"></a>
                    </div>
                    <b><p style="text-align: center;">
                            <a>Phone case - 3 Card</a> <br>
                            <a>90$</a>
                        </p></b>
                </div>

                <!-- <div class="col-4 div-items">
                    <div class="img-item">
                    <img src="image/1.jpeg" alt="" style="width: 100%; height: max-height%;">
                    </div>
                    <b><p style="text-align: center;">
                    Phone case - 3 Card <br>
                    89$
                    </p></b>
                </div> -->
            </div>
        </div>
    </div>
</div>

<!-- lightbox gallery -->
<script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
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
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>

<!-- slide product -->
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:3,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
</script>

@endsection
