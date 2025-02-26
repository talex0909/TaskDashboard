@extends('layout.app')
@section('content')


<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">
    <div class="w-full flex justify-center">
    <ul class="space-y-2 font-medium">
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="ms-3 dark:hover:bg-gray-700 group">{{$task->title}}</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="ms-3 dark:hover:bg-gray-700 group">{{$task->priority}}</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="ms-3 dark:hover:bg-gray-700 group">{{$task->description}}</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="ms-3 dark:hover:bg-gray-700 group">{{$task->deadline}}</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="ms-3 dark:hover:bg-gray-700 group">{{$task->notes}}</span>
             </a>
          </li>
       </ul>
    </div>
    
   
</div>


@endsection