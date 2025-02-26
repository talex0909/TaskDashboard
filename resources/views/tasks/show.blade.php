@extends('layout.app')
@section('content')


<div class="relative w-1/2 overflow-x-auto shadow-md sm:rounded-lg p-5">
    <div class="w-full flex justify-center flex-col space-y-6">
    
    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">Task Title</h1>
        <h1 class="text-xl">{{$task->title}}</h1>
    </div>

    <div class="flex flex-col absolute top-0 right-0 p-2 bg-amber-300 text-white rounded shadow">
        <h1 class="text-sm">{{$task->priority}}</h1>
    </div>

    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">Task Description</h1>
        <h1 class="text-xl">{{$task->description}}</h1>
    </div>

    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">Task Deadline</h1>
        <h1 class="text-xl">{{$task->deadline}}</h1>
    </div>
    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">Assigned to</h1>
        <h1 class="text-xl">{{$task->user->name}}</h1>
    </div>
@if(isset($task->notes))
    <div class="flex flex-col w-full text-center">
        <h1 class="text-sm">Task Notes</h1>
        <h1 class="text-xl">{{$task->notes}}</h1>
    </div>
@endif


    <div class="flex flex-col w-full text-center items-center">
        <h1 class="text-sm">Task Status</h1>
        <div class="flex items-center">
            @switch($task->status)
                        @case(0)
                        <div class="h-2.5 w-2.5 rounded-full bg-gray-500 me-2"></div> To do
                        @break
                        @case(1)
                        <div class="h-2.5 w-2.5 rounded-full bg-amber-500 me-2"></div> In progress
                        @break
                        @case(2)
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Done
                        @break
            @endswitch
        </div>
    </div>

    </div>
    
   
</div>


@endsection