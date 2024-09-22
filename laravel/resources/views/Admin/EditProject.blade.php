<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />





<x-NavbarAdmin/>



    {{-- modal edit start --}}
    <section class=" mt-10 grid grid-cols-1 text-center justify-center align-middle">



        <form method="POST" action="{{ route('Update' , $project->id ) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Project Title"
                class="input input-bordered input-primary w-full max-w-xs mb-5 mt-5 " name="title" value="{{ $project->title }}" />
            <br>

            <input type="text" placeholder="Project description"
                class="input input-bordered input-primary w-full max-w-xs " name="Body" value="{{ $project->Body }}"/>

            <br>

            <input type="text" placeholder="project_summary"
            class="input input-bordered input-primary w-full max-w-xs mt-5" name="project_summary" value="{{ $project->project_summary }}"/>
        
        <br>

            <input type="text" placeholder="project_url"
            class="input input-bordered input-primary w-full max-w-xs mt-5" name="project_url" value="{{ $project->project_url }}"/>

        <br>

        <input type="date" placeholder="date_of_creation"
        class="input input-bordered input-primary w-full max-w-xs mt-5" name="date_of_creation" value="{{ $project->date_of_creation }}"/>

        <br>



        <input type="text" placeholder="client_name"
        class="input input-bordered input-primary w-full max-w-xs mt-5" name="client_name" value="{{ $project->client_name }}"/>

    <br>

    <input type="text" placeholder="client_url"
    class="input input-bordered input-primary w-full max-w-xs mt-5" name="client_url" value="{{ $project->client_url }}"/>

<br>


            <label class="form-control w-full max-w-xs m-auto">
                <div class="label">
                    <span class="label-text mt-5">Project thumbnail</span>

                </div>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="Thumbnail"/>
                <div class="label">

                </div>
            </label>

            
            <label class="form-control w-full max-w-xs m-auto">
                <div class="label">
                    <span class="label-text mt-5">client_logo</span>

                </div>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="client_logo"/>
                <div class="label">

                </div>
            </label>

            <label class="form-control w-full max-w-xs m-auto">
                <div class="label">
                    <span class="label-text">Image 1</span>

                </div>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image1"/>
                <div class="label">

                </div>
            </label>

            <label class="form-control w-full max-w-xs m-auto">
                <div class="label">
                    <span class="label-text">Image 2</span>

                </div>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image2"/>
                <div class="label">

                </div>
            </label>

            <label class="form-control w-full max-w-xs m-auto">
                <div class="label">
                    <span class="label-text">Image 3</span>

                </div>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image3"/>
                <div class="label">

                </div>
            </label>

            <label class="form-control w-full max-w-xs m-auto">
                <div class="label">
                    <span class="label-text">Image 4</span>

                </div>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image4"/>
                <div class="label">

                </div>
            </label>

            <button type="submit" class="btn btn-primary w-full max-w-xs">Edit</button>
        </form>



    </section>




    
    <script src="https://cdn.tailwindcss.com"></script>