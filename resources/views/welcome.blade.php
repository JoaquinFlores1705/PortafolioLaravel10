<x-dynamic-component :component="Auth::check()? 'appLayout': 'guestLayout'">
    <x-slot name="title">
        Inicio
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
        <section class="flex flex-col items-center lg:flex-row lg:gap-2 lg:basis-full separation-bcolor" id="profile">
            <img src="{{asset('../resources/img/myPhoto.jpg')}} " class="w-40 h-40 rounded-full border-4 border-bcolor">
            <h1 class="text-2xl font-bold">Joaquín Paúl Flores Moreira</h1>
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
        <section class="separation-bcolor lg:basis-full" id="aboutMe">
            <div class="text-sm flex flex-col lg:flex-row">
                <div class="lg:basis-3/4">
                    <p class="text-lg">Bienvenido/a a mi portafolio web.</p>
                    <p class="text-lg">Me presento:</p>
                    <p>
                        Soy un desarrollador de aplicaciones web, tengo una trayectoria laboral con mas de 5 años en insituciones medianas/grandes,
                        principalmente con tecnologías de .Net C# y Angular, me gusta investigar las actualizaciones de los frameworks y nuevas herramientas
                        que ayudan a que los desarrollos sean mucho mas dinamicos y limpios, en esta pagina web encontraras un compendio de mi trayectoria profesional,
                        mis conocimientos y mi portafolio en GitHub.
                    </p>
                </div>
                <div class="flex justify-between gap-y-2 text-sm flex-wrap lg:basis-1/4">
                    <a href="mailto:paul_1705@outlook.com" class="flex justify-center basis-full lg:justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-bcolor font-bold">
                            <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                        </svg> 
                        <span>paul_1705@outlook.com</span>
                    </a>
                    <a href="tel:593998001121" class="flex lg:justify-center lg:basis-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-bcolor font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span>+593998001121</span>
                    </a>
                    <a href="https://www.linkedin.com/in/joaquín-paúl-flores-moreira-885b85163" target="_blank" class="flex items-center lg:justify-center lg:basis-full">
                        <img src="{{asset('../resources/img/linkedin.png')}} " class="w-6 h-6 rounded-full">
                        <span>Linkedin</span>
                    </a>
                </div>
            </div>
        </section>
        <section id="habilities" class="separation-bcolor lg:basis-2/4 lg:order-1 lg:pr-2">
            <p class="mb-2 p-1 text-base">
                <span class="span-title">Habilidades</span>  
              </p>
              <ul class="flex justify-between flex-wrap">
                  <li class="basis-1/2">C#</li>
                  <li>⭐⭐⭐⭐⭐</li>
                  <li class="basis-1/2">Angular</li>
                  <li>⭐⭐⭐⭐⭐</li>
                  <li class="basis-1/2">HTML</li>
                  <li>⭐⭐⭐⭐⭐</li>
                  <li class="basis-1/2">CSS</li>
                  <li>⭐⭐⭐⭐⭐</li>
                  <li class="basis-1/2">Javascript</li>
                  <li>⭐⭐⭐⭐</li>
                  <li class="basis-1/2">React</li>
                  <li>⭐⭐⭐⭐</li>
                  <li class="basis-1/2">SQL</li>
                  <li>⭐⭐⭐⭐</li>
                  <li class="basis-1/2">Node.JS</li>
                  <li>⭐⭐⭐</li>
                  <li class="basis-1/2">Python</li>
                  <li>⭐⭐⭐</li>
                  <li class="basis-1/2">Flutter</li>
                  <li>⭐⭐⭐</li>
              </ul>
        </section>
        <section id="experience" class="separation-bcolor lg:basis-full lg:order-2">
            <span class="span-title">Experiencia laboral</span>
            <div class="text-sm">
                <h1 class="text-lg">Desarrollador FullStack .Net y Angular</h1>
                <h2 class="text-base">Pervasive Mind/Edenred</h2>
                <h3 class="flex justify-between text-gray-700 dark:text-gray-300">
                    <p>Chile</p>
                    <p>Nov 2021 - Jun 2023</p>
                </h3>
                <p>Era responsable de hacer mejoras y resolver incidentes en 
                    diferentes microservicios basados en .Net Core y agregar 
                    funcionalidad a SPA en Angular, documentar cambios, trabajar a 
                    la par con el área de QA y participar en reuniones para mejoras 
                    en diferentes plataformas y utilitarios de la empresa Edenred
                </p>
                <div class="separation-experience">
                    <p>Tecnologías: </p>
                    <div class="flex">
                        <img src="{{ asset('../resources/img/c-sharp-c.svg') }} " class="w-6 h-6"/>
                        <img src=" {{ asset('../resources/img/angular.png') }}" class="w-6 h-6"/>
                    </div>
                </div>
            </div>     
            <div class="text-sm mt-2">
                <h1 class="text-lg">Desarrollador .Net C#</h1>
                <h2 class="text-base">TTA/Produbanco</h2>
                <h3 class="flex justify-between text-gray-700 dark:text-gray-300">
                    <p>Ecuador</p>
                    <p>Nov 2020 - Nov 2021</p>
                </h3>
                <p>Responsable de la migración de la ventanilla de Produbanco 
                    basada en vb 6 a Formularios y paginas ASP de .net c#
                </p>
                <div class="separation-experience">
                    <p>Tecnologías: </p>
                    <div class="flex">
                        <img src="{{ asset('../resources/img/c-sharp-c.svg') }} " class="w-6 h-6"/>
                    </div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <h1 class="text-lg">Desarrollador FullStack .Net y Angular</h1>
                <h2 class="text-base">Easysoft/Produbanco</h2>
                <h3 class="flex justify-between text-gray-700 dark:text-gray-300">
                    <p>Ecuador</p>
                    <p>Jul 2018 - Nov 2020</p>
                </h3>
                <p>Responsable de agregar mejoras y corregir diferentes 
                    funcionalidades del aplicativo del CashManagement en 
                    Produbanco - Grupo Promerica basado en Angular y 
                    microservicios en C# y en menor medida Python
                </p>
                <div class="separation-experience border-b-0 pb-0">
                    <p>Tecnologías: </p>
                    <div class="flex">
                        <img src="{{ asset('../resources/img/c-sharp-c.svg') }} " class="w-6 h-6"/>
                        <img src=" {{ asset('../resources/img/angular.png') }}" class="w-6 h-6"/>
                        <img src="{{ asset('../resources/img/python.png') }}" class="w-6 h-6"/>
                    </div>
                </div>
            </div>
        </section>
        <section class="separation-bcolor lg:basis-full lg:order-2 lg:border-b-0" id="education">
            <span class="span-title">Educación</span>
            <div class="text-sm">
                <h1 class="text-lg">Ingeniería en Sistemas</h1>
                <h2 class="text-base">Universidad Laica Eloy Alfador de Manabí</h2>
                <h3 class="flex justify-between text-gray-700 dark:text-gray-300">
                    <p>Ecuador</p>
                    <p>Abr 2010 - Sep 2017</p>
                </h3>
                <p>Titulado como Ingeniero en sistemas de la República del Ecuador 
                    promoción 2017
                </p>
            </div>
        </section>
        <section class="separation-bcolor border-b-0 lg:basis-2/4 lg:order-1 lg:separation-bcolor lg:pl-2" id="references">
            <span class="span-title">Referencias</span>
            <div class="mt-2 lg:flex lg:h-full lg:content-center">
                <ul class="flex justify-between gap-y-1 flex-wrap text-sm">
                    <li class="flex gap-2 basis-1/2">
                        <img src="{{ asset('../resources/img/IrisUzcategui.jpg') }} " class="w-6 h-6 rounded-full border-1 border-bcolor"/>
                        <p>Iris Uzcategui(Tech Lead Edenred)</p>
                    </li>
                    <li>
                        <a href="tel:5630247928">
                            +5630247928
                        </a>
                    </li>
                    <li class="flex gap-2 basis-1/2">
                        <img src="{{ asset('../resources/img/CarlosNovoa.jpg') }} " class="w-6 h-6 rounded-full border-1 border-bcolor"/>
                        <p>Carlos Novoa(Tech Lead FrontEnd Produbanco)</p>
                    </li>
                    <li>
                        <a href="tel:593988880072">
                            +593988880072
                        </a>
                    </li>
                    <li class="flex gap-2 basis-1/2">
                        <img src="{{ asset('../resources/img/HugoMazzini.jpg') }} " class="w-6 h-6 rounded-full border-1 border-bcolor"/>
                        <p>Hugo Mazzini(Jefe de IT CashManagement)</p>
                    </li>
                    <li>
                        <a href="tel:593996715801">
                            +593996715801
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </article>

</x-dynamic-component>