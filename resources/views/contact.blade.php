@extends('layouts.app')

@section('contents')
    <section>
        <div class="py-40 text-center">
            <h1 class="text-5xl">To Contact him, you can go to the following:</h1>
            <div>
                <ul class="flex justify-center gap-12 p-8 text-white">
                    <li class="text-[7rem] p-4 transition-transform rounded-md hover:bg-white hover:text-black hover:scale-110 w-40 mt-[1.35rem]"><a href="https://www.instagram.com/leomessi/?hl=en"><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="text-[7rem] p-4 transition-transform rounded-md hover:bg-white hover:text-black hover:scale-110 w-40 mt-[1.35rem]"><a href="https://www.facebook.com/leomessi/"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="w-40 p-4 transition-transform rounded-md group hover:bg-white hover:text-black hover:scale-110">
                        <p class="invisible transition-opacity opacity-0 group-hover:opacity-100 group-hover:visible">The Fan Page</p>
                        <a href="https://twitter.com/imessi" class="text-[7rem]"><i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                </ul>

                <p class="text-lg">Looking for additional links? <a href="https://messi.com/en/" class="underline">Check out his website</a></p>
            </div>
        </div>
    </section>
@endsection
