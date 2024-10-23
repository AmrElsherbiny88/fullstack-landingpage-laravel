<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
<link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" type="text/css"  href="{{ asset('css/contact.css') }}" />
  <title>Document</title>
</head>

<body>
  


  <x-Navbar :name="$site_name"/>

  <!-- loading page start -->
  <x-loading/>
  <!-- loading page end -->
   
<!-- contact form -->
<section class="containerrr text-center col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top:150px;">
  <div class="row">
    <div data-aos="fade-up" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
    <h1 class="h1">Let's talk</h1>
    <h2 class="h2">Send Us and we will respond to you</h2>
    </div>

    {{-- <form data-aos="fade-right" class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
         <input class="mb-5" type="text" placeholder="Enter your name">
         <input class="mb-5" type="email" placeholder="Enter your email">
          <textarea placeholder="enter your message"></textarea>

          <button class="btnn btnn-primary w-100">Send</button>
    </form> --}}
  </div>
</section>


<!-- social media -->
<section data-aos="fade-down" class="container formm  col-xl-12 col-md-12 col-lg-12 col-sm-12 mt-5 mb-6">
<div data-aos="fade-up" class="carddd">
  <img
    src="{{ asset('images/contactmesh.png') }}"
    alt=""
    class="image"
  />
  <div class="heading text-center">
    <h2 data-aos="fade-up">We're on Social Media</h2>
     <h5 data-aos="fade-right">Follow Us</h5>
</div>
<!-- icons -->
<div  class=" text-center">
  <!-- Grid container -->
  <div class="container ">
    <!-- Section: Social media -->
    <section data-aos="fade-up" class="mb-4">
      <!-- Facebook -->

      @foreach ($facebook as $item)
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998; scale:0.9;"
        href="{{$item->URL}}"
        role="button"
        >
        
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="20" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M24,4h-18c-1.105,0 -2,0.895 -2,2v18c0,1.105 0.895,2 2,2h10v-9h-3v-3h3v-1.611c0,-3.05 1.486,-4.389 4.021,-4.389c1.214,0 1.856,0.09 2.16,0.131v2.869h-1.729c-1.076,0 -1.452,0.568 -1.452,1.718v1.282h3.154l-0.428,3h-2.726v9h5c1.105,0 2,-0.895 2,-2v-18c0,-1.105 -0.896,-2 -2,-2z"></path></g></g>
</svg>

</a>
      @endforeach
   


      @foreach ($twitter as $item)
      <!-- Twitter -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee; scale:0.9;"
        href="{{$item->URL}}"
        role="button"
        >
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="20" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M50.0625,10.4375c-1.84766,0.82031 -3.82812,1.37109 -5.91016,1.62109c2.125,-1.27344 3.75781,-3.28906 4.52344,-5.6875c-1.98437,1.17578 -4.19141,2.03125 -6.53125,2.49219c-1.875,-2 -4.54687,-3.24609 -7.50391,-3.24609c-5.67969,0 -10.28516,4.60156 -10.28516,10.28125c0,0.80469 0.09375,1.58984 0.26953,2.34375c-8.54687,-0.42969 -16.12109,-4.52344 -21.19531,-10.74609c-0.88672,1.52344 -1.39062,3.28906 -1.39062,5.17187c0,3.56641 1.8125,6.71484 4.57422,8.5625c-1.6875,-0.05469 -3.27344,-0.51953 -4.66016,-1.28906c0,0.04297 0,0.08594 0,0.12891c0,4.98438 3.54688,9.13672 8.24609,10.08594c-0.85937,0.23438 -1.76953,0.35938 -2.70703,0.35938c-0.66406,0 -1.30859,-0.0625 -1.9375,-0.1875c1.3125,4.08203 5.10938,7.0625 9.60547,7.14453c-3.51562,2.75781 -7.94922,4.39844 -12.76953,4.39844c-0.83203,0 -1.64844,-0.04687 -2.44922,-0.14453c4.54687,2.92188 9.95312,4.62109 15.76172,4.62109c18.91406,0 29.25781,-15.66797 29.25781,-29.25391c0,-0.44531 -0.01172,-0.89453 -0.02734,-1.33203c2.00781,-1.44922 3.75,-3.26172 5.12891,-5.32422z"></path></g></g>
</svg>
    
    </a>
    @endforeach

    @foreach ($email as $item)
      <!-- Google -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39; scale:0.9;"
         href="mailto:{{$item->URL}}"
        role="button"
        >
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="20" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25.99609,48c-12.68359,0 -23.00391,-10.31641 -23.00391,-23c0,-12.68359 10.32031,-23 23.00391,-23c5.74609,0 11.24609,2.12891 15.49219,5.99609l0.77344,0.70703l-7.58594,7.58594l-0.70312,-0.60156c-2.22656,-1.90625 -5.05859,-2.95703 -7.97656,-2.95703c-6.76562,0 -12.27344,5.50391 -12.27344,12.26953c0,6.76563 5.50781,12.26953 12.27344,12.26953c4.87891,0 8.73438,-2.49219 10.55078,-6.73828h-11.55078v-10.35547l22.55078,0.03125l0.16797,0.79297c1.17578,5.58203 0.23438,13.79297 -4.53125,19.66797c-3.94531,4.86328 -9.72656,7.33203 -17.1875,7.33203z"></path></g></g>
</svg>
    </a> 
    @endforeach


    @foreach ($instagram as $item)
      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;  scale:0.9 ;"
        href="{{$item->URL}}"
        role="button"
        >
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="20" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M16,3c-7.17,0 -13,5.83 -13,13v18c0,7.17 5.83,13 13,13h18c7.17,0 13,-5.83 13,-13v-18c0,-7.17 -5.83,-13 -13,-13zM37,11c1.1,0 2,0.9 2,2c0,1.1 -0.9,2 -2,2c-1.1,0 -2,-0.9 -2,-2c0,-1.1 0.9,-2 2,-2zM25,14c6.07,0 11,4.93 11,11c0,6.07 -4.93,11 -11,11c-6.07,0 -11,-4.93 -11,-11c0,-6.07 4.93,-11 11,-11zM25,16c-4.96,0 -9,4.04 -9,9c0,4.96 4.04,9 9,9c4.96,0 9,-4.04 9,-9c0,-4.96 -4.04,-9 -9,-9z"></path></g></g>
</svg>
    </a>
    @endforeach


    @foreach ($linkedin as $item)
      <!-- Linkedin -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca; scale:0.9;"
        href="{{$item->URL}}"
        role="button"
        >
        
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="20" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM17,20v19h-6v-19zM11,14.47c0,-1.4 1.2,-2.47 3,-2.47c1.8,0 2.93,1.07 3,2.47c0,1.4 -1.12,2.53 -3,2.53c-1.8,0 -3,-1.13 -3,-2.53zM39,39h-6c0,0 0,-9.26 0,-10c0,-2 -1,-4 -3.5,-4.04h-0.08c-2.42,0 -3.42,2.06 -3.42,4.04c0,0.91 0,10 0,10h-6v-19h6v2.56c0,0 1.93,-2.56 5.81,-2.56c3.97,0 7.19,2.73 7.19,8.26z"></path></g></g>
</svg>
    
    </a>

    @endforeach

    {{-- @foreach ($github as $item)
      <!-- Github -->

      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #333333; scale:0.9;"
         href="{{$item->URL}}"
        role="button"
        >
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="20" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M17.791,46.836c0.711,-0.306 1.209,-1.013 1.209,-1.836v-5.4c0,-0.197 0.016,-0.402 0.041,-0.61c-0.014,0.004 -0.027,0.007 -0.041,0.01c0,0 -3,0 -3.6,0c-1.5,0 -2.8,-0.6 -3.4,-1.8c-0.7,-1.3 -1,-3.5 -2.8,-4.7c-0.3,-0.2 -0.1,-0.5 0.5,-0.5c0.6,0.1 1.9,0.9 2.7,2c0.9,1.1 1.8,2 3.4,2c2.487,0 3.82,-0.125 4.622,-0.555c0.934,-1.389 2.227,-2.445 3.578,-2.445v-0.025c-5.668,-0.182 -9.289,-2.066 -10.975,-4.975c-3.665,0.042 -6.856,0.405 -8.677,0.707c-0.058,-0.327 -0.108,-0.656 -0.151,-0.987c1.797,-0.296 4.843,-0.647 8.345,-0.714c-0.112,-0.276 -0.209,-0.559 -0.291,-0.849c-3.511,-0.178 -6.541,-0.039 -8.187,0.097c-0.02,-0.332 -0.047,-0.663 -0.051,-0.999c1.649,-0.135 4.597,-0.27 8.018,-0.111c-0.079,-0.5 -0.13,-1.011 -0.13,-1.543c0,-1.7 0.6,-3.5 1.7,-5c-0.5,-1.7 -1.2,-5.3 0.2,-6.6c2.7,0 4.6,1.3 5.5,2.1c1.699,-0.701 3.599,-1.101 5.699,-1.101c2.1,0 4,0.4 5.6,1.1c0.9,-0.8 2.8,-2.1 5.5,-2.1c1.5,1.4 0.7,5 0.2,6.6c1.1,1.5 1.7,3.2 1.6,5c0,0.484 -0.045,0.951 -0.11,1.409c3.499,-0.172 6.527,-0.034 8.204,0.102c-0.002,0.337 -0.033,0.666 -0.051,0.999c-1.671,-0.138 -4.775,-0.28 -8.359,-0.089c-0.089,0.336 -0.197,0.663 -0.325,0.98c3.546,0.046 6.665,0.389 8.548,0.689c-0.043,0.332 -0.093,0.661 -0.151,0.987c-1.912,-0.306 -5.171,-0.664 -8.879,-0.682c-1.665,2.878 -5.22,4.755 -10.777,4.974v0.031c2.6,0 5,3.9 5,6.6v5.4c0,0.823 0.498,1.53 1.209,1.836c9.161,-3.032 15.791,-11.672 15.791,-21.836c0,-12.682 -10.317,-23 -23,-23c-12.683,0 -23,10.318 -23,23c0,10.164 6.63,18.804 15.791,21.836z"></path></g></g>
</svg>
    </a>

    
    @endforeach --}}

    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
</div>
</div>
</section>




<!-- location -->

<section class="container formm  col-xl-12 col-md-12 col-lg-12 col-sm-12 mt-5 mb-5">
   <div class="row mt-10">
     <div data-aos="fade-right" class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mt-5 mb-5 text-center">
        <h1 class="h1">Our location</h1>
        <h2 class="h2">We're waiting you come and visit us</h2>
     </div>
    
     @foreach ($Maplocation as $item)
         
  
     <div data-aos="fade-up" class="col-xl-6 col-md-6 col-lg-6 col-sm-6 " >
      <div class="map">
        {!!$item->URL!!}
      </div>  
     </div>

     @endforeach
   </div>
</section>


  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btnn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>

  <x-footer :siteimage="$Siteimage" :phonenumber="$Phonenumber"  :email="$email" :sitename="$site_name" :serviceone="$service1" :servicetwo="$service2" :serviceth="$service3" :servicef="$service4"/>




 <!-- MDB -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>

</body>
</html>









  
  












