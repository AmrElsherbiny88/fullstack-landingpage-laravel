<link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" />
  <!-- loading page start -->
  <div class="loader">
    <div>

   
<div class="loading">
  <div class="loading-wide">
    <div class="l1 color"></div>
    <div class="l2 color"></div>
    <div class="e1 color animation-effect-light"></div>
    <div class="e2 color animation-effect-light-d"></div>
    <div class="e3 animation-effect-rot">X</div>
    <div class="e4 color animation-effect-light"></div>
    <div class="e5 color animation-effect-light-d"></div>
    <div class="e6 animation-effect-scale">*</div>
    <div class="e7 color"></div>
    <div class="e8 color"></div>
  </div>
</div>

    </div>

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