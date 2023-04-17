<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    {{-- <h1>{{$details['name']}}</h1>
    <h2>{{$details['email']}}</h2>
    <h2>{{$details['subject']}}</h2>
    <h2>{{$details['message']}}</h2>
    <p>Thank You </p> --}}


<div style="border:2px solid gray; padding:10px ; border-radius:8px; ">
    <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
    <h1 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Subject : <span style="background-color: yellow ; padding:10px;">{{$details['subject']}}</span> </h1>
    <h3 style="color:rgb(234, 58, 131);">Message : <span style="font-family: cursive ; line-height:1.4; color:gray;">{{$details['message']}}</span></h3>
    <a  href="#" class="inline-flex items-center text-blue-600 hover:underline">
        Email : {{$details['email']}}
        <svg  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
    </a>
    <h3 style="color:gray;text-capitalize;"> Name : <mark>{{$details['name']}}</mark></h3>
</div>


</body>
</html>
