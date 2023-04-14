
@extends('layouts.master');
@section('title','Jobs| Company')


<div class=" mt-15 mb-20">

        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{asset('cover/pexels-fauxels-3184430.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('cover/pexels-marc-mueller-380769.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('cover/pexels-photomix-company-518244.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('cover/pexels-pixabay-269077.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="my-4 py-6">
        <h2 class="sm:text-2xl md:text-6xl font-extrabold mx-auto my-6 w-100 text-center text-cyan-700 capitalize">introduction about our company</h2>
        <hr class="w-48 h-1 mx-auto my-4 mb-10 bg-yellow-400 border-0 rounded md:my-7 dark:bg-gray-700">
      </div>


    <div class="sm:my-8 w-10/12 grid sm:grid-cols-1 md:grid-cols-2 mx-auto ">
        <div>
            <img src="{{asset('imgs/company.png')}}" alt="company image">
        </div>
        <div class="my-auto ">
            <p class=" leading-loose text-xl font-bold"><mark>{{$company->name}}</mark> is a leading provider of different services. Our mission is to deliver high-quality solutions to our clients while maintaining the highest level of customer satisfaction. With years of experience in the industry, we have established a strong reputation for providing innovative and reliable solutions.

                Our team of experts consists of highly skilled professionals who are committed to delivering excellence in all aspects of our business. We leverage the latest technologies and industry best practices to ensure that our clients receive the most effective solutions for their needs.

                At <mark>{{$company->name}}</mark>, we are dedicated to creating long-lasting relationships with our clients. We strive to understand their unique requirements and work collaboratively with them to achieve their business objectives. Our goal is to provide exceptional value and service, which is reflected in our track record of client satisfaction.</p>
        </div>
    </div>


    <div class=" py-16 my-16 grid sm:grid-cols-1 md:grid-cols-3 mx-auto text-center ">
        <div>
            <i class=" text-blue-400 text-6xl fas fa-phone"></i>
            <h3 class=" mt-8 text-3xl font-semibold text-gray-400 dark:text-white">{{$company->phone}}</h3>
        </div>
        <div class="sm:my-8 md:my-0">
            <i class=" text-blue-400 text-6xl   fas fa-map-marker"></i>
            <h3 class=" mt-8 text-3xl font-semibold text-gray-400 dark:text-white">{{$company->address}}</h3>
        </div>
        <div>
            <i class=" text-blue-400 text-6xl fas fa-globe"></i>
            <h3><a href="#" class="mt-8 text-3xl  font-semibold inline-flex items-center text-cyan-700 hover:underline">{{$company->website}}</a></h3>
        </div>

    </div>


<div class="grid sm:h-2/3  sm:grid-cols-1 sm:w-full  md:grid-cols-2 gap-4 md:h-1/2 md:W-10/12 mx-auto border-2 border-grey-400 rounded-lg p-6">
    <div class="my-auto">
      <img class="h-auto w-full bg-cover  max-w-lg rounded-lg" src="{{asset('storage/'.$company->cover_photo)}}" alt="image description">
    </div>

    <figure class="max-w-screen-md my-auto ">
        <p class="text-4xl my-4 font-semibold text-gray-900 dark:text-white">{{$company->name}}</p>

        <div class="flex items-center mb-4 text-yellow-300">
            <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        </div>
        <blockquote>
            <p class="text-2xl font-semibold text-gray-900 dark:text-white">{{$company->description}}</p>
        </blockquote>
        <figcaption class="flex items-center mt-6 space-x-3">
            <img class="w-6 h-6 rounded-full" src="{{asset('storage/'.$company->user->profile_photo_path)}}" alt="profile picture">
            <div class="flex items-center divide-x-2 divide-gray-300 dark:divide-gray-700">
                <cite class="pr-3 font-medium text-gray-900 dark:text-white">{{$company->user->name}}</cite>
                <cite class="pl-3 text-sm text-gray-500 dark:text-gray-400">responsible at {{$company->name}} </cite>
            </div>
        </figcaption>
    </figure>

</div>


    <div class="sm:my-8 md:my-4 py-6">
        <h2 class=" sm:text-2xl md:text-6xl font-extrabold mx-auto my-6 w-100 text-center text-cyan-700">Recent Jobs Of this Company</h2>
        <hr class="w-48 h-1 mx-auto my-4 mb-10 bg-yellow-400 border-0 rounded md:my-7 dark:bg-gray-700">
      </div>
    <div class=" md:container mx-auto relative overflow-x-auto shadow-md sm:rounded-lg mb-6">
        <table class=" w-full m-auto text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Logo
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
                            Address
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Date
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Apply</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($company->jobs as $job)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img class=" mt-1 w-12 h-12 mb-1 rounded-full shadow-lg bg-cover m-auto " src="{{asset('storage/'.$job->company->cover_photo)}}" alt="Bonnie image"/>                    </th>
                    <td class=" flex gap-4 items-center px-6 py-4">
                        <img class=" mt-1 w-12 h-12 mb-1 rounded-full  " src="{{asset('imgs/loudspeaker.jpg')}}" alt="loudspeaker"/>
                        {{$job->title}}
                     </td>
                    <td class="px-6 py-4">
                        {{$job->position}}<br>
                        <i class=" text-blue-400 fas fa-clock"></i>&nbsp;{{$job->type}}
                     </td>

                    <td class="px-6 py-4">
                        <i class=" text-blue-400 fas fa-map-marker"></i> {{$job->address}}
                    </td>
                    <td class="px-6 py-4">
                        <i class=" text-blue-400 fas fa-globe-americas"></i>
                        {{$job->created_at->diffForHumans()}}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                        <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Details</button>
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="mt-3 flex flex-col mx-3 justify-center p-3">
            {{ $jobs->links('pagination::tailwind') }}
        </div>
    </div>

</div>
 {{-- @section('main')


 @endsection --}}
