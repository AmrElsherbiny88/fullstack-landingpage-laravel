<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 
  - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;900&display=swap" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>


  <title>service</title>
</head>

<style>
  body{
    background-color: hsl(0, 0%, 100%);
  }
  
</style>
<body>
  


<div class="navv">
  <x-Navbar :name="$site_name"/>
</div>

  <!-- loading page start -->
  <x-loading/>
  <!-- loading page end -->

  
  @foreach ($termsdata as $terms)
  <tr>
      <th class="border border-gray-600">{!! $terms->terms !!}</th>

     

      <td class="border border-gray-600">
          <a href="{{ route('editterms', $terms->id) }}" class="btn btn-primary" > 
            
            <button id="edit-model">
            
            Edit <i class="fa-regular fa-pen-to-square"></i></i>
          </button> 
        </a>
      </td>
  </tr>
@endforeach



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









  
  












