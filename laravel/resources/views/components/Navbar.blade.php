<!DOCTYPE html>
<html class="htmll" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" />

<!-- 
  - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;900&display=swap" rel="stylesheet">


    <title>Document</title>
</head>
<body class="bodyy">
    
  <header class="headerr" data-header>
    <div class="containerrr">

      <h1>
        @foreach ($name as $item)
        <a href="#" class="logoo">{{$item->data}}</a>
        @endforeach

      </h1>

      <nav class="navbarrr container" data-navbar>
        <ul class="navbarrr-list">

          <li class="navbarrr-item">
            <a href="/#home" class="navbarrr-link" data-nav-link>Home</a>
          </li>

          <li class="navbarrr-item">
            <a href="/#services" class="navbarrr-link" data-nav-link>solutions</a>
          </li>

          <li class="navbarrr-item">
            <a href="/#features" class="navbarrr-link" data-nav-link>Features</a>
          </li>

          <li class="navbarrr-item">
            <a href="/#about" class="navbarrr-link" data-nav-link>services</a>
          </li>

          <li class="navbarrr-item">
            <a href="/portfolio" class="navbarrr-link" data-nav-link>Portfolio</a>
          </li>


        </ul>
      </nav>

      <a href="/contactUs"><button class="btnn btnn-secondaryy">Contact Us</button>
      </a>
      <button class="nav-toggle-btnn" aria-label="Toggle menu" data-nav-toggle-btn>
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
      </button>

    </div>
  </header>





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








