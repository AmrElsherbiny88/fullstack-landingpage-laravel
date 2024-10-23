<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

  
    <x-loadingDahboard/>

<x-NavbarAdmin/>
<h1 class="text-4xl text-center  mb-5">Clients Section</h1>
<!-- You can open the modal using ID.showModal() method -->

<section class="mt-5 mb-5 p-5">




  <div class="text-center">
      <button class="btn btn-primary" onclick="my_modal_4.showModal()">Add client <i
              class="fa-solid fa-plus"></i></button>
  </div>
</section>



{{-- modal start --}}
<div>
 
    <dialog id="my_modal_4" class="modal">
      <div class="modal-box w-11/12 max-w-5xl">
        <form method="dialog">
            <!-- if there is a button, it will close the modal -->
            <button class="btn btn-error w-26 h-2">Close<i class="fa-solid fa-xmark"></i></button>
          </form>
          <h1 class="text-4xl text-center  mb-5">Add client</h1>
        <section  class=" mt-10 grid grid-cols-1 text-center justify-center align-middle">
    
           
        
        <form method="POST" action="{{ route('storeclient') }}" enctype="multipart/form-data">
          @csrf
            <input
          type="text"
          placeholder="Client Name"
          class="input input-bordered input-primary w-full max-w-xs mb-5 mt-5 " 
          name="clientname" 
          required
          />
          <br>
        
          <input
          type="text"
          placeholder="His site URL"
          class="input input-bordered input-primary w-full max-w-xs " 
          name="SiteUrl"
        
          />
        
          <br>
        
          <label class="form-control w-full max-w-xs m-auto">
            <div class="label">
              <span class="label-text mt-5">Client Logo</span>
              
            </div>
            <input type="file" class="file-input file-input-bordered w-full max-w-xs" 
             name="logo"
             required
            />
            <div class="label">
              
            </div>
          </label>

  
   

        
          <button type="submit" class="btn btn-primary w-full max-w-xs">Add client</button>
        </form>
        
        
        
        </section>
        
          
        </div>
      </div>
    </dialog>
    
</section>




<hr class=" text-center m-auto w-2/3 mt-3 ">


<section class="mt-10 mb-11 xl:p-14 ">
    <div class="overflow-x-scroll">
        <table class="table text-4xl border border-gray-600">
          <!-- head -->
          <thead>
            <tr class=" ">
              <th class="text-xl font-bold border-gray-600">#</th>
              <th class="text-xl font-bold border-gray-600">client name</th>
              <th class="text-xl font-bold  border-gray-600">Site Url</th>
              <th class="text-xl font-bold border-gray-600">logo</th>
             
            </tr>
          </thead>
          <tbody>
            @foreach ($clientsdata as $client)
            <tr>
                <th class="border border-gray-600">{{ $client->id }}</th>
                <td class="border border-gray-600">{{ $client->clientname }}</td>
                <td class="border border-gray-600">{{ $client->siteURL }}</td>
                <td class="border border-gray-600">
                    <img src="{{ asset($client->logo) }}" alt="Image 1"
                        class="w-16 h-16 object-cover">
                </td>
              
                <form action="{{route('destroyclient',$client->id)}}" method="POST">
                  @method("DELETE")
                  @csrf
                <td class="border border-gray-600"><button class="btn btn-error">Delete <i
                            class="fa-solid fa-trash"></i></button></td>
                          </form>
                <td class="border border-gray-600">
                    <a href="{{ route('editclient', $client->id) }}" class="btn btn-primary" > 
                      
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