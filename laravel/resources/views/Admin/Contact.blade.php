<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>
    <x-loadingDahboard/>

<x-NavbarAdmin/>




    <h1 class="text-4xl text-center  mb-5 mt-5">Contact us section</h1>



    {{-- <form method="POST" action="{{ route('storecontact') }}" enctype="multipart/form-data">
      @csrf

      <input type="text" placeholder="Project Title"
          class="input input-bordered input-primary w-full max-w-xs mb-5 mt-5 " name="Platform" />
      <br>

      <input type="text" placeholder="Project description"
          class="input input-bordered input-primary w-full max-w-xs " name="URL" />

      <br>





      <button type="submit" class="btn btn-primary w-full max-w-xs">Add Project</button>
  </form> --}}





<hr class="mt-11 text-center m-auto w-2/3 ">


<section class="mt-10 mb-11 xl:p-14 ">
    <div class="overflow-x-scroll">
        <table class="table text-4xl border border-gray-600">
          <!-- head -->
          <thead>
            <tr class=" ">
              <th class="text-xl font-bold ">Platform</th>
             
              <th class="text-xl font-bold">URL</th>
             
            </tr>
          </thead>
          <tbody>
            @foreach ($contactdata as $contact)
            <tr>
          
                <td class="border border-gray-600">{{ $contact->Platform }}</td>
                <td class="border border-gray-600">{{ $contact->URL }}</td>
            
              
              
                <td class="border border-gray-600">
                    <a href="{{ route('editcontact', $contact->id) }}" class="btn btn-primary" > 
                      
                      <button id="edit-model">
                      
                      Edit <i class="fa-regular fa-pen-to-square"></i></i>
                    </button> 
                  </a>
                </td>
            </tr>
        @endforeach



{{-- 
              <!-- row 2 -->
              <tr>
                <th  class="border border-gray-600">Facebook</th>
                <td class="border border-gray-600">Quality Control Specialist</td>
                <td class="border border-gray-600"> 
                  <button class="btn btn-primary" onclick="my_modal_4.showModal()">Edit <i class="fa-regular fa-pen-to-square"></i></i></button>
             </td>
              </tr>

                <!-- row 3 -->
            <tr>
                <th  class="border border-gray-600">Github</th>
                <td class="border border-gray-600">Quality Control Specialist</td>
                <td class="border border-gray-600"> 
                  <button class="btn btn-primary" onclick="my_modal_4.showModal()">Edit <i class="fa-regular fa-pen-to-square"></i></i></button>
             </td>
              </tr>

              <tr>
                <th  class="border border-gray-600">instagam</th>
                <td class="border border-gray-600">Quality Control Specialist</td>
                <td class="border border-gray-600"> 
                  <button class="btn btn-primary" onclick="my_modal_4.showModal()">Edit <i class="fa-regular fa-pen-to-square"></i></i></button>
             </td>
              </tr>
              <tr>
                <th  class="border border-gray-600">Map location</th>
                <td class="border border-gray-600">Quality Control Specialist</td>
                <td class="border border-gray-600"> 
                  <button class="btn btn-primary" onclick="my_modal_4.showModal()">Edit <i class="fa-regular fa-pen-to-square"></i></i></button>
             </td>
              </tr>

              <tr>
                <th  class="border border-gray-600">Email</th>
                <td class="border border-gray-600">Quality Control Specialist</td>
                <td class="border border-gray-600"> 
                  <button class="btn btn-primary" onclick="my_modal_4.showModal()">Edit <i class="fa-regular fa-pen-to-square"></i></i></button>
             </td>
              </tr>

              <tr>
                <th  class="border border-gray-600">Phone number</th>
                <td class="border border-gray-600">Quality Control Specialist</td>
                <td class="border border-gray-600"> 
                  <button class="btn btn-primary" onclick="my_modal_4.showModal()">Edit <i class="fa-regular fa-pen-to-square"></i></i></button>
             </td>
              </tr>
     --}}
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