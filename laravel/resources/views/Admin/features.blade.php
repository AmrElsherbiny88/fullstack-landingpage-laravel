<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <x-loadingDahboard/>

<x-NavbarAdmin/>




    <h1 class="text-4xl text-center  mb-5 mt-">features section</h1>

<hr class="mt-11 text-center m-auto w-2/3 ">


<section class="mt-10 mb-11 xl:p-14 ">
    <div class="overflow-x-scroll">
        <table class="table text-4xl border border-gray-600">
          <thead>
            <tr class=" ">
                <th class="text-xl font-bold border-gray-600">#</th>
                <th class="text-xl font-bold border-gray-600">description</th>
                <th class="text-xl font-bold border-gray-600">icon</th>
               
         
            </tr>
        </thead>
        <tbody>
            @foreach ($featuresdata as $feature)
            <tr>
                <th class="border border-gray-600">{{ $feature->id }}</th>
                <td class="border border-gray-600">{{ $feature->description }}</td>
               
                <td class="border border-gray-600">
                    <img src="{{ asset($feature->icon) }}" alt="Image 1"
                        class="w-16 h-16 object-cover">
                </td>
              
              
                <td class="border border-gray-600">
                    <a href="{{ route('editfeatures', $feature->id) }}" class="btn btn-primary" > 
                      
                      <button id="edit-model">
                      
                      Edit <i class="fa-regular fa-pen-to-square"></i></i>
                    </button> 
                  </a>
                </td>
            </tr>
        @endforeach

    
          </tbody>
        </table>
      </div>
</section>





          
   

  
  

<x-footerAdmin/>



<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>
</html>