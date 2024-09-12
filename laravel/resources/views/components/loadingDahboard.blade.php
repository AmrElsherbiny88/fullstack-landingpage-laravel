<link rel="stylesheet" type="text/css"  href="{{ asset('css/Dashboard.css') }}" />
  <!-- loading page start -->
  <div class="loader">
   
<span class="loading loading-bars loading-lg"></span>
  </div>
  <!-- loading page end -->

<script>
      
// loading page start
window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
  
    loader.classList.add("loader--hidden");
  
    loader.addEventListener("transitionend", () => {
      document.body.removeChild(loader);
    });
  });
//   loading page end

</script>