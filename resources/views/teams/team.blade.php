<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Teams') }}
        </h2>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Games') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        {{$team->name}}
                    </div>
                    <div>
                        {{$team->tla}}
                    </div>
                    <div>
                        <img src="{{$team->crest}}" class="w-20 h-20"/>
                    </div>
                    <div>
                        <a href="{{$team->website}}" target="_blank" class="text-blue-700">
                            {{$team->website}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>