@extends('layout.app')
@section('content')


<div class="relative w-1/2 overflow-x-auto shadow-md sm:rounded-lg p-5">
    <div class="w-full flex justify-center flex-col space-y-6">
    
    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">User Name:</h1>
        <h1 class="text-xl">{{$user->name}}</h1>
    </div>

    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">User Email:</h1>
        <h1 class="text-xl">{{$user->email}}</h1>
    </div>

    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">User Roles:</h1>
        <h1 class="text-xl">{{$user->roles}}</h1>
    </div>
@if(Auth::user()->hasRole('admin'))
    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">User Type:</h1>
        <h1 class="text-xl">{{$user->userType}}</h1>
    </div>
@endif



    
    </div>
    
   
</div>


@endsection