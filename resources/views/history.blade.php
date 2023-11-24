@extends('layouts.app')

@section('contents')
    <article>
        <section>
            <header class="bg-[#202987] py-24 rounded-b-[3rem]">
                <h1 class="text-[7rem] font-bold px-28 text-yellow-500">Here are some glimpses from his career.</h1>
            </header>
            <main>
                <div class="flex flex-col px-40 py-20 mt-12 space-y-8 text-[2rem] font-poppins">
                    <!-- Timeline Item 1 -->
                    <div class="flex items-center">
                      <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                      <div class="ml-4">
                        <p class="font-bold">2000</p>
                        <p>Messi joined FC Barcelona's youth academy, La Masia, at the age of 13.</p>
                      </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="flex items-center">
                      <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                      <div class="ml-4">
                        <p class="font-bold">2004</p>
                        <p>He made his first team debut for FC Barcelona in a league match against Espanyol.</p>
                      </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                        <div class="ml-4">
                          <p class="font-bold">2005</p>
                          <p>He won his first La Liga title with FC Barcelona. The First of Many.</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                        <div class="ml-4">
                          <p class="font-bold">2009</p>
                          <p>He won the Quadruple - La Liga, UEFA Champions League, Copa Del Ray (Spanish Cup) and a FIFA Club World Cup - all in a single year.</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                        <div class="ml-4">
                          <p class="font-bold">2010</p>
                          <p>He recieved the FIFA World Player of the Year award for the first time.</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                        <div class="ml-4">
                          <p class="font-bold">2012</p>
                          <p>He Broke Gerd Muller's record for most goals in a calender year, scoring 91 goals.</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                        <div class="ml-4">
                          <p class="font-bold">2018</p>
                          <p>He transfered to Paris Saint-Germain (PSG) after spending his entire professional carrer at FC Barcelona.</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                        <div class="ml-4">
                          <p class="font-bold">2021</p>
                          <p>He captained Argentina to a victory in the Copa America, securing his first international trophy with the national team.</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                        <div class="ml-4">
                          <p class="font-bold">2023</p>
                          <p>He captained Argentina to a victory in the FIFA Men's World Cup held in Qatar, finally accomplishing his biggest goal.</p>
                        </div>
                    </div>
                </div>
            </main>
        </section>
    </article>
@endsection

