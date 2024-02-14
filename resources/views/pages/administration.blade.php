@extends("layouts.master")


@section('content')
    <div>
        <div class="bg-no-repeat bg-center bg-cover w-full" style="background-image: url(/img/IMG_9311.png)">
            <div class="h-[50vh] md:h-[60vh] w-full flex items-center justify-center">
                <div
                    class="w-full h-full text-white bg-gray-700 bg-opacity-80 flex flex-col px-4 py-12 lg:py-0 gap-8 justify-center items-center">
                    <div class="flex flex-col items-center px-4 gap-4 text-center">
                        <h1 class="text-white lg:text-5xl text-lg font-bold uppercase">Administration IAI-Togo</h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="text-sm lg:text-xl font-bold">Chargée de gérer les aspects
                             pratiques de la vie étudiante, tels que l'inscription et la scolarité,
                             mais aussi <br> de mettre en place des dispositifs de soutien et de suivi pour les
                              étudiants
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full justify-center gap-6 pb-8 pt-32">
            <div>
                <div class="flex justify-center mx-auto">
                    <div>
                        <p class="text-gray-500 text-lg lg:text-xl uppercase text-center font-normal pb-3">
                            Membres administratifs
                        </p>
                        <h1 class="xl:text-3xl lg:text-2xl text-base text-center text-gray-800 font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">
                            Les différents services administratifs de l'Institut et leur rôle dans la vie étudiante
                        </h1>
                    </div>
                </div>

                <div class="mb-4 mt-6">
                    <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="uppercase inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="administration-tab" data-tabs-target="#administration" type="button" role="tab" aria-controls="administration" aria-selected="false">Administration</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="uppercase inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="enseignants-tab" data-tabs-target="#enseignants" type="button" role="tab" aria-controls="enseignants" aria-selected="false">Enseignants</button>
                        </li>
                        <li role="presentation">
                            <button class="uppercase inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="representant_etudiant-tab" data-tabs-target="#representant_etudiant" type="button" role="tab" aria-controls="representant_etudiant" aria-selected="false">Comité des étudiants</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent" class="mb-20">
                    <div class="hidden p-4 rounded-lg" id="allpersonnel" role="tabpanel" aria-labelledby="allpersonnel-tab">
                        <div class="container mx-auto">
                            <div class="sm:flex w-full justify-center items-center gap-12 space-y-32 md:space-y-0 w-full items-center flex-wrap">
                                @for($i =0; $i< 6; $i++)
                                    <div class="xl:w-1/3 w-full md:w-2/5 relative mt-16 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                        <div class="h-300 rounded overflow-hidden shadow-md bg-stone-200">
                                            <div class="absolute -mt-20 w-full flex justify-center">
                                                <div class="h-32 w-32">
                                                    <img src="/img/dg_iai2.jpg" alt="personnel image"
                                                         class="rounded-full object-cover h-full w-full shadow-md"/>
                                                </div>
                                            </div>
                                            <div class="px-6 mt-16">
                                                <div class="font-bold text-3xl text-center pb-1">AGBETI Constatin</div>
                                                <p class="text-gray-800 text-sm text-center">Chief Executive Officer</p>
                                                <p class="text-center text-gray-600 text-base pt-3 font-normal">The CEO's
                                                    role in raising a company's corporate IQ is to establish an atmosphere
                                                    that promotes knowledge sharing and collaboration.</p>
                                                <div class="w-full flex justify-center pt-5 pb-5">
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-github">
                                                                <path
                                                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-twitter">
                                                                <path
                                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-instagram">
                                                                <rect x="2" y="2" width="20" height="20" rx="5"
                                                                      ry="5"></rect>
                                                                <path
                                                                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    {{-- administration , image unique du DG --}}
                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="administration" role="tabpanel" aria-labelledby="administration-tab">
                        <div class="container mx-auto">
                            <div class="sm:flex justify-center gap-12 space-y-32 md:space-y-0 w-full items-center flex-wrap mt-12">
                                @for($i =0; $i< 1; $i++)
                                    <div class="xl:w-1/3 w-full md:w-2/5 relative mt-16 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                        <div class="h-300 rounded overflow-hidden shadow-md bg-stone-200">
                                            <div class="absolute -mt-20 w-full flex justify-center">
                                                <div class="h-48 w-48">
                                                    <img src="/img/dg_iai2.jpg" alt="personnel image"
                                                         class="rounded-full object-cover h-full w-full shadow-md"/>
                                                </div>
                                            </div>
                                            <div class="px-6 mt-32">
                                                <div class="font-bold text-3xl text-center pb-1">AGBETI Constatin</div>
                                                <p class="text-gray-800 text-sm text-center">Directeur General</p>
                                                <p class="text-center text-gray-600 text-base pt-3 text-justify font-normal">
                                                    En tant que directeur général, Monsieur AGBETI a su mettre en place des stratégies
                                                    innovantes et rentables qui ont contribué au succès de l'IAI-TOGO.
                                                    Nous sommes persuadés que, grâce à ses qualités de leader et de visionnaire,
                                                    il continuera à guider L'IAI-TOGO vers de nouveaux sommets.
                                                </p>
                                                <div class="w-full flex justify-center pt-5 pb-5">
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-github">
                                                                <path
                                                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-twitter">
                                                                <path
                                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-instagram">
                                                                <rect x="2" y="2" width="20" height="20" rx="5"
                                                                      ry="5"></rect>
                                                                <path
                                                                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="enseignants" role="tabpanel" aria-labelledby="enseignants-tab">
                        <div class="container mx-auto">
                            <div class="sm:flex gap-12 space-y-32 md:space-y-0 w-full items-center xl:justify-between flex-wrap md:justify-around">
                                @for($i =0; $i< 3; $i++)
                                    <div class="xl:w-1/3 w-full md:w-2/5 relative mt-16 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                        <div class="h-300 rounded overflow-hidden shadow-md bg-stone-200">
                                            <div class="absolute -mt-20 w-full flex justify-center">
                                                <div class="h-32 w-32">
                                                    <img src="/img/dg_iai2.jpg" alt="personnel image"
                                                         class="rounded-full object-cover h-full w-full shadow-md"/>
                                                </div>
                                            </div>
                                            <div class="px-6 mt-16">
                                                <div class="font-bold text-3xl text-center pb-1">AGBETI Constatin</div>
                                                <p class="text-gray-800 text-sm text-center">Chief Executive Officer</p>
                                                <p class="text-center text-gray-600 text-base pt-3 font-normal">The CEO's
                                                    role in raising a company's corporate IQ is to establish an atmosphere
                                                    that promotes knowledge sharing and collaboration.</p>
                                                <div class="w-full flex justify-center pt-5 pb-5">
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-github">
                                                                <path
                                                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-twitter">
                                                                <path
                                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-instagram">
                                                                <rect x="2" y="2" width="20" height="20" rx="5"
                                                                      ry="5"></rect>
                                                                <path
                                                                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="representant_etudiant" role="tabpanel" aria-labelledby="representant_etudiant-tab">
                        <div class="container mx-auto">
                            <div class="sm:flex gap-12 space-y-32 md:space-y-0 w-full items-center xl:justify-between flex-wrap md:justify-around">
                                @for($i =0; $i< 2; $i++)
                                    <div class="xl:w-1/3 w-full md:w-2/5 relative mt-16 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                        <div class="h-300 rounded overflow-hidden shadow-md bg-stone-200">
                                            <div class="absolute -mt-20 w-full flex justify-center">
                                                <div class="h-32 w-32">
                                                    <img src="/img/dg_iai2.jpg" alt="personnel image"
                                                         class="rounded-full object-cover h-full w-full shadow-md"/>
                                                </div>
                                            </div>
                                            <div class="px-6 mt-16">
                                                <div class="font-bold text-3xl text-center pb-1">AGBETI Constatin</div>
                                                <p class="text-gray-800 text-sm text-center">Chief Executive Officer</p>
                                                <p class="text-center text-gray-600 text-base pt-3 font-normal">The CEO's
                                                    role in raising a company's corporate IQ is to establish an atmosphere
                                                    that promotes knowledge sharing and collaboration.</p>
                                                <div class="w-full flex justify-center pt-5 pb-5">
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-github">
                                                                <path
                                                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-twitter">
                                                                <path
                                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="mx-5">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="#718096"
                                                                 stroke-width="1.5" stroke-linecap="round"
                                                                 stroke-linejoin="round" class="feather feather-instagram">
                                                                <rect x="2" y="2" width="20" height="20" rx="5"
                                                                      ry="5"></rect>
                                                                <path
                                                                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
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
@endsection
