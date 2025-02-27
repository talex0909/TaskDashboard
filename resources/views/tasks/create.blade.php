@extends('layout.app')
@section('content')


<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 align-middle flex flex-col justify-around">
<h1 class="text-xl text-center"> {{isset($task) ? 'Edit Task ' . $task->title  : 'Add Task'}} </h1>
<form method="post" action="{{isset($task) ? route('tasks.update',$task) : route('tasks.store')}}">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" name="title" id="title" value="{{isset($task) ? $task->title : ''}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title" required />
        </div>
        <div>
            <label for="priority" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
            <input type="text" id="priority" name="priority" value="{{isset($task) ? $task->priority : ''}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Priority" required />
        </div>  
        <div class="col-span-2">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description" required >{{isset($task) ? $task->description : ''}}</textarea>
        </div>

        <div class="col-span-2">
            <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
            <input type="datetime-local" id="deadline" name="deadline" value="{{isset($task) ? $task->deadline : ''}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="col-span-2">
            <label for="notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
            <textarea type="text" name="notes" id="notes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Notes">{{isset($task) ? $task->notes : ''}}</textarea>
        </div>
        
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{isset($task) ? 'Update' : 'Submit'}} </button>
</form>
</div>


@endsection