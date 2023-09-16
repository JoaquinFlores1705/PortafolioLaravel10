<x-dynamic-component :component="Auth::check()? 'appLayout': 'guestLayout'">
    <x-slot name="title">
        Inicio
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
        <section class="flex flex-col items-center lg:flex-row lg:gap-2 lg:basis-full separation-bcolor" id="profile">
            <img src="{{Vite::asset('resources/img/myPhoto.jpg')}} " class="w-40 h-40 rounded-full border-4 border-bcolor">
            <h1 class="text-2xl font-bold">Joaquín Paúl Flores Moreira</h1>
            @include('layouts.themes')
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
                    <a href="tel:+593998001121" class="flex lg:justify-center lg:basis-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-bcolor font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span>+593998001121</span>
                    </a>
                    <a href="https://www.linkedin.com/in/joaquín-paúl-flores-moreira-885b85163" target="_blank" class="flex items-center lg:justify-center lg:basis-full">
                        <img src="{{Vite::asset('resources/img/linkedin.png')}} " class="w-6 h-6 rounded-full">
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
                @foreach ($skills as $skill)
                    <?php 
                        list($fullStar,$totalStar) = explode("/",$skill["ability"]);
                        $stars = "";
                        for($i = 1; $i <= $fullStar; $i++){
                            $stars .= "⭐";
                        }
                    ?>
                    <li class="basis-1/2">{{ $skill["technology"] }}</li>
                    <li class="text-yellow-400 flex items-center">{{$stars}}@for ($i = 1; $i <= $totalStar - $fullStar; $i++)<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" /></svg>
                        @endfor</li>
                @endforeach
              </ul>
        </section>
        <section id="experience" class="separation-bcolor lg:basis-full lg:order-2">
            <span class="span-title">Experiencia laboral</span>
            @foreach ($experiences as $experience)
                <div class="text-sm">
                    <h1 class="text-lg">{{ $experience["post"] }}</h1>
                    <h2 class="text-base">{{ $experience["company"] }}</h2>
                    <h3 class="flex justify-between text-gray-700 dark:text-gray-300">
                        <p>{{ $experience["country"] }}</p>
                        <p>{{ $experience["dates"] }}</p>
                    </h3>
                    <p>{{ $experience["description"] }}</p>
                    <div class="separation-experience {{ $experience["extra-class"] }}">
                        <p>Tecnologías: </p>
                        <div class="flex">
                            @foreach (explode(",",$experience["technologies"]) as $technology)
                                <img src="{{ Vite::asset($technology) }} " class="w-6 h-6"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
        <section class="separation-bcolor lg:basis-full lg:order-2 lg:border-b-0" id="education">
            <span class="span-title">Educación</span>
            @foreach ($educations as $education)
                <div class="text-sm">
                    <h1 class="text-lg">{{ $experience["post"] }}</h1>
                    <h2 class="text-base">{{ $experience["company"] }}</h2>
                    <h3 class="flex justify-between text-gray-700 dark:text-gray-300">
                        <p>{{ $experience["country"] }}</p>
                        <p>{{ $experience["dates"] }}</p>
                    </h3>
                    <p>{{ $experience["description"] }}</p>
                </div>
            @endforeach
        </section>
        <section class="separation-bcolor border-b-0 lg:basis-2/4 lg:order-1 lg:separation-bcolor lg:pl-2" id="references">
            <span class="span-title">Referencias</span>
            <div class="mt-2 lg:flex lg:h-full lg:content-center">
                <ul class="flex justify-between gap-y-1 flex-wrap text-sm">
                    @foreach ($references as $reference)
                        <li class="flex gap-2 basis-1/2">
                            <img src="{{ Vite::asset( $reference["image"] ) }} " class="w-6 h-6 rounded-full border-1 border-bcolor"/>
                            <p>{{ $reference["name"] }}({{ $reference["post"] }})</p>
                        </li>
                        <li>
                            <a href="tel:{{ $reference["phone"] }}">
                                {{ $reference["phone"] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </article>
    @include('layouts.footer')
</x-dynamic-component>