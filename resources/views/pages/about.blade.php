@extends("layouts.master")


@section('content')
    <div>
        <div class="bg-no-repeat bg-center bg-cover w-full" style="background-image: url(../img/IMG_4657.jpg)">
            <div class="h-[60vh] w-full flex items-center justify-center">
                <div
                    class="w-full h-full text-white bg-gray-700 bg-opacity-70 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                    <div style="text-shadow: 0px 4px 2px rgba(0,0,0,0.62);"
                         class="flex flex-col items-center gap-4 px-4 text-center">
                        <h1 class="text-white lg:text-5xl text-lg font-bold uppercase">A propos de l'IAI-Togo </h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="lg:text-xl text-center font-semibold lg:font-bold">Vous êtes curieux de savoir ce que l'Institue Africain d'Informatique (IAI-TOGO) à vous offrir ?<br>
                            Voici un aperçu du bureau de nos statistiques et quelques faits rapides.
                        </h1>
                    </div>

                    <a href="/contact"
                       class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-8 py-4 px-8">
                        <p class="lg:font-bold font-semibold lg:text-xl">Nous Contacter</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="px-4 py-12 lg:py-20 mx-auto mt-12 lg:mt-20 lg:px-8 lg:py-20">
            <div class="mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <h2 class="max-w-lg text-gray-900 text-center mb-6 font-sans text-3xl font-bold leading-none tracking-tight sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                      <svg viewBox="0 0 52 24" fill="currentColor"
                           class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="d5589eeb-3fca-4f01-ac3e-983224745704" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                          </pattern>
                        </defs>
                        <rect fill="url(#d5589eeb-3fca-4f01-ac3e-983224745704)" width="52" height="24"></rect>
                      </svg>
                        <span class="relative">&nbsp;</span>
                    </span>
                    LES RAISONS POUR CHOISIR L'IAI-TOGO
                </h2>
                <p class="text-base text-center text-gray-700 md:text-lg">
                    Notre école informatique est dédiée à la formation de professionnels qualifiés dans le domaine de l'informatique. Nous croyons que l'apprentissage continu est essentiel pour réussir dans ce domaine en constante évolution, et nous offrons donc des programmes de formation de haute qualité qui sont mis à jour régulièrement pour refléter les dernières technologies et tendances du marché.
                </p>
            </div>

            <div class="gap-8 flex flex-col">
                <div
                    class="bg-red-600 relative w-full p-px mx-auto mb-4 overflow-hidden transition-shadow duration-300 border-l-2 border border-red-600 rounded lg:mb-8 lg:max-w-7xl group hover:shadow-xl">
                    <div
                        class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                    <div
                        class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                    <div
                        class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                    <div
                        class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                    <div
                        class="relative flex flex-col items-center h-full py-10 duration-300 bg-white rounded-sm transition-color sm:items-stretch sm:flex-row">
                        <div class="px-12 py-8 text-center w-full flex flex-col items-center justify-center">
                            <h6 class="mb-4 text-4xl font-bold text-deep-purple-accent-400 sm:text-5xl">
                                +889
                            </h6>
                            <p class="text-center md:text-base lg:text-xl uppercase">
                                Ingénieur en informatique formés
                            </p>
                        </div>
                        <div
                            class="w-56 h-1 transition duration-300 transform bg-red-600 rounded-full group-hover:bg-deep-purple-accent-400 group-hover:scale-110 sm:h-auto sm:w-1"></div>
                        <div class="px-12 py-8 text-center w-full">
                            <h6 class="mb-4 text-4xl font-bold text-deep-purple-accent-400 sm:text-5xl">
                                +3
                            </h6>
                            <p class="text-center md:text-base lg:text-xl uppercase">
                                Filières en Informatique
                            </p>
                        </div>
                        <div
                            class="w-56 h-1 transition duration-300 transform bg-red-600 rounded-full group-hover:bg-deep-purple-accent-400 group-hover:scale-110 sm:h-auto sm:w-1"></div>
                        <div class="px-12 py-8 text-center w-full">
                            <h6 class="mb-4 text-4xl font-bold text-deep-purple-accent-400 sm:text-5xl">
                                +90
                            </h6>
                            <p class="text-center md:text-base lg:text-xl uppercase">
                                Enseignants.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-red-600 relative w-full p-px mx-auto mb-4 overflow-hidden transition-shadow duration-300 border-l-2 border border-red-600 rounded lg:mb-8 lg:max-w-7xl group hover:shadow-xl">
                    <div
                        class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                    <div
                        class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                    <div
                        class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                    <div
                        class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                    <div
                        class="relative flex flex-col items-center h-full py-10 duration-300 bg-white rounded-sm transition-color sm:items-stretch sm:flex-row">
                        <div class="px-12 py-8 text-center w-full flex flex-col items-center justify-center">
                            <h6 class="mb-4 text-4xl font-bold text-deep-purple-accent-400 sm:text-5xl">
                                +400
                            </h6>
                            <p class="text-center md:text-base lg:text-xl uppercase">
                                Etudiants internationaux
                            </p>
                        </div>
                        <div
                            class="w-56 h-1 transition duration-300 transform bg-red-600 rounded-full group-hover:bg-deep-purple-accent-400 group-hover:scale-110 sm:h-auto sm:w-1"></div>
                        <div class="px-12 py-8 text-center w-full">
                            <h6 class="mb-4 text-4xl font-bold text-deep-purple-accent-400 sm:text-5xl">
                                +10
                            </h6>
                            <p class="text-center md:text-base lg:text-xl uppercase">
                                Certifications internationales
                            </p>
                        </div>
                        <div
                            class="w-56 h-1 transition duration-300 transform bg-red-600 rounded-full group-hover:bg-deep-purple-accent-400 group-hover:scale-110 sm:h-auto sm:w-1"></div>
                        <div class="px-12 py-8 text-center w-full">
                            <h6 class="mb-4 text-4xl font-bold text-deep-purple-accent-400 sm:text-5xl">
                                +6
                            </h6>
                            <p class="text-center md:text-base lg:text-xl uppercase">
                                Enseignant internationaux.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mx-auto my-4 text-gray-600 text-center lg:max-w-2xl lg:mb-6 md:px-16">
                Nos instructeurs sont des professionnels expérimentés dans leur domaine, et ils sont passionnés par l'enseignement et par l'aide à nos étudiants à atteindre leurs objectifs de carrière.
            </p>
        </div>

        <section  class="background-radial-gradient">
            <style>
                .background-radial-gradient {
                    background-color: hsl(218, 41%, 15%);
                    background-image: radial-gradient(
                        650px circle at 0% 0%,
                        hsl(218, 41%, 35%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%
                    ),
                    radial-gradient(
                        1250px circle at 100% 100%,
                        hsl(218, 41%, 45%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%
                    );
                }
            </style>
            <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                <div class="container mx-auto xl:px-32">
                    <div class="flex flex-col gap-12 flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="text-xl md:text-xl xl:text-xl  tracking-tight mb-8" style="color: hsl(218, 81%, 95%);">IAI-TOGO<br></h1>
                                <h1>
                                    <span style="color: hsl(218, 81%, 75%);">En application de la décision du Conseil d’Administration de délocaliser l’IAI, la
                                    Représentation du TOGO (IAI-TOGO) a ouvert ses portes le 24 octobre 2002. L’accord
                                    d’établissement entre la République Togolaise et l’Institut Africain d’Informatique a été signée
                                    le 12 mai 2006. <br> <br>
                                    L’IAI-TOGO propose actuellement le cycle de formation des ingénieurs de travaux
                                    informatiques (Licence professionnelle en informatique). Au terme des trois années de
                                    formation, les diplômés peuvent poursuivre leurs études supérieures au siège au GABON ou
                                    dans les universités occidentales ou asiatiques (UTBM en FRANCE, Université-Laval du
                                    Québec au CANADA, etc)..
                                    </span>
                                </h1>

                        </div>

                        <div class="mt-8 lg:mt-0">
                            <h1 class="text-2xl md:text-2xl xl:text-2xl  tracking-tight mb-8" style="color: hsl(218, 81%, 95%);">IAI-SIEGE<br></h1>
                            <h1 class="mb-10">
                                <span style="color: hsl(218, 81%, 75%);">Au lendemain des indépendances, la formation de cadres techniques de haut niveau, adaptés
                                aux besoins socio-économiques des pays apparaissait comme l’une des priorités pour soutenir
                                les actions d’un plan de développement national harmonieux.<br> <br>
                                C’est ainsi que les chefs d’Etat de l’Organisation Commune Africaine, Malgache et
                                Mauricienne (OCAM), considérant le développement continu et accéléré de l’informatique
                                dans le monde et la nécéssité de disposer d’un personnel qualifié en nombre suffisant pour
                                faire face à ce développement de l’informatique, ont convenu dans le cadre de leur politique
                                de renforcement de la solidarité africaine de créer une école dénommée Institut Africain
                                d’Informatique (IAI) en vue de former le personnel informatique dont ils ont besoin.<br> <br>
                                L’institut Africain d’Informatique est une école supérieure en informatique. La convention
                                portant création de l’institut et les statuts y afférent ont été signés le 29 janvier 1972 à Fort
                                Lamy (actuel Ndjaména) en république du TCHAD. L’accord de siège entre l’IAI et le
                                GABON a été signé en janvier 1975. Il est par conséquent un établissement inter-Etats.<br> <br>
                                Dans l’optique d’approcher l’institut des pays membres et pour des soucis de performance
                                toujours plus accrue, le conseil d’administration de l’IAI a autorsisé la délocalisation du
                                premier cycle de l’institut dans les pays membres. C’est ainsi que l’IAI-Cameroun a été créé
                                en 1999, l’IAI-Niger en 2001, et l’IAI-Togo en 2002
                                 </span>
                            </h1>

                                <a class="inline-block px-7 py-3 mr-2 bg-gray-200 text-gray-700 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/admission" role="button">Demande d'Admission</a>
                                 <a class="inline-block px-7 py-3 bg-transparent text-white font-medium text-sm leading-snug uppercase rounded focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/contact" role="button">Contactez-nous</a>

                        </div>
                        <div class="mb-12 lg:mb-0 hidden">
                            <img
                                src="../img/IMG_9271.jpg"
                                class="w-full h-[80vh] rounded-lg shadow-lg"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
