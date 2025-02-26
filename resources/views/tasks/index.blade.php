@extends('layout.app')
@section('content')


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="w-full flex justify-end">
        <a href="{{route('tasks.create')}}" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">ADD</a>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="text-base font-semibold">{{$task->title}}</div>
                </th>
                <td class="px-6 py-4">
                    {{$task->description}}
                </td>
                <td class="px-6 py-4">
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
                </td>
                <td class="px-6 flex flex-col">
                    <!-- Modal toggle -->
                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                    
                    <a href="{{route('tasks.show',$task)}}" type="button"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Task</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
</div>


@endsection