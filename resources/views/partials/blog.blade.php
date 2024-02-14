
        <!--News & Events sections-->
<div class="bg-[#EEE6D8] py-20">
            <div class="w-full h-full container mx-auto py-16">
                <div class="flex flex-col gap-20 lg:flex-row lg:gap-12 px-4 lg:px-0">
                    <div class="flex flex-col gap-6 lg:w-2/3">
                        <div
                            class="flex items-center justify-between text-lg uppercase border-b-2 border-red-600 pb-2 text-red-600 text-md lg:text-lg font-extrabold">
                            <div class="">Nouveautés</div>
                            <div class="hidden lg:inline-flex lg:items-center gap-3">
                                <a href="#">Voir plus de nouveautés</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-8">
                            @for($i = 0; $i <= 1; $i++ )
                                <div class="lg:w-1/2 bg-white w-full">
                                    <img class="w-full h-72" src="/img/iai4.jpg" alt="New image">
                                    <div class="lg:p-6 p-3 md:p-4 ">
                                        <div class="">
                                            <p class="text-lg font-bold text-[#314122] mt-2">Publié le, 05 Juin 2022</p>
                                            <a href="#"
                                               class="text-red-600 text-lg mt-1 font-semibold underline hover:text-red-500">Conditions
                                                d'admission au coucours d'entré à ENSEA-Togo</a>
                                            <p class="text-gray-700 text-lg mt-4 text-sm line-clamp-4">Jane Pucher, senior
                                                staff attorney with the Innocence Project, spoke Monday night to a group of
                                                Saint Michael’s College students about “The Role of Innocence in Criminal
                                                Legal Reform.”…</p>
                                            <div
                                                class="inline-flex items-center justify-start mt-6 bg-red-600 rounded w-fit-content">
                                                <button class="text-center text-lg text-white font-semibold my-1 mx-2">Voir
                                                    plus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="lg:w-1/3 flex flex-col h-full w-full">
                        <div
                            class="flex items-center text-lg justify-between uppercase border-b-2 border-red-600 pb-2 text-red-600 text-md lg:text-lg font-extrabold">
                            <div class="text-center">Evénements</div>
                            <div class="hidden lg:inline-flex lg:items-center gap-3">
                                <a href="#">Voir plus</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col pt-4">
                            <div class="w-full h-full">
                                <div
                                    class="h-[80vh] lg:h-[50vh] rounded-xl pb-6 pr-4 scrollbar-thin scrollbar-thumb-red-800 scrollbar-thumb-rounded-full scrollbar-track-white overflow-y-scroll">
                                    @for($i = 0; $i <= 2; $i++ )
                                        <div class="mb-6">
                                            <p class="text-lg font-bold text-[#314122]">Publié le, 05 Juin 2022</p>
                                            <a href="#"
                                               class="text-red-600 text-lg font-semibold underline hover:text-red-500">Les
                                                mains qui cueillaient le coton : Le travail d'une femme noire comme acte de
                                                libération dans le Shreveport ségrégué 1944 -1957</a>
                                            <p class="text-gray-700 text-lg mt-4 text-sm">Jane Pucher, senior staff attorney
                                                with the Innocence Project, spoke Monday night to a group of Saint Michael’s
                                                College students about “The Role of Innocence in Criminal Legal
                                                Reform.”…</p>
                                            <div
                                                class="inline-flex items-center justify-start mt-4 bg-red-600 rounded w-fit-content">
                                                <button class="text-center text-lg text-white font-semibold mx-2">Voir
                                                    plus
                                                </button>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </div>

