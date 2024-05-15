<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Games') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-center text-gray-900 dark:text-gray-100">
<div class="w-full max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <img class="p-8 rounded-t-lg" src="{{$team->crest}}" class="w-20 h-20"/>
    <div class="px-5 pb-5 text-center">
        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$team->name}}</h5>
        <div class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{$team->tla}}</div>
        <a class="mt-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 transition duration-200" href="http://www.rfef.es">{{$team->website}}</a>    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>