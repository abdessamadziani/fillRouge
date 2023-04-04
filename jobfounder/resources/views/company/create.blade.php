@extends('layouts.master');
@section('title','Company| info')


@section('main')
<main>



<div class="flex gap-8">


    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex flex-col items-center pb-10">
            <img class=" mt-4 w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('storage/'.auth()->user()->profile_photo_path)}}" alt="Bonnie image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{auth()->user()->name}}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400"> Responsible of {{auth()->user()->company->name}}</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add New Job</button>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
            </div>
        </div>
        <div class="mx-4">
            <h3 class="mb-2"><span class="text-1xl font-bold ">Address</span> : {{auth()->user()->company->address}}</h3>
            <h3 class="mb-2"><span class="text-1xl font-bold ">Phone </span> : {{auth()->user()->company->phone}}</h3>
            <h3 class="mb-2"><span class="text-1xl font-bold ">Website</span> : {{auth()->user()->company->website}}</h3>
            <h3 class="mb-2"><span class="text-1xl font-bold ">Description</span> : {{auth()->user()->company->description}}</h3>
            <h3 class="mb-2"><span class="text-1xl font-bold ">Member On</span> : {{auth()->user()->company->created_at->diffForHumans()}}</h3>
            @if(empty(auth()->user()->company->cover_photo))
            <p class="mb-2 text-1xl font-bold ">Please Upload Cover Photo</p>
            @endif
            @if(empty(auth()->user()->company->logo))
            <p class="mb-2 text-1xl font-bold ">Please Upload Logo</p>
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
             <form class="space-y-6" action="{{route('companyinfo.create')}}" method="POST">
                 @csrf
                 <h5 class="text-xl font-medium text-gray-900 dark:text-white">Company Information</h5>
                 <div>
                    <label for="cname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Name</label>
                    <input type="text" name="cname" id="cname" value=""  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company Name ..">
                    @if($errors->has('cname'))
                    <p class="text-red-600">{{$errors->first('cname')}}</p>
                    @endif
                </div>
                 <div>
                     <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                     <input type="text" name="address" id="address" value=""  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company Address ..">
                     @if($errors->has('address'))
                     <p class="text-red-600">{{$errors->first('address')}}</p>
                     @endif
                 </div>
                 <div>
                     <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                     <input type="text" name="phone" id="phone" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company Phone Number ..">
                     @if($errors->has('phone'))
                     <p class="text-red-600">{{$errors->first('phone')}}</p>
                     @endif
                 </div>
                 <div>
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website</label>
                    <input type="text" name="website" id="website" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Company Website ..">
                    @if($errors->has('website'))
                    <p class="text-red-600">{{$errors->first('website')}}</p>
                    @endif
                </div>
                 <div>
                     <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                     <textarea name="description" id="description" placeholder="Description About Company ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" ></textarea>
                     @if($errors->has('description'))
                     <p class="text-red-600">{{$errors->first('description')}}</p>
                     @endif
                 </div>

                 <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
             </form>
         </div>

         <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class=" m-auto rounded-t-lg" src="{{asset('storage/'.auth()->user()->company->logo)}}" alt="" />
            </a>
            <form class="space-y-6" action="{{route('company.logo')}}" method="POST"  enctype="multipart/form-data"> @csrf
                @if(session::has('msg logo'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                      <div>
                        <p class="font-bold">{{session::get('msg logo')}}</p>
                      </div>
                    </div>
                  </div>
                 @endif
                <h5 class=" mt-4 text-xl font-medium text-gray-900 dark:text-white">Update Logo</h5>
                <div>
                    <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Company Logo</label>
                    <input name="logo" type="file" id="logo"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    @if($errors->has('logo'))
                    <p class="text-red-600">{{$errors->first('logo')}}</p>
                    @endif
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
            </form>
             @if(session::has('msg cover'))
             <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                 <div class="flex">
                   <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                   <div>
                     <p class="font-bold">{{session::get('msg cover')}}</p>
                   </div>
                 </div>
               </div>
             @endif
             <form class="space-y-6" action="{{route('company.cover')}}" method="POST" enctype="multipart/form-data"> @csrf
                 <h5 class="text-xl font-medium text-gray-900 dark:text-white">Update Cover Image</h5>
                 <div>
                     <label for="coverimage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover Image</label>
                     <input name="coverimage" type="file" id="coverimage"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                     @if($errors->has('coverimage'))
                     <p class="text-red-600">{{$errors->first('coverimage')}}</p>
                     @endif
                 </div>
                 <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
             </form>

         </div>
     </div>
 </main>




{{-- <!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> --}}

  <!-- Main modal -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
      <div class="relative w-full h-full max-w-md md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-6 lg:px-8">
                  <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Announce New Job</h3>
                  <form class="space-y-6" action="#">
                      <div>
                          <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                          <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="title of job" >
                      </div>
                      <div>
                          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                          <textarea name="description" id="description" placeholder="description for the job .." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" ></textarea>
                      </div>
                      <div>
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                        <textarea  name="role" id="role" placeholder=" some roles for the job .." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"></textarea>
                    </div>
                
                      <div>
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                        <input type="position" name="position" id="position" placeholder="position ... " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                     <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">adress</label>
                        <input type="address" name="address" id="address" placeholder="address of job ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <select>
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="address" name="address" id="address" placeholder="address of job ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    


                      <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>

                  </form>
              </div>
          </div>
      </div>
  </div>





@endsection
