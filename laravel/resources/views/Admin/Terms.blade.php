<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css"  href="{{ asset('css/text.css') }}" />
    <title>Document</title>
</head>

<body>
    <x-loadingDahboard/>

<x-NavbarAdmin/>

    <h1 class=" text-center  mb-5">Terms section</h1>

<hr class="mt-11 text-center m-auto w-2/3 ">




{{-- 
<form method="POST" action="{{ route('storeterms') }}" enctype="multipart/form-data">
  @csrf


  <div id="editor">
    
  </div>
  

  <input type="hidden" id="quill-input" name="terms"  />


  <button type="submit" class="btn btn-primary w-full max-w-xs">Add terms</button>
</form> --}}




<section class="mt-10 mb-11 xl:p-14 ">
    <div class="overflow-x-scroll">
        <table class="table text-4xl border border-gray-600">
          <!-- head -->
          <thead>
            <tr class="">
              <th class="text-xl font-bold"> Terms</th>
            </tr>
          </thead>
          <tbody>
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
          
          </tbody>
        </table>
      </div>
</section>







{{-- <div class="top-auto">
  <x-footerAdmin/>
</div> --}}


<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<script>

    const quill = new Quill('#editor', {
      theme: 'snow'
    });
  
    // Get reference to the input field
    const quillInput = document.getElementById('quill-input');
  
    
    quill.on('text-change', function() {
      quillInput.value = quill.root.innerHTML;
    });
  </script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>
</html>