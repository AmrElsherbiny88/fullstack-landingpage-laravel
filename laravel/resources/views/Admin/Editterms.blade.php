<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />



<x-NavbarAdmin/>



    {{-- modal edit start --}}
    <section class=" mt-10 grid grid-cols-1 text-center ">



        <form method="POST" action="{{ route('Updateterms' , $termsdata->id ) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          
            

           

            <div id="editor">
            {!!  $termsdata->terms !!}
            </div>
            
          
            <input type="hidden" id="quill-input" name="terms"  value="{{ $termsdata->terms }}" />

        
            <button type="submit" class="btn btn-primary w-full max-w-xs mt-5">Edit</button>
        </form>



    </section>


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