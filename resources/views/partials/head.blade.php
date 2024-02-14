<div class="" x-data="{ menuIsOpen: false}">
    <div class="">
        <div class="mx-auto w-full border-b-4 lg:border-b-0 border-[#b09d72] flex items-center justify-between lg:justify-evenly bg-green-800 py-2 md:py-4 px-4 md:px-8 duration-500">
            <div class="lg:hidden">
                <a href="#" class="">
                    <img src="https://www.iai-togo.tg/wp-content/uploads/2017/06/logo.jpeg" class="h-10 w-14 md:h-14 md:w-20">
                </a>
            </div>
            <ul class="hidden lg:flex items-center justify-between gap-6 text-white text-sm font-semibold">
                <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80"><a href="#" class="">Anciens étudiants</a></li>
                <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80"><a href="#" class="">Parents & Familles</a></li>
                @if (Route::currentRouteName() == 'actualites')
                    <li class="border-b-2 border-[#b09d72] text-[#b09d72] pb-1 duration-400 delay-150 opacity-80"><a href="/actualités" class="">Actualités</a></li>
                @else
                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80"><a href="/actualités" class="">Actualités</a></li>
                @endif
                @if (Route::currentRouteName() == 'opportunites')
                    <li class="border-b-2 border-[#b09d72] text-[#b09d72] pb-1 duration-400 delay-150 opacity-80"><a href="/opportunités" class="">Opportunités</a></li>
                @else
                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80"><a href="/opportunités" class="">Opportunités</a></li>
                @endif
                <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80"><a href="#" class="">COVID-19</a></li>
            </ul>
            <ul class="flex items-center justify-between gap-6 text-white text-sm">
                <li class="hidden lg:block text-sm font-semibold hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150">
                    <a href="http://www.iai-togo.tg/wp-content/uploads/2022/07/RESULTATS_2022.pdf" title="Télecharger les resultats" class="uppercase">RESULTAT DU CONCOURS D'ENTREE A L'IAI-Togo 2022</a>
                </li>
                <li class="text-sm font-semibold hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-[#fbef8b] lg:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </li>
                <li class="lg:hidden" @click="menuIsOpen =! menuIsOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#fbef8b" class="w-7 h-7 hover:cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </li>
            </ul>
        </div>
    </div>

    <div class="mx-auto border-b-4 lg:border-b-8 border-[#b09d72] w-full hidden lg:flex items-center justify-evenly bg-[#fbef8b] py-2">
        <div>
            <img src="https://www.iai-togo.tg/wp-content/uploads/2017/06/logo.jpeg" class="h-20 w-36">
        </div>
        <ul class="flex items-center justify-between gap-6 lg:text-md xl:text-lg font-semibold text-[#314122]">
            @if (Route::currentRouteName() == 'home')
                <li class="border-b-2 border-[#b09d72] text-[#b09d72] pb-1 duration-400 delay-150"><a href="/" class="">Accueil</a></li>
            @else
                <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a href="/" class="">Accueil</a></li>
            @endif

                @if (Route::currentRouteName() == 'about')
                    <li class="border-b-2 border-[#b09d72] text-[#b09d72] pb-1 duration-400 delay-150"><a href="/a-propos" class="">A propos</a></li>
                @else
                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a href="/a-propos" class="">A propos</a></li>
                @endif
                @if (Route::currentRouteName() == 'admission')
                    <li class="border-b-2 border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a href="/admission" class="">Admission</a></li>
                @else
                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a href="/admission" class="">Admission</a></li>
                @endif
                @if (Route::currentRouteName() == 'formations')
                    <li class="border-b-2 border-[#b09d72] text-[#b09d72] pb-1 duration-400 delay-150"><a href="/formations" class="">Formations</a></li>
                @else
                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a href="/formations" class="">Formations</a></li>
                @endif
                @if (Route::currentRouteName() == 'administration')
                    <li class="border-b-2 border-[#b09d72] text-[#b09d72] pb-1 duration-400 delay-150"><a href="/administration" class="">Administration</a></li>
                @else
                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a href="/administration" class="">Administration</a></li>
                @endif
                @if (Route::currentRouteName() == 'galerie')
                    <li class="border-b-2 border-[#b09d72] text-[#b09d72] pb-1 duration-400 delay-150"><a href="/gallerie" class="">Galerie</a></li>
                @else
                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a href="/gallerie" class="">Galerie</a></li>
                @endif
                @if (Route::currentRouteName() == 'contact')
                    <li class="border-b-2 border-[#b09d72] text-[#b09d72] pb-1 duration-400 delay-150"><a href="/contact" class="">Contact</a></li>
                @else
                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a href="/contact" class="">Contact</a></li>
                @endif

        </ul>
    </div>


    <div x-cloak x-show="menuIsOpen" class="absolute top-11 inset-x-0 w-full md:hidden md:w-auto z-50">
        <div class="bg-stone-200">
            <ul class="border-b-4 border-gray-800 flex flex-col p-4 mt-4 bg-gray-50 border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                @if (request()->is('/'))
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 text-white bg-[#b09d72] rounded" aria-current="page">Accueil</a>
                    </li>
                @else
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Accueil</a>
                    </li>
                @endif

                    @if (request()->is('a-propos'))
                        <li>
                            <a href="/a-propos" class="block py-2 pr-4 pl-3 text-white bg-[#b09d72] rounded" aria-current="page">A propos de nous</a>
                        </li>
                    @else
                        <li>
                            <a href="/a-propos" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">A propos de nous</a>
                        </li>
                    @endif

                    @if (request()->is('admission'))
                        <li>
                            <a href="/admission" class="block py-2 pr-4 pl-3 text-white bg-[#b09d72] rounded" aria-current="page">Admission</a>
                        </li>
                    @else
                        <li>
                            <a href="/admission" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Admission</a>
                        </li>
                    @endif

                    @if (request()->is('formations'))
                        <li>
                            <a href="/formations" class="block py-2 pr-4 pl-3 text-white bg-[#b09d72] rounded" aria-current="page">Formations</a>
                        </li>
                    @else
                        <li>
                            <a href="/formations" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Formations</a>
                        </li>
                    @endif

                    @if (request()->is('administration'))
                        <li>
                            <a href="/administration" class="block py-2 pr-4 pl-3 text-white bg-[#b09d72] rounded" aria-current="page">Administration</a>
                        </li>
                    @else
                        <li>
                            <a href="/administration" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Administration</a>
                        </li>
                    @endif

                    @if (request()->is('gallerie'))
                        <li>
                            <a href="/gallerie" class="block py-2 pr-4 pl-3 text-white bg-[#b09d72] rounded" aria-current="page">Gallerie</a>
                        </li>
                    @else
                        <li>
                            <a href="/gallerie" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Gallerie</a>
                        </li>
                    @endif

                    @if (request()->is('contact'))
                        <li>
                            <a href="/contact" class="block py-2 pr-4 pl-3 text-white bg-[#b09d72] rounded" aria-current="page">Nous Contacter</a>
                        </li>
                    @else
                        <li>
                            <a href="/contact" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Nous Contacter</a>
                        </li>
                    @endif
            </ul>
        </div>
    </div>
</div>
