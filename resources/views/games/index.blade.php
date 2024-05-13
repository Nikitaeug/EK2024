<x-app-layout >
    <header class="flex justify-center main-content">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-100 dark:text-white">Group stage</h1>
    </header>
    
    {{-- beginning of all games --}}
    <section class="flex flex-col items-center">
    
    @foreach ($games as $game)
    {{-- flex flex-row items-center justify-center --}}
        <section class="grid grid-cols-3 p-1 mb-4 text-center bg-white border border-gray-200 rounded-lg shadow w-fit sm:w-11/12 md:w-9/12 sm:p-8 dark:bg-gray-800 dark:border-gray-70" id="game_{{$game->id}}">
    
            {{-- left side --}}
            <div class="col">
                <div id="home_team_game_{{$game->home_team->id}}" class="flex flex-col items-center justify-center text-right md:min-w-40 xl:min-w-72">
                    <h4 class="text-sm font-bold text-gray-900 sm:hidden">
                        {{$game->home_team->tla}}
                    </h4>
                    <a href="{{ route('team.show', $game->home_team->id) }}">
                        <div class="flex flex-col items-center">
                            <h5 class="hidden mb-2 font-bold text-right text-gray-900 dark:text-white sm:flex md:text-3xl xl:text-5xl ">
                                {{$game->home_team->name}}
                            </h5>
                            <img src="{{$game->home_team->crest}}" class="ml-3 mr-3 flags"/>
                        </div>
                    </a>
                </div>
            </div>
    
            {{-- middlepart start --}}
            <div class="col">
                {{-- date --}}
                <div class="text-base text-gray-500 sm:mb-2 sm:text-lg dark:text-gray-400">
                    {{\Carbon\Carbon::create($game->utcDate)->format('d-m-Y')}}
                </div>
                {{-- time --}}
                <div class="text-base text-gray-500 sm:mb-2 sm:text-lg dark:text-gray-400">
                    {{\Carbon\Carbon::create($game->utcDate)->format('H:i')}}
                </div>
    
                {{-- Scores  --}}
                <div class="flex items-center justify-around space-x-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse md:min-w-40 xl:min-w-72">
                    <div class="w-1 sm:w-auto bg-yellow-300 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <div class="text-left rtl:text-right">
                            <div class="font-sans font-semibold text-gray-900 text-1xl md:text-2xl lg:txt-4l">{{$game->scoreAwayFullTime ?? 0}}</div>
                        </div>
                    </div>
                    <div>
                        -
                    </div>
                    <div class="w-1 sm:w-auto bg-yellow-300 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <div class="text-left rtl:text-right">
                            <div class="font-sans font-semibold text-gray-900 text-1xl md:text-2xl lg:txt-4l">{{$game->scoreAwayFullTime ?? 0 }}</div>
                        </div>
                    </div>
                </div>
    {{-- HIER KOMT STRAKS EEN LINK --}}
    <a href="{{route('games.edit', $game)}}" class="hidden md:inline md:focus:outline-none md:bg-yellow-200 md:hover:bg-yellow-500 md:focus:ring-4 md:focus:ring-yellow-300 md:font-medium md:rounded-lg text-sm md:px-5 md:py-2.5 md:me-2 mb-2 dark:focus:ring-yellow-900 w-40">Update score</a>
            </div>
            {{--  middle part end --}}
            {{-- right side --}}
            <div class="col">
                {{-- away team --}}
                <div id="away_team_game_{{$game->away_team->id}}" class="flex flex-col items-center justify-center md:min-w-40 xl:min-w-72">
                    <h4 class="text-sm font-bold text-gray-900 sm:hidden">
                        {{$game->away_team->tla}}
                    </h4>
                    <a href="{{ route('team.show', $game->away_team->id) }}">
                        <div class="flex flex-col items-center">
                            <h5 class="hidden mb-2 font-bold text-gray-900 dark:text-white sm:flex md:text-3xl xl:text-5xl text-wrap">
                                {{$game->away_team->name}}
                            </h5>
                            <img src="{{$game->away_team->crest}}" class="ml-3 mr-3 flags"/>
                        </div>
                    </a>
                </div>
                {{-- end away team --}}
            </div>
        </section>
        @endforeach
    </section>
    {{-- end of all games --}}
    </x-app-layout>