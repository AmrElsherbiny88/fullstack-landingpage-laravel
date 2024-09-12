<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
  
<link rel="stylesheet" type="text/css"  href="{{ asset('css/projectDetails.css') }}" />
<link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" />
  <title>Document</title>
</head>
<body>
  


<x-Navbar/>

  <!-- loading page start -->
  <x-loading/>
  <!-- loading page end -->

<section class="containerrr col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5" style="margin-top:100px;">
   <div class="row">

   <div data-aos="fade-right" class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 mt-5 mb-5 ">
     <h1 class="h1">project title</h1>
     <h3 class="h3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit iure provident eaque tempora atque nobis. Accusantium quas, blanditiis pariatur natus ipsam, porro fuga magni quidem, esse ullam quo? Recusandae, quidem?</h3>
   </div>

 <!-- images of project -->
     <div data-aos="fade-up" class=" col-xl-6 col-lg-6 col-md-6 col-sm-6">
     <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/features-banner-2.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/features-banner-2.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/features-banner-2.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
     </div>
   </div>
</section>


<!-- client and project data -->
<section class="data mb-5  mt-5 p-5">
<div class="containerrr col-xl-12 col-lg-12 col-md-12 col-sm-12 " >
    <div class="row">
       <div data-aos="fade-right" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 logoo ">
          <img class="proj-client-logo m-auto" src="{{ asset('images/76106.png') }}" />
       </div>

       
       <div data-aos="fade-right" class=" data-text col-xl-6 col-lg-6 col-md-6 col-sm-6 mt-5 mb-5 text-center" >
          <h3 class="h3 text-white"> 17,August,2024</h3>

          <button class="btnn btnn-primary m-auto">
             Visit the project
          </button>
       </div>


    </div>
</div>
</section>

<x-clients/>
 
 <!-- 
        - #ABOUT
      -->

      <section class="section about m-auto" id="about">
        <div class="containerrr">

          <h2 data-aos="fade-right" class="h2 section-title">What We Do</h2>

          <p  data-aos="fade-right" class="section-text">
          Here is our service that we can provide to you with a strong and creative team with high quality in a short time
          </p>

          <ul class="about-list">

            <li data-aos="fade-up">
              <div class="about-card about-card-1">

                <figure class="card-banner">
                  <img src="{{ asset('images/about-img-1.svg') }}" width="94" height="94" loading="lazy"
                    alt="Automated Ticket Routing">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="/ServiceDetails" class="card-title">Social media marketing and ADs</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consect etur adipiscing elit.
                  </p>

                  <a href="/ServiceDetails" class="btn-link">
                    <span class="span">Learn More</span>

                  </a>

                </div>

              </div>
            </li>

            <li data-aos="fade-down">
              <div class="about-card about-card-2">

                <figure class="card-banner">
                  <img src="{{ asset('images/about-img-2.svg') }}" width="94" height="94" loading="lazy"
                    alt="Workflow Automation">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="/ServiceDetails" class="card-title">Web development</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consect etur adipiscing elit.
                  </p>

                  <a href="/ServiceDetails" class="btn-link">
                    <span class="span">Learn More</span>

                  </a>

                </div>

              </div>
            </li>

            <li data-aos="fade-up">
              <div class="about-card about-card-3">

                <figure class="card-banner">
                  <img src="{{ asset('images/about-img-3.svg') }}" width="94" height="94" loading="lazy"
                    alt="Automated Callback">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="/ServiceDetails" class="card-title">Mobile App development</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consect etur adipiscing elit.
                  </p>

                  <a href="/ServiceDetails" class="btn-link">
                    <span class="span">Learn More</span>

                  </a>

                </div>

              </div>
            </li>

            <li data-aos="fade-down">
              <div class="about-card about-card-4">

                <figure class="card-banner">
                  <img src="{{ asset('images/about-img-4.svg') }}" width="94" height="94" loading="lazy"
                    alt="Customer Feedback Surveys">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="/ServiceDetails" class="card-title">Full identity and marketing plans</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consect etur adipiscing elit.
                  </p>

                  <a href="/ServiceDetails" class="btn-link">
                    <span class="span">Learn More</span>

                 
                  </a>

                </div>

              </div>
            </li>

          </ul>

          <p class="section-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget gravida facilisis maecenas vitae.
          </p>

        </div>
      </section>



<!-- 
        - #SUPPORT
      -->

      <section data-aos="fade-right" class="section support mb-5">
        <div class="containerrr">

          <div class="support-content">
            <h2 class="h2 section-title">24/7 Customer Support</h2>

            <p class="section-text">
              Our team is here to provide you with personalized and outstanding service. We also offer a range of
              self-learning tools
              in our support center:
            </p>
          </div>

          <a href="/contact" class="btnn btnn-primary">Contact Us Now</a>

        </div>
      </section>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,117.3C384,107,480,53,576,26.7C672,0,768,0,864,37.3C960,75,1056,149,1152,154.7C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<x-footer/>


 <!-- MDB -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>

</body>
</html>









  
  












