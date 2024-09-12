<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
      
    <title>Document</title>
</head>

<body>
    <x-loadingDahboard />

    <x-NavbarAdmin />
    <h1 class="text-4xl text-center  mb-5">Portfolio Projects</h1>
    <!-- You can open the modal using ID.showModal() method -->

    <section class="grid xl:grid-cols-2 grid-cols-1 xl:p-16">



        <div class="mb-3">
            <label class="input input-bordered flex items-center gap-2 xl:w-2/3">
                <input type="text" class="grow" placeholder="Search" />
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

            </label>
        </div>

        <div class="xl:ms-auto text-center">
            <button class="btn btn-primary" onclick="my_modal_4.showModal()">Add Project <i
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
                <h1 class="text-4xl text-center  mb-5">Portfolio Projects</h1>
                <section class=" mt-10 grid grid-cols-1 text-center justify-center align-middle">


                    <form method="POST" action="{{ route('Addproject') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="text" placeholder="Project Title"
                        class="input input-bordered input-primary w-full max-w-xs mb-5 mt-5 " name="title" />
                        <br>

                        <input type="text" placeholder="Project description"
                            class="input input-bordered input-primary w-full max-w-xs " name="Body" />

                        <br>

                        <label class="form-control w-full max-w-xs m-auto">
                            <div class="label">
                                <span class="label-text mt-5">Project thumbnail</span>

                            </div>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs"
                                name="Thumbnail" />
                            <div class="label">

                            </div>
                        </label>

                        <label class="form-control w-full max-w-xs m-auto">
                            <div class="label">
                                <span class="label-text">Image 1</span>

                            </div>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs"
                                name="image1" />
                            <div class="label">

                            </div>
                        </label>

                        <label class="form-control w-full max-w-xs m-auto">
                            <div class="label">
                                <span class="label-text">Image 2</span>

                            </div>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs"
                                name="image2" />
                            <div class="label">

                            </div>
                        </label>

                        <label class="form-control w-full max-w-xs m-auto">
                            <div class="label">
                                <span class="label-text">Image 3</span>

                            </div>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs"
                                name="image3" />
                            <div class="label">

                            </div>
                        </label>

                        <label class="form-control w-full max-w-xs m-auto">
                            <div class="label">
                                <span class="label-text">Image 4</span>

                            </div>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs"
                                name="image4" />
                            <div class="label">

                            </div>
                        </label>

                        <button type="submit" class="btn btn-primary w-full max-w-xs">Add Project</button>
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
                        <th class="text-xl font-bold border-gray-600">Title</th>
                        <th class="text-xl font-bold border-gray-600">Body</th>
                        <th class="text-xl font-bold border-gray-600">created at</th>
                        <th class="text-xl font-bold  border-gray-600">Thumbnail</th>
                        <th class="text-xl font-bold  border-gray-600">image 1</th>
                        <th class="text-xl font-bold  border-gray-600">image 2</th>
                        <th class="text-xl font-bold  border-gray-600">image 3</th>
                        <th class="text-xl font-bold  border-gray-600">image 4</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($projects as $project)
                    <div>
                    
                    </div>
                        <tr>
                            <th class="border border-gray-600">{{ $project->id }}</th>
                            <td class="border border-gray-600">{{ $project->title }}</td>
                            <td class="border border-gray-600">{{ $project->Body }}</td>
                            <td class="border border-gray-600">{{ $project->created_at }}</td>
                            <td class="border border-gray-600">
                                <img src="{{ asset($project->Thumbnail) }}" alt="Image 1"
                                    class="w-16 h-16 object-cover">
                            </td>
                            <td class="border border-gray-600">
                                <img src="{{ asset($project->image1) }}" alt="Image 1"
                                    class="w-16 h-16 object-cover">
                            </td>
                            <td class="border border-gray-600">
                                <img src="{{ asset($project->image2) }}" alt="Image 1"
                                    class="w-16 h-16 object-cover">
                            </td>
                            <td class="border border-gray-600">
                                <img src="{{ asset($project->image3) }}" alt="Image 1"
                                    class="w-16 h-16 object-cover">
                            </td>
                            <td class="border border-gray-600">
                                <img src="{{ asset($project->image4) }}" alt="Image 1"
                                    class="w-16 h-16 object-cover">
                            </td>
                            <form action="{{route('destroy',$project->id)}}" method="POST">
                              @method("DELETE")
                              @csrf
                            <td class="border border-gray-600"><button class="btn btn-error">Delete <i
                                        class="fa-solid fa-trash"></i></button></td>
                                      </form>
                            <td class="border border-gray-600">
                                <a href="{{ route('edit', $project->id) }}" class="btn btn-primary" > 
                                  
                                  <button id="edit-model">
                                  
                                  Edit <i class="fa-regular fa-pen-to-square"></i></i>
                                </button> 
                              </a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- row 2 -->

                </tbody>
            </table>
        </div>
    </section>





    <x-footerAdmin />




     

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
