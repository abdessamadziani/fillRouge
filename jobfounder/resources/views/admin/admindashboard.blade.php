
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{asset('resources/css/mycss.css') }}">



</head>
<body >


<nav class="fixed top-0 z-50 w-full bg-gradient-to-r from-cyan-700 to-blue-900 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
            <i class="fas fa-yin-yang text-2xl text-yellow-400 mx-2 "></i>
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white dark:text-white">Jbs <span class="text-yellow-400">Grab</span></span>
        </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="{{asset('storage/'.auth()->user()->profile_photo_path)}}" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">

                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                  </li>
                  <form method="POST" action="{{auth()->user()?route('logout'):''}}">
                    @csrf
                    @if (auth()->check())
                        <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
                        <hr>
                        @if (auth()->user()->user_type == "recruiter")
                        <a class="  block m-auto px-2 py-2" href="#">
                            <img class=" w-20 h-10 rounded-t-lg" src="{{asset('storage/'.auth()->user()->companies->cover_photo)}}" alt="" />
                        </a>
                        @else
                         <button class="block w-full text-left px-4 py-2 font-bold font-mono hover:bg-gray-100 dark:hover:bg-gray-600 text-yellow-400">{{ auth()->user()->name }}</button>
                        @endif
                    @else
                        <a href="{{ route('login')}} " class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Login</a>
                    @endif
                </form>


                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                 <span class="ml-3">Dashboard</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                 <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                 <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                 <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                 <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
              </a>
           </li>
           <li>
              <a href="{{route('admin.users')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                 <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                 <div class="flex mb-5 -space-x-4">
                </div>
                <div class="flex -space-x-4">
                <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('imgs/man1.jpg')}}" alt="">
                <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('imgs/ghisani.jpg')}}" alt="">
                <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('imgs/girl1.jpg')}}" alt="">
                </div>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                 <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                 <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                 <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
              </a>
           </li>
        </ul>
     </div>
  </aside>

 <div class="p-4 sm:ml-64">
    <div class=" grid grid-cols-4  gap-x-3 p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">


    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4">
        <div class="flex items-center">
            <div class="inline-flex flex-shrink-0 justify-center items-center w-12 h-12 text-white bg-gradient-to-br from-pink-500 to-voilet-500 rounded-lg">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
            </svg>
            </div>
            <div class="flex-shrink-0 ml-3">
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">{{$nbcompanies}}</span>
            <h3 class="text-base font-normal text-gray-500">
            Companies
            </h3>
            </div>
            <div class="flex flex-1 justify-end items-center ml-5 w-0 text-base font-bold text-green-500">
                +{{ $newCompaniesCount}} <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
            </div>
        </div>
    </div>


    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4">
        <div class="flex items-center">
            <div class="inline-flex flex-shrink-0 justify-center items-center w-12 h-12 text-white bg-gradient-to-br from-pink-500 to-voilet-500 rounded-lg">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
            </svg>
            </div>
            <div class="flex-shrink-0 ml-3">
                   {{-- @foreach($totalapplicants as $app) --}}
                <span class=" text-2xl font-bold leading-none text-gray-900 sm:text-3xl">{{$totalapplicants}}</span>
                {{-- @foreach($totalapplicants as $app) --}}
            <h3 class="text-base font-normal text-gray-500">
             Total applicants
            </h3>
            </div>
            <div class="flex flex-1 justify-end items-center ml-5 w-0 text-base font-bold text-green-500">
            +{{$newApplicantsCount}}
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4">
        <div class="flex items-center">
            <div class="inline-flex flex-shrink-0 justify-center items-center w-12 h-12 text-white bg-gradient-to-br from-pink-500 to-voilet-500 rounded-lg">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
            </svg>
            </div>
            <div class="flex-shrink-0 ml-3">
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">{{$nbjobs}}</span>
            <h3 class="text-base font-normal text-gray-500">
                Job opportunities</h3>
            </div>
            <div class="flex flex-1 justify-end items-center ml-5 w-0 text-base font-bold text-green-500">
                +{{ $newJobsCount}}            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4">
        <div class="flex items-center">
            <div class="inline-flex flex-shrink-0 justify-center items-center w-12 h-12 text-white bg-gradient-to-br from-pink-500 to-voilet-500 rounded-lg">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
            </svg>
            </div>
            <div class="flex-shrink-0 ml-3">
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">{{$nbseekers}}</span>
            <h3 class="text-base font-normal text-gray-500">
            Seekers
            </h3>
            </div>
            <div class="flex flex-1 justify-end items-center ml-5 w-0 text-base font-bold text-green-500">
               +{{ $newSeekersCount}}            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
            </div>
        </div>
    </div>


  </div>
</div>

<div class="p-4 sm:ml-64  mx-auto   my-5 py-12 grid grid-cols-3 gap-x-2 ">
    <div><canvas id="myChart1"></canvas></div>
    <div class="col-span-2"><canvas id="myChart2"></canvas></div>
</div>
<div class=" sm:ml-100 pt-8 my-4 py-6 mx-10/12">
    <h2 class=" sm:text-2xl sm:font-bold md:text-4xl md:font-extrabold mx-auto my-6 text-center text-cyan-700">Results Of Today</h2>
    <hr class=" sm:w-24 md:w-48 h-1 mx-auto my-4 mb-10 bg-yellow-400 border-0 rounded md:my-7 dark:bg-gray-700">
  </div>

<div class="p-4 sm:ml-64   mx-auto    my-5 py-12  ">
    <div class="w-10/12 mx-auto"><canvas id="myChart3"></canvas></div>
</div>




<div class="p-4 sm:ml-64  grid grid-cols-3 mx-auto gap-4">

    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4">
        <h2 class="text-2xl font-bold text-yellow-400">Recent jobs</h2>
        @foreach($jobs as $job)
        <div class=" bg-white capitalize font-bold flex gap-x-4 p-4">
            <img class="w-10 h-10 rounded-full" src="{{asset('storage/'.$job->company->cover_photo)}}" alt="">
            <h2 class=" mt-2 text-1xl font-bold text-blue-400">{{$job->title}}</h2>
        </div>
        @endforeach
    </div>
    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl  p-4">
        <h2 class="text-2xl font-bold text-yellow-400">Recent Companies</h2>
        @foreach($companies as $company)
        <div class=" bg-white capitalize font-bold flex gap-x-4  p-4">
            <img class="w-10 h-10 rounded-full" src="{{asset('storage/'.$company->cover_photo)}}" alt="">
            <h2 class=" mt-2 text-1xl font-bold text-blue-400">{{$company->name}}</h2>
        </div>
        @endforeach

    </div>
    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4">
        <h2 class="text-2xl font-bold text-yellow-400">Recent Users</h2>
        @foreach($seekers as $seeker)
        <div class=" bg-white capitalize font-bold flex gap-x-4 p-4">
            <img class="w-10 h-10 rounded-full" src="{{asset('storage/'.$seeker->profile_photo_path)}}" alt="">
            <h2 class=" mt-2 text-1xl font-bold text-blue-400">{{$seeker->name}}</h2>
        </div>
        @endforeach
    </div>


</div>









  <script src="https://kit.fontawesome.com/24dbd9ce21.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{asset('./myassets/chart.js')}}"></script>
  <script>
    const ctx1 = document.getElementById('myChart1');

new Chart(ctx1, {
  type: 'polarArea',
  data: {
    labels: ['seekers', 'jobs', 'companies'],
    datasets: [{
      label: '# of Votes',
      data: [{!! json_encode($nbseekers) !!},{!! json_encode($nbjobs) !!} ,{!! json_encode($nbcompanies) !!}],
      borderWidth: 1
    }]
  },
  options: {
   Response:true,
  },
});


const ctx2 = document.getElementById('myChart2');

new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['Seekers','Jobs','Applicants','Companies'],
    datasets: [{
      label: '# of Votes',
      data: [{!! json_encode($nbseekers) !!},{!! json_encode($nbjobs) !!},{!! json_encode($totalapplicants) !!},{!! json_encode($nbcompanies) !!}],
      borderWidth: 3,
      borderColor:['#2C74B3', '#61876E', '#FD8A8A', '#EAEAEA'],
      backgroundColor: ['#9BD0F5', '#CDE990', '#FFDCA9', '#EEEEEE'],
    }]
  },
  options: {
    indexAxis: 'y',
   Response:true,
   defaultFontFamily: 'Arial',
  FontSize: 30,
  fontColor:'red',
  },
});




const ctx3 = document.getElementById('myChart3');
new Chart(ctx3, {
  type: 'line',
  data: {
    labels: ["Today's Seekers","Today's Jobs","Today's Applicants","Today's Companies"],
    datasets: [{
     label: '# of Votes',
      data: [{!! json_encode($newSeekersCount) !!},{!! json_encode($newJobsCount) !!},{!! json_encode($newApplicantsCount) !!},{!! json_encode($newCompaniesCount) !!},{!! json_encode($newCompaniesCount) !!}],
      borderWidth: 3,
      borderColor:['#2C74B3', '#61876E', '#FD8A8A', '#EAEAEA'],
      backgroundColor: ['#9BD0F5', '#CDE990', '#FFDCA9', '#EEEEEE'],
    }]
  },
  options: {
    indexAxis: 'x',
   Response:true,
  },
});





  </script>



</body>
</html>
