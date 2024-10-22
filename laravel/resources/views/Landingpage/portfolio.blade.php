<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/portfolio.css') }}" />
    <title>Document</title>
</head>

<body>

    <!-- loading page start -->
    <x-loading />
    <!-- loading page end -->+

    <x-Navbar />

    <section class="containerrr text-center col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top:150px;">
        <div class="row">
          

@foreach ($projects as $item)
            <div data-aos="fade-up" class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-5">
                <div class="card" style="">
                    <img src="{{ $item->Thumbnail }}" class="card-img-top" alt="..." style="width: 100%; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title h2">{{$item->title}}</h5>
                        <p class="card-text summ">{{$item->project_summary}}</p>
                        <a href="{{ route('projectdetails', $item->id) }}" class="btn btn-primary link text-white">See the project</a>
                    </div>
                </div>
            </div>

 @endforeach
        </div>
    </section>



{{-- 
    <!-- filter start -->
    <span onclick="openfilter()">

        <button class="fixed-button" class="Navbtt">
            Filter
        </button>
    </span>

    <div id="filter" class="sidenav text-center ">

        <h2 class="text-white">Filter</h2>
        <hr />
        <div class="mt-5 mainF">
            <a href="javascript:void(0)" class="closebtn mb-5" onclick="closefilter()">&times;</a>
            <div class="mt-5">
                <button id="galleryF" class="mb-3 F-btn m-2 p-2">Gallery</button>
                <button id="allF" class="mb-3 m-2 p-2 F-btn">All</button>
                <button id="PortfolioF" class="mb-3 m-2 p-2 F-btn">Portfolio</button>
            </div>

        </div>

        <hr />

        <div id="portfilter" class="p-3" style="display:none;">
            <button id="all" class="mb-3 F-btn">All</button>
            <button id="Website-F" class="mb-3 F-btn">Website</button>
            <button id="applications-F" class="mb-3 F-btn">Mobile applications</button>
            <button id="graphics-F" class="mb-3 F-btn">graphics</button>
        </div>

    </div>
    <!-- filter end --> --}}




    <!--
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btnn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="chevron-up"></ion-icon>
    </a>









    <x-footer :siteimage="$Siteimage" :phonenumber="$Phonenumber"  :email="$email" :sitename="$site_name"/>


{{-- 
    <!-- filter bar script -->
    <script>
        function openfilter() {
            const filter = document.getElementById("filter");
            if (window.innerWidth <= 768) { // Mobile screen width threshold
                filter.style.width = "150px"; // Set width for mobile screens
            } else {
                filter.style.width = "250px"; // Set width for larger screens
            }
        }
        /* Close/hide the filter bar */
        function closefilter() {
            document.getElementById("filter").style.width = "0"; // Close the side nav

        }
    </script>


    <!-- filter script -->
    <script>
        var all = document.getElementById("all")
        var WebsiteF = document.getElementById("Website-F")
        var applicationsF = document.getElementById("applications-F")
        var graphicsF = document.getElementById("graphics-F")

        all.addEventListener('click', function() {
            all.style.backgroundColor = 'red';
            WebsiteF.style.backgroundColor = 'transparent';
            applicationsF.style.backgroundColor = 'transparent';
            graphicsF.style.backgroundColor = 'transparent';

        });

        WebsiteF.addEventListener('click', function() {

            all.style.backgroundColor = 'transparent';
            WebsiteF.style.backgroundColor = 'red';
            applicationsF.style.backgroundColor = 'transparent';
            graphicsF.style.backgroundColor = 'transparent';
        });


        applicationsF.addEventListener('click', function() {
            applicationsF.style.backgroundColor = 'red';
            graphicsF.style.backgroundColor = 'transparent';
            WebsiteF.style.backgroundColor = 'transparent';
            all.style.backgroundColor = 'transparent';
        });


        graphicsF.addEventListener('click', function() {

            graphicsF.style.backgroundColor = 'red';
            applicationsF.style.backgroundColor = 'transparent';
            WebsiteF.style.backgroundColor = 'transparent';
            all.style.backgroundColor = 'transparent';
        });
    </script>

    <script>
        var gallery = document.getElementById("galleryF")
        var portfolio = document.getElementById("PortfolioF")
        var AllF = document.getElementById("allF")

        AllF.addEventListener('click', function() {
            AllF.style.backgroundColor = 'red';
            portfolio.style.backgroundColor = 'transparent';
            gallery.style.backgroundColor = 'transparent';
            document.getElementById("portfilter").style.display = "none";
        });

        gallery.addEventListener('click', function() {
            gallery.style.backgroundColor = 'red';
            portfolio.style.backgroundColor = 'transparent';
            AllF.style.backgroundColor = 'transparent';
            document.getElementById("portfilter").style.display = "none";
        });

        portfolio.addEventListener('click', function() {
            portfolio.style.backgroundColor = 'red';
            AllF.style.backgroundColor = 'transparent';
            gallery.style.backgroundColor = 'transparent';
            document.getElementById("portfilter").style.display = "block";
        });
    </script>
 --}}



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
