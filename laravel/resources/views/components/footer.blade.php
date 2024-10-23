<!DOCTYPE html>
<html class="htmll" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--
    - custom css link
  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <!--
  - google font link
-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">


    <title>Document</title>
</head>

<body class="bodyy">

    <!--
    - #FOOTER
  -->

    <footer class="footerrr">

        <div class="footerrr-top section">
            <div class="containerrr">

                <div class="footerrr-brand">

                    @foreach ($siteimage as $item)
                    @endforeach
                    <figure class="footerrr-img">
                        <img src="{{ asset($item->logo) }}" width="250" height="226" loading="lazy"
                            aria-hidden="true" class="">
                    </figure>


                </div>

                <ul class="footerrr-list">

                    <li>
                        <p class="footerrr-list-title">Services</p>
                    </li>

                    @foreach ($serviceone as $item)
                        <li>
                            <a href="{{ route('ServiceDetails', $item->id) }}"
                                class="footerrr-link">{{ $item->Title }}</a>
                        </li>
                    @endforeach


                    @foreach ($servicetwo as $item)
                        <li>
                            <a href="{{ route('ServiceDetails', $item->id) }}"
                                class="footerrr-link">{{ $item->Title }}</a>
                        </li>
                    @endforeach

                    @foreach ($serviceth as $item)
                        <li>
                            <a href="{{ route('ServiceDetails', $item->id) }}"
                                class="footerrr-link">{{ $item->Title }}</a>
                        </li>
                    @endforeach

                    @foreach ($servicef as $item)
                        <li>
                            <a href="{{ route('ServiceDetails', $item->id) }}"
                                class="footerrr-link">{{ $item->Title }}</a>
                        </li>
                    @endforeach



                </ul>

                <ul class="footerrr-list">

                    <li>
                        <p class="footerrr-list-title">Quick Links</p>
                    </li>

                    <li>
                        <a href="/#services" class="footerrr-link">Solutions</a>
                    </li>

                    <li>
                        <a href="/#features" class="footerrr-link">Features</a>
                    </li>

                    <li>
                        <a href="/#about" class="footerrr-link">services</a>
                    </li>

                    <li>
                        <a href="/portfolio" class="footerrr-link">Portfolio</a>
                    </li>

                    <li>
                        <a href="/contactUs" class="footerrr-link">Contact us</a>
                    </li>

                </ul>

                <ul class="footerrr-list">

                    <li>
                        <p class="footerrr-list-title">Contact Us</p>
                    </li>

                    <li class="footerrr-item">
                        <img src="{{ asset('images/contact-icon-1.svg') }}" width="16" height="16"
                            loading="lazy" aria-hidden="true">

                        @foreach ($phonenumber as $item)
                            <span class="span">
                                Call Us:
                                <a href="tel:{{ $item->URL }}" class="footerrr-item-link">{{ $item->URL }}</a>
                            </span>
                        @endforeach

                    </li>

                    <li class="footerrr-item">
                        <img src="{{ asset('images/contact-icon-2.svg') }}" width="16" height="16"
                            loading="lazy" aria-hidden="true">

                        <span class="span">
                            Address:
                            <a href="#" class="footerrr-item-link">egypt, cairo </a>
                        </span>
                    </li>

                    <li class="footerrr-item">
                        <img src="{{ asset('images/contact-icon-3.svg') }}" width="16" height="16"
                            loading="lazy" aria-hidden="true">
                        @foreach ($email as $item)
                            <span class="span">
                                Mail Us:
                                <a href="mailto:{{ $item->URL }}"
                                    class="footerrr-item-link">{{ $item->URL }}</a>
                            </span>
                        @endforeach

                    </li>

                </ul>

            </div>
        </div>

        <div class="footerrr-bottom">
            <div class="containerrr">
                @foreach ($sitename as $item)
                @endforeach
                <p class="copyright">
                    &copy; 2024 <span class="span">{{ $item->data }}</span>

                </p>

                <ul class="footerrr-bottom-list">

                    <li>
                        <a href="/TermsandConditions" class="footerrr-bottom-link">Terms & Conditions</a>
                    </li>

                </ul>

            </div>
        </div>

    </footer>





    <!--
    - custom js link
  -->
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>
