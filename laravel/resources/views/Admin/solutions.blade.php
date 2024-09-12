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




    <h1 class="text-4xl text-center mt-5 mb-5">solutions section</h1>


    {{-- <section  class=" mt-10 grid grid-cols-1 text-center justify-center align-middle">
    
           
        
      <form method="POST" action="{{ route('savesolution') }}" enctype="multipart/form-data">
        @csrf
          <input
        type="text"
        placeholder="Client Name"
        class="input input-bordered input-primary w-full max-w-xs mb-5 mt-5 " 
        name="Title"
        />
        <br>
      
        <input
        type="text"
        placeholder="His site URL"
        class="input input-bordered input-primary w-full max-w-xs " 
        name="description"
        />
      
        <br>
      
        <label class="form-control w-full max-w-xs m-auto">
          <div class="label">
            <span class="label-text mt-5">Client Logo</span>
            
          </div>
          <input type="file" class="file-input file-input-bordered w-full max-w-xs" 
           name="image"
          />
          <div class="label">
            
          </div>
        </label>


 

      
        <button type="submit" class="btn btn-primary w-full max-w-xs">Add Project</button>
      </form>
      
      
      
      </section>
      
        
      </div>
    </div>
  </dialog>
  
</section> --}}





<hr class="mt-11 text-center m-auto w-2/3 ">


<section class="mt-10 mb-11 xl:p-14 ">
    <div class="overflow-x-scroll">
        <table class="table text-4xl border border-gray-600">
          <!-- head -->
          <thead>
            <tr class=" ">
                <th class="text-xl font-bold">id</th>
              <th class="text-xl font-bold">Title</th>
              <th class="text-xl font-bold">description</th>
              <th class="text-xl font-bold">image</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($solutionsdata as $solution)
            <tr>
                <th class="border border-gray-600">{{ $solution->id }}</th>
                <td class="border border-gray-600">{{ $solution->Title }}</td>
                <td class="border border-gray-600">{{ $solution->description }}</td>
                <td class="border border-gray-600">
                    <img src="{{ asset($solution->image) }}" alt="Image 1"
                        class="w-16 h-16 object-cover">
                </td>
              
              
                <td class="border border-gray-600">
                    <a href="{{ route('editsolution', $solution->id) }}" class="btn btn-primary" > 
                      
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