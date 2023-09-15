<x-guest-layout>
    <x-slot name="title">
        {{$title}}
    </x-slot>
    <aside class="fixed w-full h-full top-0 z-10 bg-panel dark:bg-panel-dark dark:text-white hidden" id="menu-mobile">
        <div class="container h-full mt-2">
            <div class="flex flex-wrap">
                <div id="close-mobile-button" class="basis-full flex justify-end cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-bcolor font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>   
                </div>
                <ul class="mt-20 basis-full">
                    <li>
                        <a href="/" class="flex separation-bcolor justify-center items-center text-secondary dark:text-white font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            <p class="uppercase">Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="/posts/documentacion" class="flex separation-bcolor justify-center items-center text-secondary dark:text-white font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <p class="uppercase">Documentación</p>
                        </a>
                    </li>
                    <li>
                        <a href="/posts/documentacion" class="flex separation-bcolor justify-center items-center text-secondary dark:text-white font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                            </svg>                              
                            <p class="uppercase">Portafolio</p>
                        </a>
                    </li>
                </ul>   
            </div>
        </div>
    </aside>
    <nav class="bg-panelb py-1 shadow-2xl border-b-2 border-third dark:bg-panelb-dark hidden lg:block">
        <div class="container flex justify-between items-center">
            <a href="/">
                <img src=" {{asset('../resources/img/logo.png')}}" class="w-14 grow-0">
            </a>
            <ul class="flex gap-2 text-secondary dark:text-white">
                <li class=" py-1 border-b-2 border-transparent hover:border-bcolor">
                    <a href="/" class="flex justify-center items-center font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <p class="uppercase">Inicio</p>
                    </a>
                </li>
                <li class="py-1 border-b-2 border-transparent hover:border-bcolor"">
                    <a href="/posts/documentacion" class="flex justify-center items-center font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <p class="uppercase">Documentación</p>
                    </a>
                </li>
                <li class="py-1 border-b-2 border-transparent hover:border-bcolor"">
                    <a href="/posts/portafolio" class="flex justify-center items-center font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>                              
                        <p class="uppercase">Portafolio</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <article class=" container flex flex-col lg:flex-row lg:justify-between lg:flex-wrap bg-panel dark:bg-panel-dark dark:text-white">
        <div class="flex justify-end lg:basis-full lg:hidden">
            <div id = "open-mobile-button" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-bcolor font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg> 
            </div>        
        </div>
        <section class="flex flex-col items-center lg:flex-row lg:gap-2 lg:basis-full separation-bcolor border-b-0" id="profile">
            <div class="flex gap-x-4 items-center grow justify-end">
                <button id="ButtonLigth">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>
                <button id="ButtonDark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button id="ButtonSystem">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </button>
            </div>
        </section>
        <div class="flex justify-center items-stretch basis-full py-20">
            <div class="flex flex-col items-center">
                <img src=" {{asset('../resources/img/trabajanding.png')}} " class=" grow-0">
                <h1 class="text-lg">Hombre programando!</h1>
                <p class="text-sm">Esta funcionalidad estara lista en pocos días...</p>
            </div>
        </div>
    </article>
</x-guest-layout>