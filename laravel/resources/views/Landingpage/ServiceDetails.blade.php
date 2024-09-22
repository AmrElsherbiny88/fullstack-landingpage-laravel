{{-- @dd($servise) --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 
  - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;900&display=swap" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
<link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" type="text/css"  href="{{ asset('css/service.css') }}" />

  <title>service</title>
</head>

<style>
  body{
    background-color: hsl(0, 0%, 100%);
  }
  
</style>
<body>
  

<div class="navv">
<x-Navbar/>
</div>

  <!-- loading page start -->
  <x-loading/>
  <!-- loading page end -->

  
<!-- service card -->


{{-- @foreach ($servise as $item) --}}
     

<section  class="containerrr text-center col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5" style="margin-top:150px;">
<div class="about-card about-card-2">

<figure data-aos="fade-right" class="card-banner">
  <img src="{{  asset($service->image) }}" width="94" height="94" loading="lazy" alt="Customer Feedback Surveys"/>
</figure>

<div class="card-content" data-aos="fade-left">

  <h3 class="h3">
    <a href="/ServiceDetails" class="card-title">{{$service->Title}}</a>
  </h3>

  <p class="card-text">
  {{$service->description}}
  </p>

</div>

</div>
</section>
{{-- @endforeach --}}

<!-- details -->
    
<section data-aos="fade-right" class="containerrr formm  col-xl-12 col-md-12 col-lg-12 col-sm-12 mt-5">
   <div class="row">
     <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-5">
          <h2 class="text-black">  {{$service->summary}}</h2>
     </div>

     <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6">
         
     <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/Purple Modern Digital Marketing Agency Youtube Video Ad.gif') }}" class="d-block w-100" alt="...">
    </div>
   
</div>
</div>
   </div>
</section>


<section class="section features" id="features">
        <div class="containerrr">

          <div class="features-content">

            <h2 data-aos="fade-up" class="h2 section-title">Our Awesome Features in web development</h2>

            <p data-aos="fade-up" class="section-text">
            Creating a website your company and electronic solutions to make your business successful was never easy, Runsoft made it easy.
            </p>

            <ul class="features-list">

              <li data-aos="fade-right" class="features-item">
                <img src="{{ asset('images/features-icon-1.svg') }}" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <h3 class="item-title">high quality </h3>
              </li>

              <li data-aos="fade-right" class="features-item">
                <img src="{{ asset('images/features-icon-2.svg') }}" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <h3 class="item-title">Fast work </h3>
              </li>

              <li data-aos="fade-right" class="features-item">
                <img src="{{ asset('images/features-icon-3.svg') }}" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <h3 class="item-title">Clean code</h3>
              </li>

              <li data-aos="fade-right" class="features-item">
                <img src="{{ asset('images/features-icon-4.svg') }}" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <h3 class="item-title">support 24/7</h3>
              </li>

            </ul>

          </div>

          <div data-aos="fade-right" class="banner-wrapper">

            <figure class="features-banner one">
              <img src="{{ asset('images/features-banner-1.gif') }}" width="600" height="500" loading="lazy"
                alt="features image" class="w-100">
            </figure>

            <figure class="features-banner two">
              <img src="{{ asset('images/features-banner-2.png') }}" width="436" height="311" loading="lazy"
                alt="features image" class="w-100">
            </figure>

          </div>

        </div>
      </section>

      <svg data-aos="fade-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,64L80,74.7C160,85,320,107,480,133.3C640,160,800,192,960,186.7C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>




  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btnn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>

<x-footer/>


 <!-- MDB -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>

</body>
</html>









  
  












