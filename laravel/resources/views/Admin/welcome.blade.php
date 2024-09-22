<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

    <x-loadingDahboard />

    <x-NavbarAdmin />

    <div class="hero min-h-screen"
        style="background-image: url('https://yourmediahelp.com/wp-content/uploads/2019/03/full-service-1024x615.png');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div data-aos="fade-up" class="max-w-md text-white ">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">

                    Here in that dashboard you can control your landing page by adding data and custom all the ui
                    content freely and so easy
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>


    <div class="card bg-base-100 w-100 shadow-xl mb-11  ">
        <figure>
            <div>
                <h1 data-aos="fade-down" class="text-3xl text-center p-5">Here you can edit ui data or add and delete
                    projects and custom your data without typing any code !</h1>
            </div>
        </figure>

        <div data-aos="fade-right">
            <div class="mockup-code mt-11 ">
                <pre data-prefix="1"><code><span class="text-red-600">&lt;h1&gt;</span>You dont write any code!<span class="text-red-600">&lt;/h1&gt;</span></code></pre>
            </div>
        </div>
    </div>


    <div class="card bg-base-100 w-100 shadow-xl mb-11">
        <figure data-aos="fade-up">
            <img src="{{ asset('images/Collaborate.svg') }}" alt="Shoes" />
        </figure>
        <div data-aos="fade-down" class="card-body">
            <p class="text-3xl text-center">Here you can control your projects by add , delete and view them and easily
                access them</p>

        </div>
    </div>




    <div class="card bg-base-100 w-100 shadow-xl mb-11">
        <figure data-aos="fade-right">
            <img src="{{ asset('images/undraw_website_ij0l.svg') }}" alt="Shoes" />
        </figure>
        <div data-aos="fade-down" class="card-body">
            <p class="text-3xl text-center">and you can control your Home Page content by Edit text , Ad servece and
                alot another data</p>

        </div>
    </div>




    <div class="card bg-base-100 w-100 shadow-xl mb-11">
        <figure data-aos="fade-right">
            <img src="{{ asset('images/undraw_contact_us_re_4qqt (1).svg') }}" alt="Shoes" />
        </figure>
        <div data-aos="fade-down" class="card-body">
            <p class="text-3xl text-center"> you can edit and manage your contact informations and social media links
                and edit the site widgets </p>

        </div>
    </div>



    {{-- footer --}}




    @guest

        <div class="btm-nav text-center">
            <a href="/login">
                <button>
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span class="btm-nav-label">login</span>
                </button>
            </a>


            <a href="/register">
                <button>
                    <i class="fa-solid fa-user-plus"></i>
                    <span class="btm-nav-label">register</span>
                </button>
            </a>


            <a href="/">
                <button>
                    <i class="fa-regular fa-window-maximize"></i>
                    <span class="btm-nav-label">Main site</span>
                </button>
            </a>

        </div>

    @endguest


    @auth
        <div class="btm-nav text-center">
            <a href="/AddProject">
                <button>
                    <i class="fa-solid fa-list-check"></i>
                    <span class="btm-nav-label">projects</span>
                </button>
            </a>


            <a href="/register">
                <button>
                    <i class="fa-solid fa-house"></i>
                    <span class="btm-nav-label">Edit Home</span>
                </button>
            </a>



            <form method="POST" action="{{ route('logout') }}">
                @csrf



                <button>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>

                    <span class="btm-nav-label">logout</span>
                </button>

            </form>

        </div>
    @endauth






    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



    <script>
        // Function to apply the theme
        function applyTheme(theme) {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme); // Store the theme in localStorage
        }

        // On page load, check if a theme is saved in localStorage
        document.addEventListener("DOMContentLoaded", function() {
            const savedTheme = localStorage.getItem('theme');

            if (savedTheme) {
                // Apply the saved theme from localStorage
                applyTheme(savedTheme);
            } else {
                // If no theme is saved, use system preferences for dark/light mode
                if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    applyTheme('business'); // Default dark mode theme
                } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                    applyTheme('light'); // Default light mode theme
                }
            }

            // Add event listeners for theme change buttons
            document.getElementById('theme-dark').addEventListener('click', function() {
                applyTheme('business'); // Change to 'synthwave' theme
            });

            document.getElementById('theme-light').addEventListener('click', function() {
                applyTheme('light'); // Change to 'light' theme
            });
        });
    </script>
</body>

</html>
