{{-- <style>

@-webkit-keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: transparent !important;
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 100%;
  border-radius:15px;
}
.slider::before, .slider::after {
    background: transparent !important;
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 20s linear infinite;
          animation: scroll 20s linear infinite;
  display: flex;
  width: calc(250px * 14);
}
.slider .slide {
  height: 100px;
  width: 220px;
}
</style>



<div   data-aos="fade-right" class="slider bg-transparent mt-5">
	<div class="slide-track bg-transparent">
		@foreach ($clients as $client)
		<div class="slide">
			<a href="{{$client->siteURL}}">
			  <img src="{{$client->logo}}" height="100" width="250" alt="" />
			</a>
		   </div>
		@endforeach
	
		
	</div>
</div> --}}



<!-- Splide CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/css/splide.min.css">

<!-- Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/js/splide.min.js"></script>

<div class="splide pt-5 pb-5" id="logo-slider">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($clients as $client)
                <li class="splide__slide" style="margin-left: 40px;">
                    <a href="{{ $client->siteURL }}">
                        <img src="{{ $client->logo }}" alt="Logo" width="100px" height="100px">
                    </a>

                </li>
            @endforeach



        </ul>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#logo-slider', {
            type: 'loop',
            autoplay: true,
            interval: 2500, // Time between each slide (in milliseconds)
            pauseOnHover: false, // Keep autoplay even when hovering over the slider
            perPage: 5, // Number of logos visible per page
            perMove: 1, // Number of logos moved per slide
            gap: '', // Gap between each logo
            breakpoints: {
                1024: {
                    perPage: 4, // Show 3 logos per slide on smaller screens
                },
                768: {
                    perPage: 3, // Show 2 logos per slide on tablets
                },
                480: {
                    perPage: 2, // Show 1 logo per slide on small screens
                },
            },
        }).mount();
    });
</script>
