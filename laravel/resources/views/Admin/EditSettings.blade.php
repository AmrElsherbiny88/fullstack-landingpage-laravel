<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />





<x-NavbarAdmin/>



    {{-- modal edit start --}}
    <section class=" mt-10 grid grid-cols-1 text-center justify-center align-middle">



       
        <form method="POST" action="{{ route("UpdateSetting" , $Settingsdata->id ) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- <input type="text" placeholder="Title"
                class="input input-bordered input-primary w-full max-w-xs mb-5 mt-5 " name="Platform" value="{{ $contactdata->Platform }}" />

                
            <br> --}}
            <h1 class="h1">{{ $Settingsdata->settingType }}</h1>
            <br/>

            @if ( $Settingsdata->settingType == "Site_image"  ) 
            <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="logo"/>
            <br>
            <br>
            @else
                <input type="text" placeholder="URL or Data"
                    class="input input-bordered input-primary w-full max-w-xs mb-5" name="data" value="{{ $Settingsdata->data }}"/>
                <br>
            @endif
           
            <button type="submit" class="btn btn-primary w-full max-w-xs">Edit</button>
        </form>



    </section>




    
    <script src="https://cdn.tailwindcss.com"></script>