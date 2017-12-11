@extends('layouts.app')

@section('content')
            <div class="messages">
                @if ($errors->has('username'))
                <div class="error">
					<span>
						<strong>{{ $errors->first('username') }}</strong>
						<br>
                    </span>
                </div>
                @endif
                @if ($errors->has('password'))
                <div class="error">
					<span>
						<strong>{{ $errors->first('password') }}</strong>
						<br>
                    </span>
                </div>
				@endif
                @if(session('status'))
                    <div class="warning">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                @if(session('activated'))
                    <div class="success">
                        <strong>{{ session('activated') }}</strong>
                    </div>
                @endif
            </div>
            <section id="slide1">
                <div id="home">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                                <img src="/images/wallpapers/wall1.jpg" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                                <img src="/images/wallpapers/wall2.jpg" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                                <img src="/images/wallpapers/wall3.jpg" style="width:100%">
                            <div class="text">Caption Three</div>
                        </div>
                    </div>
                    <br>
                    <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                    </div>
                </div>
            </section>
            <section id="slide2">
                <div id="serv">
                    <div class="servcontainer">
                        <div class="servcontent">
                            <h2>Serviços disponiveis no ginásio</h2>
                        </div>
                    </div>
                </div>

                <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
            </section>
            <section id="slide3">
                <div id="free">
                    <div class="freecontainer">
                        <div class="freecontent">
                            <h2>Free trial</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="slide4">
                <div id="about">
                    <div class="aboutcontainer">
                        <div class="aboutcontent">
                            <h2>Sobre o nosso ginásio</h2>
                        </div>
                    </div>
                </div>
            </section>
@endsection