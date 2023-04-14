@extends('layouts.master')
@section('title','Profile| Professional')

@section('main')
   <div class=" sm:w-full h-1/2 my-20  md:w-10/12 grid sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-6 mx-auto">
    <div class=" bg-white w-full max-w-sm  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-end px-4 pt-4">
            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
            </button>
        </div>

        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('storage/'.auth()->user()->profile_photo_path)}}" alt="Bonnie image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{auth()->user()->name}}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{auth()->user()->email}}</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="{{Storage::url(auth()->user()->profiles->cover_letter)}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-400 dark:bg-yellow-400 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Cover Letter</a>
                <a href="{{Storage::url(auth()->user()->profiles->resume)}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Resume</a>
            </div>
        </div>
        <div class="mx-4">
        <h3 class="font-semibold text-gray-500 "><span class="  text-1xl font-bold text-cyan-700 ">Address</span> {{auth()->user()->profiles->address}}</h3>
        <h3 class="font-semibold text-gray-500 "><span class=" text-1xl font-bold  text-cyan-700">Gender</span>  {{auth()->user()->profiles->gender}}</h3>
        <h3 class="font-semibold text-gray-500 "><span class="  text-1xl font-bold text-cyan-700 ">Phone</span> {{auth()->user()->profiles->phone}}</h3>
        <h3 class="font-semibold text-gray-500 "><span class=" text-1xl font-bold  text-cyan-700">Bio</span> {{auth()->user()->profiles->bio}}</h3>
        <h3 class="font-semibold text-gray-500 "><span class=" text-1xl font-bold  text-cyan-700">Member On</span>  {{auth()->user()->profiles->created_at->diffForHumans()}}</h3>
        <h3 class="font-semibold text-gray-500 "><span class=" text-1xl font-bold  text-cyan-700">Experience</span>  {{auth()->user()->profiles->experience}}</h3>
        @if(!empty(auth()->user()->profiles->cover_letter))
        {{-- <p>good</p> --}}
         <p class=" text-1xl font-bold text-cyan-700 "><a href="{{Storage::url(auth()->user()->profile->cover_letter)}}">Cover letter</a></p>
        @else
        <p class=" text-1xl text-cyan-700 font-bold ">Please Upload letter</p>
        @endif

        @if(!empty(auth()->user()->profile->resume))
        <p class=" text-1xl font-bold text-cyan-700 "><a href="{{Storage::url(auth()->user()->profile->resume)}}">Resume</a></p>
        @else
        <p class=" text-1xl font-bold text-cyan-700 ">Please Upload Resume</p>
        @endif
        </div>
    </div>

        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            @if(Session::has('msg'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold">{{session::get('msg')}}</p>
                  </div>
                </div>
              </div>

            @endif
            <form class="space-y-6" action="{{route('profile.create')}}" method="POST">
                @csrf
                <h5 class="text-xl font-bold text-yellow-400">Your Professional Profile</h5>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-400 dark:text-white">Address</label>
                    <input type="text" name="address" id="address" value="{{auth()->user()->profiles->address}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Your Address ..">
                    @if($errors->has('address'))
                    <p class="text-red-600">{{$errors->first('address')}}</p>
                    @endif
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-400 dark:text-white">Phone Number</label>
                    <input type="text" name="phone" id="phone" value="{{old('phone')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Your Address ..">
                    @if($errors->has('phone'))
                    <p class="text-red-600">{{$errors->first('phone')}}</p>
                    @endif
                </div>
                <div>
                    <label for="exp" class="block mb-2 text-sm font-medium text-gray-400 dark:text-white">Experience</label>
                    <textarea name="exp" id="exp" placeholder="Your Experience" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >{{auth()->user()->profiles->experience}}</textarea>
                    @if($errors->has('exp'))
                    <p class="text-red-600">{{$errors->first('exp')}}</p>
                    @endif
                </div>
                <div>
                    <label for="bio" class="block mb-2 text-sm font-medium text-gray-400 dark:text-white">Bio</label>
                    <textarea name="bio" id="exp" placeholder="Your Bio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">{{auth()->user()->profiles->bio}}</textarea>
                    @if($errors->has('bio'))
                    <p class="text-red-600">{{$errors->first('bio')}}</p>
                    @endif
                </div>
                <button type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500   focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
            </form>
        </div>

        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            @if(session::has('msg letter'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold">{{session::get('msg letter')}}</p>
                  </div>
                </div>
              </div>
            @endif
            <form class="space-y-6" action="{{route('coverletter')}}" method="POST" enctype="multipart/form-data"> @csrf
                <h5 class="text-xl font-bold text-yellow-400">Update Your Cover Letter</h5>
                <div>
                    <label for="letter" class="block mb-2 text-sm font-medium text-gray-400 dark:text-white">Cover Letter</label>
                    <input name="letter" type="file" id="letter"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                    @if($errors->has('letter'))
                    <p class="text-red-600">{{$errors->first('letter')}}</p>
                    @endif
                </div>
                <button type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500   focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
            </form>
            <form class="space-y-6" action="{{route('resume')}}" method="POST"  enctype="multipart/form-data"> @csrf
                @if(session::has('msg resume'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                      <div>
                        <p class="font-bold">{{session::get('msg resume')}}</p>
                      </div>
                    </div>
                  </div>
                 @endif
                <h5 class=" mt-4 text-xl font-medium text-gray-900 dark:text-white">Update Your Resume</h5>
                <div>
                    <label for="resume" class="block mb-2 text-sm font-medium text-gray-400 dark:text-white">Resume</label>
                    <input name="resume" type="file" id="resume"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    @if($errors->has('resume'))
                    <p class="text-red-600">{{$errors->first('resume')}}</p>
                    @endif
                </div>
                <button type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500   focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
            </form>
        </div>
    </div>
@endsection
