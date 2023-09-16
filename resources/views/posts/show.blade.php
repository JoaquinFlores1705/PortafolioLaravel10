<x-guest-layout>
    <x-slot name="title">
        {{$title}}
    </x-slot>
    @include('layouts.mobile-menu')
    @include('layouts.header')
    <article class=" container flex flex-col lg:flex-row lg:justify-between lg:flex-wrap bg-panel dark:bg-panel-dark dark:text-white">
        <div class="flex justify-end lg:basis-full lg:hidden">
            <div id = "open-mobile-button" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-bcolor font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg> 
            </div>        
        </div>
        <section class="flex flex-col items-center lg:flex-row lg:gap-2 lg:basis-full separation-bcolor border-b-0">
            @include('layouts.themes')
        </section>
        <div class="flex justify-center items-start basis-full min-h-screen py-20">
            <div class="flex flex-col items-center">
                <img src=" {{Vite::asset('resources/img/trabajanding.png')}} " class=" grow-0">
                <h1 class="text-lg">Hombre programando!</h1>
                <p class="text-sm">Esta funcionalidad estara lista en pocos días...</p>
            </div>
        </div>
    </article>
    @include('layouts.footer')
</x-guest-layout>