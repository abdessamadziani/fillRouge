@extends('layouts.master')
@section('title','Jobs')

@section('main')

<main class="m-24">
 <div class="flex justify-between">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Description</h3>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$job->description}}</p>
            <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">We are looking for someone has </h3>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$job->roles}}</p>
        </div>

        <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Short Info</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Company: <a  class="underline" href="{{route('company.index',[$job->company->id,$job->company->slug])}}" >{{$job->company->name}}</a></p>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Employement Type : {{$job->type==1 ? 'full time':'remote'}}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Position : {{$job->position}}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Date : {{$job->created_at->diffForHumans()}}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Last Date to apply : {{$job->last_date}}</p>
      @if(auth()->check() && auth()->user()->user_type=='seeker')
        @if(!$job->checkapply())
           <form action="{{route('apply.job',[$job->id])}}" method="POST"> @csrf
                <button type="submit" class="inline-flex mt-5 w-full items-center px-3 py-2  text-md font-medium text-center text-white bg-green-300 rounded-lg hover:bg-green-600 focus:ring-4 focus:hidden">
                    Apply
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </form>

        @else
        <button type="submit" class="inline-flex mt-5 w-full items-center px-3 py-2  text-md font-medium text-center text-white bg-green-300 rounded-lg hover:bg-green-600 focus:ring-4 focus:hidden">
            Applied already
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>

         @endif
   @endif
        </div>

 </div>
</main>




@endsection


