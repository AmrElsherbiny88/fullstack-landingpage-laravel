<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/projectDetails.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <title>Document</title>
</head>

<body>



    <x-Navbar :siteimage="$Siteimage" :name="$site_name" />

    <!-- loading page start -->
    <x-loading />
    <!-- loading page end -->

    @foreach ($project as $item)
        <section class="containerrr col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5" style="margin-top:100px;">
            <div class="row">

                <div data-aos="fade-right" class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 mt-5 mb-5 ">
                    <h1 class="h1">{{ $item->title }}</h1>
                    <h3 class="h3">{{ $item->Body }}</h3>
                </div>

                <!-- images of project -->
                <div data-aos="fade-up" class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"
                        style="margin-top: 50px;">
                        <div class="carousel-inner">
                            @if ($item->image1)
                                <div class="carousel-item active ">
                                    <img src="{{ asset($item->image1) }}" class="h-100 w-100 " alt="Project Image 1">
                                </div>
                            @endif

                            @if ($item->image2)
                                <div class="carousel-item ">
                                    <img src="{{ asset($item->image2) }}" class="d-block w-100 " alt="Project Image 2">
                                </div>
                            @endif

                            @if ($item->image3)
                                <div class="carousel-item">
                                    <img src="{{ asset($item->image3) }}" class="d-block w-100 " alt="Project Image 3">
                                </div>
                            @endif

                            @if ($item->image4)
                                <div class="carousel-item">
                                    <img src="{{ asset($item->image4) }}" class="d-block w-100 " alt="Project Image 4">
                                </div>
                            @endif
                        </div>

                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

        </section>


        <!-- client and project data -->
        <section class="data mb-5 mt-5 p-5">
            <div class="containerrr col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                <div class="row">

                    @if ($item->client_logo)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 logoo ">
                            <img class="proj-client-logo m-auto" src="{{ asset($item->client_logo) }}"
                                style="width:150px; height: 150px;" />
                            @if ($item->client_name)
                                <h1 class="text-center text-white mt-3">{{ $item->client_name }}</h1>
                            @endif
                        </div>
                    @endif



                    <div class=" data-text col-xl-6 col-lg-6 col-md-6 col-sm-6 mt-5 mb-5 text-center">
                        @if ($item->date_of_creation)
                            <h3 class="h3 text-white"> {{ $item->date_of_creation }}</h3>
                        @endif

                        @if ($item->project_url)
                            <a href="{{ $item->project_url }}">
                                <button class="btnn btnn-primary m-auto">
                                    Visit the project
                                </button>
                            </a>
                        @endif


                    </div>


                </div>
            </div>
        </section>
    @endforeach





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

            <a href="/contactUs" class="btnn btnn-primary">Contact Us Now</a>

        </div>
    </section>



    <x-footer :siteimage="$Siteimage" :phonenumber="$Phonenumber" :email="$email" :sitename="$site_name" :serviceone="$service1"
        :servicetwo="$service2" :serviceth="$service3" :servicef="$service4" />


    <!-- MDB -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
