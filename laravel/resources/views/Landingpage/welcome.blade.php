<!DOCTYPE html>
<html class="htmll" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @foreach ($Title as $item)
        <title>{{ $item->data }}</title>
        <meta property="twitter:title" content="{{ $item->data }}">
        <meta property="og:title" content="{{ $item->data }}">
    @endforeach

    @foreach ($description as $item)
        <meta name="description" content="{{ $item->data }}">
        <meta property="og:description" content="{{ $item->data }}">
        <meta property="twitter:description" content="{{ $item->data }}">
    @endforeach

    @foreach ($site_name as $item)
        <meta property="og:site_name" content="{{ $item->data }}">
    @endforeach

    @foreach ($URL as $item)
        <meta property="og:url" content="{{ $item->data }}">
        <link rel="canonical" href="{{ $item->data }}">
    @endforeach

    @foreach ($Siteimage as $item)
        <meta property="og:image" content="{{ $item->logo }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta name="twitter:image" content="{{ $item->logo }}">
        <link rel="icon" href="{{ $item->logo }}" type="image/x-icon">
        <link rel="shortcut icon" type="image/x-icon" href="{{ $item->logo }}">
    @endforeach

    <meta name="robots" content="index, follow">
    <meta property="og:type" content="article">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">

    <!-- preload image -->
    <link rel="preload" as="image" href="{{ asset('images/hero-banner.png') }}">
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <x-Navbar :name="$site_name" />


    <!-- loading page start -->
    <x-loading />
    <!-- loading page end -->


    <main>
        <article>

            <!--
        - #HERO
      -->

            <section class="section hero" id="home">
                <div class="containerrr">

                    <figure data-aos="fade-up" class="hero-banner">
                        <img src="{{ asset('images/hero-banner.png') }}" width="804" height="643" loading="lazy"
                            alt="hero banner" class="w-100">
                    </figure>

                    <div data-aos="fade-down" class="hero-content">

                        <h2 class="h1 hero-title">Make development Easy For Today's Digital Customers</h2>

                        <p class="section-text">
                            Runsoft is a company that helps you create an electronic identity for your company through
                            marketing, website programming, advertisements, and marketing plans
                        </p>




                    </div>
                </div>
            </section>


            <!--
        - #SERVICE
      -->

            <section class="section service" id="services">
                <div class="containerrr">

                    <h2 data-aos="fade-right" class="h2 section-title">Our Solutions For You</h2>

                    <p data-aos="fade-right" class="section-text">
                        Our solutions for you to make your buisness grow very fast and be success
                    </p>

                    <ul class="service-list">
                        @foreach ($solutions as $dol)
                            <li data-aos="fade-up">
                                <div class="service-card" style="width: 291.6px ;">

                                    <figure class="card-banner">
                                        <img src=" {{ $dol->image }}" style="width: 291.6px ; height: 137.79px;"
                                            width="291.6px" height="137.79px" loading="lazy" alt="support"
                                            class="w-100 h-100">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h3">
                                            <a href="#" class="card-title"> {{ $dol->Title }}</a>
                                        </h3>

                                        <p class="card-text">
                                            {{ $dol->description }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </section>


            <!--
        - #FEATURES
      -->

            <section class="section features" id="features">
                <div class="containerrr">

                    <div class="features-content">

                        <h2 data-aos="fade-up" class="h2 section-title">Our Awesome Features To Serve You</h2>

                        <p data-aos="fade-up" class="section-text">
                            Creating an identity and marketing for your company and electronic solutions to make your
                            business successful was never easy, Runsoft made it easy.
                        </p>

                        <ul class="features-list">
                            @foreach ($features as $feature)
                                <li data-aos="fade-right" class="features-item">
                                    <img src="{{ $feature->icon }}" width="26" height="26" loading="lazy"
                                        aria-hidden="true" class="item-icon">

                                    <h3 class="item-title">{{ $feature->description }}</h3>
                                </li>
                            @endforeach

                        </ul>

                    </div>

                    <div data-aos="fade-right" class="banner-wrapper">

                        <figure class="features-banner one">
                            <img src="{{ asset('images/features-banner-1.gif') }}" width="600" height="500"
                                loading="lazy" alt="features image" class="w-100">
                        </figure>

                        <figure class="features-banner two">
                            <img src="{{ asset('images/features-banner-2.png') }}" width="436" height="311"
                                loading="lazy" alt="features image" class="w-100">
                        </figure>

                    </div>

                </div>
            </section>



            <!--
        - #ABOUT
      -->

            <section class="section about" id="about">
                <div class="containerrr">

                    <h2 data-aos="fade-right" class="h2 section-title">What We Do</h2>

                    <p data-aos="fade-right" class="section-text">
                        Here is our service that we can provide to you with a strong and creative team with high quality
                        in a short time
                    </p>

                    <ul class="about-list">
                        @foreach ($service1 as $service)
                            <li data-aos="fade-down">
                                <div class="about-card about-card-2">




                                    <figure class="card-banner">
                                        <img src="{{ $service->image }}" width="94" height="94"
                                            loading="lazy" alt="Workflow Automation">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h3">
                                            <a href="{{ route('ServiceDetails', $service->id) }}"
                                                class="card-title">{{ $service->Title }}</a>
                                        </h3>

                                        <p class="card-text">
                                            {{ $service->description }}
                                        </p>

                                        <a href="{{ route('ServiceDetails', $service->id) }}"
                                            class="btn btn-transparent text-white ">
                                            <h3 class="span">Learn More</h3>


                                        </a>

                                    </div>
                                </div>
                            </li>
                        @endforeach



                        @foreach ($service2 as $service)
                            <li data-aos="fade-up">
                                <div class="about-card about-card-3">

                                    <figure class="card-banner">
                                        <img src="{{ $service->image }}" width="94" height="94"
                                            loading="lazy" alt="Automated Callback">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h3">
                                            <a href="{{ route('ServiceDetails', $service->id) }}"
                                                class="card-title">{{ $service->Title }}</a>
                                        </h3>

                                        <p class="card-text">
                                            {{ $service->description }}
                                        </p>

                                        <a href="{{ route('ServiceDetails', $service->id) }}"
                                            class="btn btn-transparent text-white ">
                                            <h3 class="span">Learn More</h3>


                                        </a>

                                    </div>

                                </div>
                            </li>
                        @endforeach


                        @foreach ($service3 as $service)
                            <li data-aos="fade-up">
                                <div class="about-card about-card-1">

                                    <figure class="card-banner">
                                        <img src="{{ $service->image }}" width="94" height="94"
                                            loading="lazy" alt="Automated Ticket Routing">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h3">
                                            <a href="{{ route('ServiceDetails', $service->id) }}"
                                                class="card-title">{{ $service->Title }}</a>
                                        </h3>

                                        <p class="card-text">
                                            {{ $service->description }}
                                        </p>

                                        <a href="{{ route('ServiceDetails', $service->id) }}"
                                            class="btn btn-transparent text-white ">
                                            <h3 class="span">Learn More</h3>


                                        </a>
                                    </div>

                                </div>
                            </li>
                        @endforeach


                        @foreach ($service4 as $service)
                            <li data-aos="fade-down">
                                <div class="about-card about-card-4">

                                    <figure class="card-banner">
                                        <img src="{{ $service->image }}" width="94" height="94"
                                            loading="lazy" alt="Customer Feedback Surveys">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h3">
                                            <a href="{{ route('ServiceDetails', $service->id) }}"
                                                class="card-title">{{ $service->Title }}</a>
                                        </h3>

                                        <p class="card-text">
                                            {{ $service->description }}
                                        </p>

                                        <a href="{{ route('ServiceDetails', $service->id) }}"
                                            class="btn btn-transparent text-white ">
                                            <h3 class="span">Learn More</h3>


                                        </a>

                                    </div>

                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <p class="section-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget gravida facilisis maecenas vitae.
                    </p>

                </div>
            </section>


            <!--
        - #STATS
      -->

            <section class="section stats">
                <div class="containerrr">

                    <figure data-aos="fade-up" class="stats-banner">
                        <img src="{{ asset('images/stats-banner.png') }}" width="619" height="482"
                            loading="lazy" alt="stats" class="w-100">
                    </figure>

                    <ul class="stats-list">

                        @foreach ($stat1 as $stat)
                            <li data-aos="fade-right" class="stats-item red">
                                <h3 class="item-title">
                                    {{ $stat->Number }}
                                    <span class="span"> {{ $stat->Numbertype }}</span>
                                </h3>

                                <p class="stats-text">{{ $stat->categorie }}</p>
                            </li>
                        @endforeach

                        @foreach ($stat2 as $stat)
                            <li data-aos="fade-right" class="stats-item green">
                                <h3 class="item-title">
                                    {{ $stat->Number }}
                                    <span class="span">{{ $stat->Numbertype }}</span>
                                </h3>

                                <p class="stats-text">{{ $stat->categorie }}</p>
                            </li>
                        @endforeach


                        @foreach ($stat3 as $stat)
                            <li data-aos="fade-right" class="stats-item purple">
                                <h3 class="item-title">
                                    {{ $stat->Number }}
                                    <span class="span">{{ $stat->Numbertype }}</span>
                                </h3>

                                <p class="stats-text">{{ $stat->categorie }}</p>
                            </li>
                        @endforeach



                        @foreach ($stat4 as $stat)
                            <li data-aos="fade-right" class="stats-item yellow">
                                <h3 class="item-title">
                                    {{ $stat->Number }}
                                    <span class="span">{{ $stat->Numbertype }}</span>
                                </h3>

                                <p class="stats-text">{{ $stat->categorie }}</p>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </section>


            <x-clients :clients="$clients" />



            <!--
        - #SUPPORT
      -->

            <section data-aos="fade-right" class="section support mb-5">
                <div class="containerrr">

                    <div class="support-content">
                        <h2 class="h2 section-title">24/7 Customer Support</h2>

                        <p class="section-text">
                            Our team is here to provide you with personalized and outstanding service. We also offer a
                            range of
                            self-learning tools
                            in our support center:
                        </p>
                    </div>

                    <a href="/contactUs" class="btnn btnn-primary">Contact Us Now</a>

                </div>
            </section>

        </article>
    </main>


    <!--
    - #FOOTER
  -->

    <x-footer :siteimage="$Siteimage" :phonenumber="$Phonenumber" :email="$email" :sitename="$site_name" :serviceone="$service1"
        :servicetwo="$service2" :serviceth="$service3" :servicef="$service4" />


    <!--
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btnn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="chevron-up"></ion-icon>
    </a>


    <!--
    - custom js link
  -->
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
