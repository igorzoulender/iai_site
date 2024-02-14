@extends("layouts.master")


@section('content')
    <div>
        <div class="bg-no-repeat bg-center bg-cover w-full"
             style="background-image: url(https://images.unsplash.com/photo-1635350736475-c8cef4b21906?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
            <div class="h-[50vh] md:h-[60vh] w-full flex items-center justify-center">
                <div
                    class="w-full h-full text-white bg-gray-700 opacity-80 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                    <div class="flex flex-col items-center gap-4 px-4 text-center">
                        <h1 class="text-white lg:text-5xl text-lg font-bold uppercase">Opportunités</h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="text-xl font-bold text-center">
                            Formation solide en informatique,Stage et opportunités de travail,
                            Réseaux de contact professionnels, <br> Carrières lucratives,Possibilité
                            de travailler dans des entreprises renom...
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class=" mx-auto">
                <div class="bg-stone-200">
                    <div class="py-20 flex flex-col items-center justify-center">
                        <div class="xl:w-1/2 w-11/12">
                            <h1 role="heading" tabindex="0"
                                class="text-6xl font-bold 2xl:leading-10 leading-0 text-center text-gray-800">
                                Dernières actualités
                               </h1>
                            <h2 role="contentinfo" tabindex="0"
                                class="text-base leading-normal text-center text-gray-600 mt-5">
                                Nouvelles concernant l'IAI-TOGO et qui sont susceptibles d'intéresser
                                les étudiants, les enseignants, les partenaires et le public en général.
                            </h2>
                        </div>
                    </div>

                    <ul class="flex flex-col pb-20">
                        {{-- card1 , formation solide en informatiques --}}
                        <div class="relative flex flex-col jus items-center justify-center overflow-hidden p-5">
                            <div class="flex flex-col bg-white shadow-md max-w-4xl px-5 py-4 rounded-md">
                                <div class="bg-white shadow-gray-100 w-full flex flex-col sm:flex-row gap-3 sm:items-center justify-between">
                                    <div class="flex gap-4">
                                    <div>
                                        <img class="w-16 h-16 rounded-lg" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                    </div>
                                    <div class="">
                                        <span class="text-green-800 text-sm">IAI-TOGO</span>
                                        <h3 class="font-bold mt-px">Formation solide en informatique</h3>
                                        <div class="flex items-center gap-3 mt-2">
                                            <span class="bg-gray-100 text-green-800 rounded-full px-3 py-1 text-sm">Temps plein</span>
                                            <span class="text-slate-600 text-sm flex gap-1 items-center">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                            kodjoviakope
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                    <div>
                                        <button class="bg-green-800 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">
                                            Postulez maintenant
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                </svg>
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-2 line-clamp-2">
                                    Les étudiants peuvent apprendre de nombreuses compétences
                                    informatiques dans les domaines de la programmation,
                                    de la gestion de bases de données, de la création de sites web,
                                    de la sécurité informatique, etc.
                                </p>
                                </div>
                            </div>
{{-- card 2 ,stage et opportunité de travail --}}
                            <div class="relative flex flex-col jus items-center justify-center overflow-hidden p-5">
                                <div class="flex flex-col bg-white shadow-md max-w-4xl px-5 py-4 rounded-md">
                                    <div class="bg-white shadow-gray-100 w-full flex flex-col sm:flex-row gap-3 sm:items-center justify-between">
                                        <div class="flex gap-4">
                                        <div>
                                            <img class="w-16 h-16 rounded-lg" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                        </div>
                                        <div class="">
                                            <span class="text-green-800 text-sm">IAI-TOGO</span>
                                            <h3 class="font-bold mt-px">Stage et opportunités de travail</h3>
                                            <div class="flex items-center gap-3 mt-2">
                                                <span class="bg-gray-100 text-green-800 rounded-full px-3 py-1 text-sm">Temps plein</span>
                                                <span class="text-slate-600 text-sm flex gap-1 items-center">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                </svg>
                                                kodjoviakope
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                        <div>
                                            <button class="bg-green-800 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">
                                                Postulez maintenant
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <p class="mt-2 line-clamp-2">
                                        De nombreuses écoles informatiques proposent des stages
                                         et des programmes de coopération avec des entreprises pour
                                          aider les étudiants à se faire une première expérience professionnelle.
                                    </p>
                                    </div>
                                </div>
                                {{-- card3,résautage professionnel --}}
                                <div class="relative flex flex-col jus items-center justify-center overflow-hidden p-5">
                                    <div class="flex flex-col bg-white shadow-md max-w-4xl px-5 py-4 rounded-md">
                                        <div class="bg-white shadow-gray-100 w-full flex flex-col sm:flex-row gap-3 sm:items-center justify-between">
                                            <div class="flex gap-4">
                                            <div>
                                                <img class="w-16 h-16 rounded-lg" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                            </div>
                                            <div class="">
                                                <span class="text-green-800 text-sm">IAI-TOGO</span>
                                                <h3 class="font-bold mt-px">Réseautage professionnel</h3>
                                                <div class="flex items-center gap-3 mt-2">
                                                    <span class="bg-gray-100 text-green-800 rounded-full px-3 py-1 text-sm">Temps plein</span>
                                                    <span class="text-slate-600 text-sm flex gap-1 items-center">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    </svg>
                                                    kodjoviakope
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                            <div>
                                                <button class="bg-green-800 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">
                                                    Postulez maintenant
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <p class="mt-2 line-clamp-2">
                                            Les étudiants peuvent également avoir l'opportunité de rencontrer et
                                            de se faire connaître auprès de professionnels de l'informatique grâce aux événements
                                             organisés par l'école ou aux clubs étudiants.
                                        </p>
                                        </div>
                                    </div>
                                    {{-- Apprentissage continu --}}
                                    <div class="relative flex flex-col jus items-center justify-center overflow-hidden p-5">
                                        <div class="flex flex-col bg-white shadow-md max-w-4xl px-5 py-4 rounded-md">
                                            <div class="bg-white shadow-gray-100 w-full flex flex-col sm:flex-row gap-3 sm:items-center justify-between">
                                                <div class="flex gap-4">
                                                <div>
                                                    <img class="w-16 h-16 rounded-lg" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                                </div>
                                                <div class="">
                                                    <span class="text-green-800 text-sm">IAI-TOGO</span>
                                                    <h3 class="font-bold mt-px">Apprentissage continu</h3>
                                                    <div class="flex items-center gap-3 mt-2">
                                                        <span class="bg-gray-100 text-green-800 rounded-full px-3 py-1 text-sm">Temps plein</span>
                                                        <span class="text-slate-600 text-sm flex gap-1 items-center">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        </svg>
                                                        kodjoviakope
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                                <div>
                                                    <button class="bg-green-800 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">
                                                        Postulez maintenant
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="mt-2 line-clamp-2">
                                                Les étudiants peuvent continuer à apprendre et à se
                                                développer tout au long de leur carrière grâce aux
                                                nombreuses ressources et opportunités de formation
                                                proposées par les écoles informatiques.
                                            </p>
                                            </div>
                                        </div>
                                        {{-- card4, Travailler comme indépendant --}}
                                        <div class="relative flex flex-col jus items-center justify-center overflow-hidden p-5">
                                            <div class="flex flex-col bg-white shadow-md max-w-4xl px-5 py-4 rounded-md">
                                                <div class="bg-white shadow-gray-100 w-full flex flex-col sm:flex-row gap-3 sm:items-center justify-between">
                                                    <div class="flex gap-4">
                                                    <div>
                                                        <img class="w-16 h-16 rounded-lg" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                                    </div>
                                                    <div class="">
                                                        <span class="text-green-800 text-sm">IAI-TOGO</span>
                                                        <h3 class="font-bold mt-px">Travailler comme indépendant</h3>
                                                        <div class="flex items-center gap-3 mt-2">
                                                            <span class="bg-gray-100 text-green-800 rounded-full px-3 py-1 text-sm">Temps partiel</span>
                                                            <span class="text-slate-600 text-sm flex gap-1 items-center">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                            </svg>
                                                            kodjoviakope
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div>
                                                        <button class="bg-green-800 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">
                                                            Postulez maintenant
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="mt-2 line-clamp-2">
                                                    Si vous avez des compétences en informatique,
                                                    vous pouvez travailler en tant que consultant indépendant
                                                    ou créer votre propre entreprise de technologie.
                                                </p>
                                                </div>
                                            </div>
                                            {{-- card5,Travailler dans le secteur public --}}
                                            <div class="relative flex flex-col jus items-center justify-center overflow-hidden p-5">
                                                <div class="flex flex-col bg-white shadow-md max-w-4xl px-5 py-4 rounded-md">
                                                    <div class="bg-white shadow-gray-100 w-full flex flex-col sm:flex-row gap-3 sm:items-center justify-between">
                                                        <div class="flex gap-4">
                                                        <div>
                                                            <img class="w-16 h-16 rounded-lg" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                                        </div>
                                                        <div class="">
                                                            <span class="text-green-800 text-sm">IAI-TOGO</span>
                                                            <h3 class="font-bold mt-px">Travailler dans le secteur public</h3>
                                                            <div class="flex items-center gap-3 mt-2">
                                                                <span class="bg-gray-100 text-green-800 rounded-full px-3 py-1 text-sm">Temps plein</span>
                                                                <span class="text-slate-600 text-sm flex gap-1 items-center">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                </svg>
                                                                kodjoviakope
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div>
                                                            <button class="bg-green-800 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">
                                                                Postulez maintenant
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <p class="mt-2 line-clamp-2">
                                                        Les gouvernements et les organismes publics ont souvent
                                                        besoin de professionnels de l'informatique pour gérer et
                                                        développer leurs systèmes informatiques.
                                                    </p>
                                                </div>
                                            </div>

                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
