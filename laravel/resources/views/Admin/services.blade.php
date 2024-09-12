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






    <h1 class="text-4xl text-center mt-5  mb-5">services section</h1>






<hr class="mt-11 text-center m-auto w-2/3 ">


<section class="mt-10 mb-11 xl:p-14 ">
    <div class="overflow-x-scroll">
        <table class="table text-4xl border border-gray-600">
          <!-- head -->
          <thead>
            <tr class=" ">
             
              <th class="text-xl font-bold">Title</th>
              <th class="text-xl font-bold">summary</th>
              <th class="text-xl font-bold">description</th>
              <th class="text-xl font-bold">image</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($servicesdata as $service)
            <tr>
                <th class="border border-gray-600">{{ $service->Title }}</th>
                <td class="border border-gray-600">{{ $service->description }}</td>
                <td class="border border-gray-600">{{ $service->summary }}</td>
               
                <td class="border border-gray-600">
                    <img src="{{ asset($service->image) }}" alt="Image 1"
                        class="w-16 h-16 object-cover">
                </td>
              
              
                <td class="border border-gray-600">
                    <a href="{{ route('editservice', $service->id) }}" class="btn btn-primary" > 
                      
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



{{-- modal start --}}
<div class="">
 
    <dialog id="my_modal_4" class="modal">
      <div class="modal-box w-11/12 max-w-5xl">
        <form method="dialog">
            <!-- if there is a button, it will close the modal -->
            <button class="btn btn-error w-26 h-2">Close<i class="fa-solid fa-xmark"></i></button>
          </form>
          <h1 class="text-4xl text-center  mb-5">Edit service </h1>
        <section  class=" mt-10 grid grid-cols-1 text-center justify-center align-middle">
    
           
        
        <form class="text-center">
  
          <div class="text-center">
            <input
            type="text"
            placeholder="Edit Title"
            class="input input-bordered input-primary w-full max-w-xs mb-5 mt-5 " />
            <br>

            <input
            type="text"
            placeholder="Edit description"
            class="input input-bordered input-primary w-full max-w-xs mb-5 mt-5 " />
            <br>
       
       
          
            <label class="form-control w-full max-w-xs m-auto">
              <div class="label">
                <span class="label-text">Add new image</span>
                
              </div>
              <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
              <div class="label">
                
              </div>
            </label>
          
          
            
          
           
          
            <button type="submit" class="btn btn-primary w-full max-w-xs">Edit</button>
          </div>
           
        </form>
        
        
        
        </section>
        
          
        </div>
      </div>
    </dialog>
    
  </section>
  


<x-footerAdmin/>



<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>
</html>