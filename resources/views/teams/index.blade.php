<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-wrap -m-2">
                        @foreach ($teams as $team)
                            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                                    <div class="flex-grow">
                                        <h2 class="text-gray-900 title-font font-medium">
                                            <a href="{{ route('team.show', $team->id) }}" class="text-blue-500 hover:text-blue-700">
                                                {{ $team->name }}
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>