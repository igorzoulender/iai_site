@extends("layouts.master")


@section('content')
<div>
    <div class="bg-no-repeat bg-center bg-cover w-full" style="background-image: url(https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
        <div class="h-[60vh] md:h-[60vh] w-full flex items-center justify-center">
            <div class="w-full h-full text-white bg-gray-700 bg-opacity-80 flex flex-col py-6 lg:py-0 gap-8 justify-center items-center">
                <div class="flex flex-col items-center px-4 gap-2 lg:gap-4 text-center">
                    <h1 class="text-white lg:text-5xl text-lg font-semibold lg:font-bold uppercase">Nos Formations </h1>
                    <span class="w-20 h-2 bg-[#b09d72]"></span>
                    <h1 class="mt-4 text-sm lg:text-xl text-center font-semibold lg:font-bold">Notre école informatique offre une large gamme de programmes de formation pour aider les étudiants à atteindre <br> leurs objectifs de carrière dans l'informatique.
                        Que vous soyez débutant ou que vous cherchiez à développer <br> vos compétences existantes, nous avons une option de formation qui vous conviendra.</h1>
                </div>

                <a href="/contact" class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] lg:mt-12 py-2 px-2 lg:px-8">
                    <p class="font-semibold lg:font-bold lg:text-xl">Nous Contacter</p>
                </a>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-12 mb-8 lg:my-16 flex flex-col items-center">
        <div class="flex flex-col items-center justify-center w-full lg:w-2/3">
            <h2 class="lg:text-lg lg:text-3xl text-md font-semibold lg:font-bold text-green-800 text-center p-2  mb-4 uppercase">LES FORMATIONS ET CERTIFICATIONS QUE NOUS PROPOSONS A NOS FUTUR CADRE.</h2>
            <span class="text-gray-700 px-6 text-justify lg:text-xl text-md">
                <p class="mb-4">
                    Nos programmes de formation sont conçus par des professionnels expérimentés de l'industrie et mis à jour régulièrement pour refléter les dernières technologies et tendances du marché. Nous proposons des cours en classe, en ligne et en mode hybride pour s'adapter aux besoins de chaque étudiant.

En plus de notre programme de formation de base, nous offrons également des cours de perfectionnement et des certifications professionnelles pour aider nos diplômés à se démarquer sur le marché du travail.
                </p>
            </span>
        </div>
    </div>



<!--    List formations-->
    <div class="md:mt-24 md:pb-16 px-4 lg:px-6 flex w-full bg-[#EEE6D8] pt-20">
        <section class="mb-12 md:mb-32 text-gray-800 text-center md:text-left">
            <div class="grid md:grid-cols-2 gap-x-6 md:gap-x-2 items-center mb-10 md:mb-20">
                <div class="mb-6 md:mb-0">
                    <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-lg relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg"
                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img src="https://img.freepik.com/photos-gratuite/formateur-expliquant-details-du-logiciel-au-nouvel-employe_74855-1666.jpg?"
                             class="w-full h-[45vh]" alt="Louvre" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                 style="background-color: rgba(251, 251, 251, 0.2)">
                            </div>
                        </a>
                    </div>

                </div>
                <a href="/formation/formation-modulaires" class="mb-6 md:mb-0 h-full w-full hover:opacity-80">
                    <div class="lg:py-8 md:py-8 lg:px-6  h-full">
                        <h3 class="text-md lg:text-4xl text-red-600 uppercase font-bold mb-6">Formation modulaire</h3>
                        <div class="flex justify-center md:justify-start">
                            <div class="w-32 h-2 bg-gradient-to-r from-red-600 via-white to-green-800 mb-6"></div>
                        </div>
                        <div class="mb-3 py-2 px-2 lg:py-2 lg:px-4 bg-red-600 text-white font-medium text-sm rounded-lg inline-flex items-center gap-4 justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="lg:text-xl text-md uppercase font-semibold">3 FILIERES</p>
                        </div>
                        <p class="text-gray-700 uppercase font-bold lg:text-lg text-md lg:mb-6 mb-2">
                            <small>INFORMATION SUR LA FORMATION MODULAIRE</small>
                        </p>
                        <p class="text-black text-md text-justify lg:text-base font-semibold">
                            Une formation modulaire est une formation dont le programme peut être décomposé en un
                            nombre déterminé de modules. un module est une partie de la formation qui présente
                            suffisamment de cohérence pour en constituer une partie détachable. La cohérence tient au
                            fait que le module est composé d’objectifs propres identifiés, d’un contenu spécifique, d’une
                            évaluation et qu’il vise une compétence ou un ensemble de compétences liées. <br>
                        </p>

                        <div
                            class=" items-center inline-flex justify-start mt-6 bg-green-800 rounded w-fit-content">
                            <button class="text-center text-lg text-white font-semibold my-1 mx-2">Plus de détail
                            </button>
                        </div>

                    </div>


                </a>

            </div>

            <div class="grid md:grid-cols-2 gap-x-6 md:gap-x-2 items-center mb-10 md:mb-20">
                <div class="mb-6 md:mb-0 md:order-2">
                    <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-lg relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg"
                         data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img src="https://img.freepik.com/photos-gratuite/certificat-fin-etudes-roule_23-2148769714.jpg?w=1380&t=st=1666887284~exp=1666887884~hmac=0813a0d84aa74c2a0d0e76eec9db52798a1abcebd57928bd2f1e6180b5877d6f"
                             class="w-full h-[45vh]" alt="Louvre" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                 style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                    </div>
                </div>
                <a href="/formation/formation-certifiants" class="mb-6 md:mb-0 h-full w-full md:order-1 hover:opacity-80">
                    <div class="lg:py-8 md:py-16 lg:px-6 h-full py-2 px-2">
                        <h3 class="text-md lg:text-4xl text-red-600 uppercase font-bold mb-6">Formation certifiante</h3>
                        <div class="flex justify-center md:justify-start">
                            <div class="w-32 h-2 bg-gradient-to-r from-red-600 via-white to-green-800 mb-6"></div>
                        </div>
                        <div class="mb-3 py-2 px-2 lg:py-2 lg:px-4 bg-red-600 text-white font-medium text-sm rounded-lg inline-flex items-center gap-4 justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="lg:text-xl text-md  uppercase font-semibold">3 CERTIFICATIONS</p>
                        </div>
                        <p class="text-gray-700 uppercase font-bold lg:text-lg text-md lg:mb-6 mb-2">
                            <small>INFORMATION SUR LES CERTIFICATIONS</small>
                        </p>
                        <p class="text-black text-justify lg:text-base md:text-base font-semibold">
                            A côté des diplômes bien connus de tous, il existe des formations très opérationnelles et
                            généralement plus courtes qui débouchent sur un certificat ou un titre professionnel.
                            Mais qu’est ce qu’une formation certifiante ? Souvent moins chères que les formations
                            diplômantes, les formations certifiantes sont appréciées des recruteurs et très valorisées sur un
                            CV car leur enseignement est en lien direct avec les besoins des entreprises d’une branche
                            donnée.C’est là leur force, mais aussi leur faiblesse car de ce fait elles restent dédiées à un
                            métier précis.
                        </p>

                        <div
                        class=" items-center inline-flex justify-start mt-6 bg-green-800 rounded w-fit-content">
                        <button class="text-center text-lg text-white font-semibold my-1 mx-2">Plus de détail
                        </button>
                    </div>

                    </div>
                </a>
            </div>
            <div class="grid md:grid-cols-2 gap-x-6 md:gap-x-2 items-center mb-10 md:mb-20">
                <div class="mb-6 md:mb-0">
                    <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-lg relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg"
                         data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img src="https://img.freepik.com/photos-gratuite/etudiant-afro-americain-serieux-travaillant-recherche_74855-1219.jpg?w=1380&t=st=1666885752~exp=1666886352~hmac=35a33eefaf30092ceb75c4450386ec58d9a0a3f26198a3b3b6eef8c82cf48ec3"
                             class="w-full h-[45vh]" alt="Louvre" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                 style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                    </div>
                </div>
                <a href="/formation/formation-alternances" class="mb-6 hover:opacity-80 md:mb-0 h-full w-full">
                    <div class="py-8 md:py-16 px-6 h-full">
                        <h3 class="text-md lg:text-4xl text-red-600 uppercase font-bold mb-6">Formation par alternance</h3>
                        <div class="flex justify-center md:justify-start">
                            <div class="w-32 h-2 bg-gradient-to-r from-red-600 via-white to-green-800 mb-6"></div>
                        </div>
                        <div class="mb-3 py-2 px-4 bg-red-600 text-white font-medium text-sm rounded-lg inline-flex items-center gap-4 justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="lg:text-xl text-md uppercase font-semibold">1 FILIERES</p>
                        </div>
                        <p class="text-gray-700 uppercase font-bold lg:text-lg text-md lg:mb-6 mb-2">
                            <small>INFORMATION SUR LA FORMATION ALTERNANCE </small>
                        </p>
                        <p class="text-black text-justify lg:text-base text-md font-semibold">
                            Cette autre forme de formation permet aux personnes qui sont déjà dans la vie active de
                            pouvoir continuer à se former pour améliorer leurs compétences et de s’adapter aux nouvelles
                            technologies, pratiques ou méthodes appliqués en entreprise. Aussi, elle permet la
                            reconversion professionnelle.
                        </p>
                        <div
                            class="inline-flex items-center justify-start mt-6 bg-green-800 rounded w-fit-content">
                            <button class="text-center text-lg text-white font-semibold my-1 mx-2">Plus de détail

                            </button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid md:grid-cols-2 gap-x-6 md:gap-x-2 items-center">
                <div class="mb-6 md:mb-0 md:order-2">
                    <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-lg relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg"
                         data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                             class="w-full h-[45vh]" alt="Louvre" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                 style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                    </div>
                </div>
                <a href="/formation/formation-continues" class="mb-6 md:mb-0 h-full w-full md:order-1 hover:opacity-80">
                    <div class="py-8 md:py-16 px-6 h-full">
                        <h3 class="text-2xl lg:text-4xl text-red-600 uppercase font-bold mb-6">Formation continue</h3>
                        <div class="flex justify-center md:justify-start">
                            <div class="w-32 h-2 bg-gradient-to-r from-red-600 via-white to-green-800 mb-6"></div>
                        </div>
                        <div class="mb-3 py-2 px-4 bg-red-600 text-white font-medium text-sm rounded-lg inline-flex items-center gap-4 justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-xl uppercase font-semibold">3 FILIERES</p>
                        </div>
                        <p class="text-gray-700 uppercase font-bold text-lg mb-6">
                            <small>INFORMATION SUR LA FORMATION CONTINUE</small>
                        </p>
                        <p class="text-black text-justify text-base md:text-base font-semibold">
                            L’offre de formation continue de l’Institut Africain d’Informatique, Représentation du Togo
                        concerne tous les publics sans condition d’âge ou de niveau d’études : salariés, travailleurs
                        indépendants, professions libérales, étudiants, demandeurs d’emploi, retraités, particuliers.
                        </p>

                        <div
                            class="inline-flex items-center justify-start mt-6 bg-green-800 rounded w-fit-content">
                            <button class="text-center text-lg text-white font-semibold my-1 mx-2">Plus de détail

                            </button>
                        </div>


                    </div>
                </a>
            </div>
        </section>
    </div>

    <div class="bg-[#fbef8b] hidden flex flex-col lg:flex-row lg:flex-wrap text-white px-4 lg:px-20">
        <div class="text-black py-6 px-20 text-center lg:text-left">
            <h1 class="text-xl lg:text-4xl font-semibold mb-2 uppercase">PLUS DE DETAIL SUR LA FORMATION</h1><br>
            <p class="text-lg lg:text-xl text-gray-800">Si vous êtes intéressé par une carrière dans l'informatique, n'hésitez pas à explorer nos différentes options de formation et à contacter notre équipe d'admission pour en savoir plus sur les étapes nécessaires pour vous inscrire.</p><br>
            <div class="mt-12 pb-6 pt-4 lg:mt-0">
                <a class="inline-block  px-7 py-3 bg-red-600 text-white font-bold text-sm leading-snug uppercase rounded focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/contact" role="button">Contactez-nous</a>
            </div>
        </div>
    </div>

    <section class="bg-white px-4 md:px-6 lg:px-0">
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
    </section>

</div>
@endsection
