@extends("layouts.master")


@section('content')
    <div class="bg-gray-100 w-full h-[70vh] flex items-center">
        <div id="controls-carousel" class="relative w-full h-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-full overflow-hidden md:h-full">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                     data-carousel-item="">
                    <div class="flex flex-col lg:flex-row lg:items-center h-full">
                        {{--                        <div class="bg-green-800">--}}
                        <div
                            class="w-full lg:w-1/2 h-full  text-white flex flex-col bg-green-800 py-6 lg:py-0 gap-8 justify-center items-center"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-28 h-28 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                            </svg>

                            <div class="flex flex-col items-center gap-4 text-center">
                                <h1 class="text-white lg:text-3xl text-md font-bold">IAI TOGO <br>la référence en matière d'informatique
                                </h1>
                                <span class="w-20 h-2 bg-[#b09d72]"></span>
                                <h1 class="lg:text-xl lg:font-bold">Nos programmes de formation sont conçus par des professionnels de l'informatique et sont mis à jour régulièrement pour rester en adéquation avec les dernières technologies et les besoins du marché du travail.</h1>
                            </div>

                            <a href="#"
                               class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-12 py-4 px-8">
                                <p class="font-bold text-xl">Nous Contacter</p>
                            </a>
                        </div>
                        {{--                        </div>--}}

                        <div
                            class="relative w-full lg:w-1/2 h-full hidden lg:flex items-center justify-center bg-auto bg-no-repeat bg-cover"
                            style="background-image: url(/img/IMG_9271111.jpg);">
                            <div class="flex items-center justify-center h-full w-full rounded-lg">
                                <div class="bg-gray-900 p-4 lg:p-6 xl:p-12 opacity-80 w-full flex flex-col items-center">
                                    <h1 style=" -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;"
                                        class="duration-500 text-3xl lg:text-3xl uppercase font-bold text-[#b09d72] text-center drop-shadow-lg">
                                        INSTITUT AFRICAIN D'INFORMATIQUE</h1>
                                    <h3 class="duration-500 mt-6 uppercase text-xl lg:text-2xl font-semibold text-white p-4 bg-[#c31d13] text-center max-w-lg">
                                        REPRESENTATION DU TOGO</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                     data-carousel-item="">
                    <div class="flex items-center h-full">
                        <div
                            class="w-full md:w-1/2 h-full bg-green-800 text-white flex flex-col py-6 lg:py-0 gap-8 justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-24 h-24 lg:w-18 lg:h-28 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                            </svg>

                            <div class="flex flex-col items-center gap-4 text-center">
                                <h1 class="text-white lg:text-4xl text-md font-bold">Notre formation est pour tous les niveaux, allant du débutant au professionnel confirmé. </h1>
                                <span class="w-20 h-2 bg-[#b09d72]"></span>
                                <h1 class="lg:text-xl text-center">Nous proposons une large gamme de matières et de programmes <br> pour répondre aux besoins et aux intérêts de chaque étudiant.</h1>
                            </div>

                            <a href="/contact"
                               class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-12 py-4 px-8">
                                <p class="font-bold text-xl">Nous contacter</p>
                            </a>
                        </div>
                        <div
                            class="relative w-full lg:w-1/2 h-full hidden lg:flex items-center justify-center bg-auto bg-no-repeat bg-cover"
                            style="background-image: url(/img/IMG_4607.jpg);">
                            <div class="flex items-center justify-center h-full w-full rounded-lg">
                                <div class="bg-gray-900 p-16 opacity-60 h-full w-full flex flex-col items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                     data-carousel-item="">
                    <div class="flex items-center h-full">
                        <div
                            class="w-full md:w-1/2 h-full bg-green-800 text-white flex flex-col gap-8 justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-28 h-28 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                            </svg>
                            <div class="flex flex-col items-center gap-4 text-center">
                                <h1 class="text-white lg:text-4xl text-lg font-bold">Nous sommes heureux de vous accueillir dans notre établissement scolaire <br> IAI TOGO</h1>
                                <span class="w-20 h-2 bg-[#b09d72]"></span>
                                <h1 class="text-xl font-bold">Nous offrons un accompagnement personnalisé <br> et une assistance tout au long de votre parcours.</h1>
                            </div>
                            <a href="#"
                               class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-12 py-4 px-8">
                                <p class="font-bold text-xl">Nous contacter</p>
                            </a>
                        </div>
                        <div
                            class="relative w-full lg:w-1/2 h-full hidden lg:flex items-center justify-center bg-auto bg-no-repeat bg-cover"
                            style="background-image: url(/img/IMG_4554.jpg);">
                            <div class="flex items-center justify-center h-full w-full rounded-lg">
                                <div class="bg-gray-900 p-16 opacity-60 h-full w-full flex flex-col items-center">
                                </div>
                            </div>
                        </div>
                        {{--                    <img  class="w-1/2 h-full" src="/img/IMG_4554.jpg" alt="...">--}}
                    </div>
                </div>

            </div>
            <!-- Slider controls -->
            <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev="">
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  stroke-width="2"
                                                                                  d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
            </button>
            <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next="">
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  stroke-width="2"
                                                                                  d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
            </button>
        </div>
    </div>

    <!--Representant Speech Section-->
    <div class="bg-[#EEE6D8] pt-32 pb-12">
        <div class="container mx-auto p-4 md:p-0">
            <div class="shadow-lg flex flex-wrap w-full lg:w-4/5 mx-auto">
                <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative"
                     style="background-image:url(/img/dg_iai2.jpg)">
                </div>
                <div class="bg-white w-full md:w-2/3">
                    <div class="h-full mx-auto px-4 md:px-0 md:pt-6 md:-ml-6 relative">
                        <div
                            class="bg-white lg:h-full p-4 md:p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
                            <div class="w-full lg:w-1/5 lg:border-right lg:border-solid text-center md:text-left">
                                <h3 class="font-bold text-xl">AGBETI Kodjo Constatin</h3>
                                <p class="mb-0 mt-3 text-grey-dark text-sm italic">Lomé - TOGO</p>
                                <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
                            </div>
                            <div class="w-full lg:w-4/6 lg:px-3">
                                <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-md text-gray-600">
                                    Bienvenue sur le portail web de l'Institut Africain d'informatique, représentation
                                    du TOGO. Ouvert le 22 octobre 2002, l'IAI-TOGO est une
                                    école inter-Etats d'enseignement supérieur en Informatique. Il est membre du réseau
                                    IAI créé le 29 janvier 1971 à Fort Lamy (actuel Ndjaména) en république de TCHAD.
                                    Après quinze années d'existence, il convient de rendre plus visible l'Institut et de
                                    communiquer davantage avec nos partenaires. C'est le but de ce portail conçu
                                    pour vous permettra de prendre connaissance des missions, objectifs, activités et
                                    offres de formations de l'IAI-TOGO. C'est le lieu de remercier tous les
                                    partenaires de l'IAI-TOGO pour la confiance et les efforts consentis.
                                </p>
                            </div>
                            <div class="w-full lg:w-1/6 mt-6 lg:mt-0 lg:px-4 text-center md:text-left"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--News & Events sections-->
    @include('partials.blog')

    {{-- Before footer section   --}}
    <div class="relative h-[70vh] w-full bg-cover bg-center" style="background-image: url(/img/IMG_4667.jpg)">
        <div
            class="bg-gray-900 bg-opacity-60 lg:bg-gradient-to-l from-green-900 h-full">
            <div class="container justify-end mx-auto flex items-center h-full w-full">
                <div class="w-full lg:w-1/2 flex flex-col gap-6 text-white">
                    <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold uppercase text-center"
                        style="text-shadow: #111827 1px 0 10px;">HISTOIRE DE l'IAI</h1>
                    <div class="flex flex-col items-center px-4">
                        <p style="text-shadow: 0px 4px 2px rgba(0,0,0,0.62);"
                           class="text-lg text-center lg:text-2xl font-semibold mb-10"
                           style="text-shadow: #111827 1px 0 10px;">L’institut Africain d’Informatique (L'IAI) est une école supérieure en informatique. La convention
                           portant création de l’institut et les statuts y afférent ont été signés le 29 janvier 1972 à Fort
                           Lamy (actuel Ndjaména) en république du TCHAD. L’accord de siège entre l’IAI et le
                           GABON a été signé en janvier 1975. Il est par conséquent un établissement inter-Etats.</p>

                        <a href="/contact"
                           class="font-semibold p-3 border border-white rounded-lg text-2xl hover:border-yellow-100 hover:text-yellow-100">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  Partner list  --}}
    <div id="controls-carousel" class="relative w-full h-full " data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden md:h-full flex justify-center items-center py-20">
            <!-- Item 1 -->
            <div class="duration-700 ease-in-out transition-all transform -translate-x-full z-10 py-8 px-20"
                 data-carousel-item="">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-3">
                    <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-24" src="/img/partenaires/troyes.png" alt="partner-logo">
                    </div>

                    <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-24" src="/img/partenaires/belfort.jpg" alt="partner-logo">
                    </div>

                    <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-24" src="/img/partenaires/ul.png" alt="partner-logo">
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="duration-700 ease-in-out transition-all transform -translate-x-full z-10 py-8 px-20"
                 data-carousel-item="">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-3">
                    <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-24" src="/img/partenaires/logo-uk.png" alt="partner-logo">
                    </div>

                    <div class="col-span-1 flex items-center justify-center md:col-span-3 lg:col-span-1">
                        <img class="h-24" src="/img/partenaires/nice.png" alt="partner-logo">
                    </div>

                    <div class="col-span-2 flex items-center justify-center md:col-span-3 lg:col-span-1">
                        <img class="h-24" src="/img/partenaires/compiègne.png" alt="partner-logo">
                    </div>
                </div>
            </div>

        </div>
        <!-- Slider controls -->
        <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev="">
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400 dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  stroke-width="2"
                                                                                  d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next="">
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400 dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  stroke-width="2"
                                                                                  d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{--Our partners--}}
    <section class="bg-white px-4 md:px-6 lg:px-0 hidden">
        <div class="mx-auto py-16 max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/troyes.png" alt="partner-logo">
                </div>

                <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/belfort.jpg" alt="partner-logo">
                </div>

                <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/ul.png" alt="partner-logo">
                </div>

                <div class="col-span-1 flex items-center justify-center md:col-span-3 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/nice.png" alt="partner-logo">
                </div>

                <div class="col-span-2 flex items-center justify-center md:col-span-3 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/compiègne.png" alt="partner-logo">
                </div>
            </div>
        </div>
    </section>

@endsection


