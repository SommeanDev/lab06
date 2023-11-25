@extends('layouts.app')

@section('contents')
    <article class="font-poppins">
        <section>
            <header>
                <h1 class="pt-24 px-24 text-[7rem] font-bold">The Awards</h1>
                <p class="px-24 py-16 text-[3rem]"> Having played for 17 seasons, 778 games and scoring 672 goals, Leo Messi has won : </p>
            </header>

            <div class="flex flex-col gap-40 px-48">
                <div class="grid grid-cols-2 gap-x-[30rem] gap-y-32 text-[1.5rem]">
                    <div class="flex flex-col w-[30rem] rounded-[5rem] border-violet-700 border-2 overflow-hidden shadow-md shadow-violet-900">
                        <div class="h-64 overflow-hidden bg-slate-900">
                            <img class="w-full h-full transition-transform duration-700 hover:scale-110" src="{{ asset('images/Lionel_Messi_Ballon_dOr_Trophies.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="p-10 border-t-8 border-indigo-900">
                            <h1 class="font-bold">Eight Ballon d'Ors</h1>
                            <p>Messi currently holds the record for most Ballon d'Ors with eight (2009, 2010, 2011, 2012, 2015, 2019, 2021 and 2023).</p>
                        </div>
                    </div>
                    <div class="flex flex-col w-[30rem] rounded-[5rem] border-violet-700 border-2 overflow-hidden shadow-md shadow-violet-900">
                        <div class="h-64 overflow-hidden bg-slate-900">
                            <img class="w-full h-full transition-transform duration-700 hover:scale-110" src="{{ asset('images/Juventus-v-FC-Barcelona.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="p-10 border-t-8 border-indigo-900">
                            <h1 class="font-bold">Four UEFA Champions Leagues</h1>
                            <p>The long list of course includes the Champions League wins of 2006, 2009, 2011 & 2015.</p>
                        </div>
                    </div>
                    <div class="flex flex-col w-[30rem] rounded-[5rem] border-violet-700 border-2 overflow-hidden shadow-md shadow-violet-900">
                        <div class="h-64 overflow-hidden bg-slate-900">
                            <img class="w-full h-full transition-transform duration-700 hover:scale-110" src="{{ asset('images/messi_lifts_the_la_liga_trophy_for_10th_titlejpg.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="p-10 border-t-8 border-indigo-900">
                            <h1 class="font-bold">10 La Liga Titles</h1>
                            <p>The LaLiga seasons of 2004/05, 2005/06, 2008/09, 2009/10, 2010/11, 2012/13, 2014/15, 2015/16, 2017/18 & 2018/19.</p>
                        </div>
                    </div>
                    <div class="flex flex-col w-[30rem] rounded-[5rem] border-violet-700 border-2 overflow-hidden shadow-md shadow-violet-900">
                        <div class="h-64 overflow-hidden bg-slate-900">
                            <img class="w-full h-full transition-transform duration-700 hover:scale-110" src="{{ asset('images/messi_copa_america.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="p-10 border-t-8 border-indigo-900">
                            <h1 class="font-bold">His First Copa America Title with The Argentenian National team</h1>
                            <p>Lionel Messi could not hide his delight after Argentina won their 15th Copa America in 2021. "It's crazy, the happiness I feel is inexplicable," he said in a post-match interview.</p>
                        </div>
                    </div>

                </div>

                <div class="flex flex-col w-full rounded-[5rem] border-violet-700 border-2 overflow-hidden shadow-md shadow-violet-900 relative">
                    <div class="h-[50rem] bg-slate-900">
                        <img class="w-full h-full transition-transform duration-700 hover:scale-110" src="{{ asset('images/lionel-messi-1-6201143-1671478558748.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="absolute bottom-0 w-full p-10 bg-gradient-to-t from-black to-transparent">
                        <h1 class="font-bold text-[3rem]">And of course, we can't forget about his World Cup</h1>
                        <p class="text-[1.5rem]">The one prize that had eluded him was won with the help of two nerveless penalties, perhaps the only perceived flaw in his game. Even his other goal came with his weaker right foot. It was a game in which every question was answered. Football? Completed it.</p>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
