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
                    <x-link-menu href="/" class="flex separation-bcolor border-third justify-center items-center text-secondary dark:text-white font-bold" :active="request()->is('/')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <p class="uppercase">Inicio</p>
                    </x-link-menu>
                </li>
                <li>
                    <x-link-menu href="/posts/documentacion" class="flex separation-bcolor border-third justify-center items-center text-secondary dark:text-white font-bold" :active="request()->is('posts/documentacion')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <p class="uppercase">Documentación</p>
                    </x-link-menu>
                </li>
                <li>
                    <x-link-menu href="/posts/portafolio" class="flex separation-bcolor border-third justify-center items-center text-secondary dark:text-white font-bold" :active="request()->is('posts/portafolio')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <p class="uppercase">Portafolio</p>
                    </x-link-menu>
                </li>
            </ul>   
        </div>
    </div>
</aside>