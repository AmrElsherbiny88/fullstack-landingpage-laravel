<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />





<x-NavbarAdmin/>



    {{-- modal edit start --}}
    <section class=" mt-10 grid grid-cols-1 text-center justify-center align-middle">



        <form method="POST" action="{{ route('Updatestats' , $statsdata->id ) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          
            

            <input type="text" placeholder="description"
                class="input input-bordered input-primary w-full max-w-xs " name="Number" value="{{ $statsdata->Number }}"/>

            <br>

            <input type="text" placeholder="description"
            class="input input-bordered input-primary w-full max-w-xs mt-5" name="Numbertype" value="{{ $statsdata->Numbertype }}"/>

        <br>

        <input type="text" placeholder="description"
        class="input input-bordered input-primary w-full max-w-xs mt-5" name="categorie" value="{{ $statsdata->categorie }}"/>

    <br>

        
            <button type="submit" class="btn btn-primary w-full max-w-xs mt-5">Edit</button>
        </form>



    </section>




    
    <script src="https://cdn.tailwindcss.com"></script>