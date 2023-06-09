@extends('layouts.master')
@section('title','Appliers|by job')
@section('main')


<div class=" pt-8 my-4 py-6 mx-10/12">
    <h2 class=" sm:text-2xl sm:font-bold md:text-4xl md:font-extrabold mx-auto my-6 text-center text-cyan-700">Postulants Are Interested Of this Job</h2>
    <hr class=" sm:w-24 md:w-48 h-1 mx-auto my-4 mb-10 bg-yellow-400 border-0 rounded md:my-7 dark:bg-gray-700">
  </div>
<div class=" sm:w-full mt-16 m-auto md:container relative overflow-x-auto shadow-md sm:rounded-lg mb-6">
    <table class=" w-full m-auto text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                        Image
                </th>

                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Name
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Title
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Position
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Address postulant
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Gender
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>

                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Date of applicate
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Resume
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $app)
              @foreach ($app->users as $user)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img class=" mt-2 w-12 h-12 mb-3 rounded-full shadow-lg" src="{{asset('storage/'.$user->profile_photo_path)}}" alt="Bonnie image"/>
                    {{-- {{$user->profile_photo_path}} --}}
                </th>
                <td class="px-6 py-4">
                    <i class="text-blue-400 fas fa-signature"></i>
                    {{$user->name}}<br>
                    {{-- <i class=" text-blue-400 fas fa-clock"></i>&nbsp;{{$job->type}} --}}
                 </td>
                <td class=" flex items-center gap-3 px-6 py-4">
                    <img class=" mt-1 w-12 h-12 mb-1 rounded-full  " src="{{asset('imgs/loudspeaker.jpg')}}" alt="loudspeaker"/>
                    {{$app->title}}<br>
                    {{-- <i class=" text-blue-400 fas fa-clock"></i>&nbsp;{{$job->type==1?'fulltime':'remote'}} --}}
                 </td>

                <td class="px-6 py-4">
                    {{$app->position}}<br>
                    <i class=" text-blue-400 fas fa-clock"></i>
                    &nbsp;{{$app->type==1?'fulltime':'remote'}}
                </td>
                <td class="px-6 py-4">
                    <i class=" text-blue-400 fas fa-map-marker"></i>&nbsp; {{$user->profiles->address}}
                </td>
                <td class=" px-6 py-4 ">
                    <i class=" text-blue-400 fas fa-venus-mars text-l"></i>&nbsp; {{$user->gender}}

                </td>
                <td >
                    <i class=" text-blue-400 fas fa-globe-americas"></i>
                    {{$user->pivot->created_at->diffForHumans()}}
                </td>

                <td >
                    <a href="{{Storage::url($user->profiles->resume)}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Resume</a>
                </td>

            </tr>
              @endforeach
            @endforeach

        </tbody>
    </table>
</div>

<br><br><br><br>



<script>
    var loader = document.getElementById('ld');
    var bd = document.getElementById('bd');
    var content = document.getElementById('content');
      content.style.opacity = "0.1";
      window.addEventListener('load', function() {
      loader.style.display = "none";
      content.style.opacity = "1";

            });
</script>

@endsection
