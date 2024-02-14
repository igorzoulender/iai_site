@extends("layouts.master")


@section('content')
    <div>
        <div class="bg-no-repeat bg-center bg-cover w-full" style="background-image: url(https://images.unsplash.com/photo-1503676382389-4809596d5290?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1476&q=80)">
            <div class="h-[60vh]  w-full flex items-center justify-center">
                <div class="w-full h-full text-white bg-gray-700 bg-opacity-80 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                    <div class="flex flex-col items-center gap-4 px-4 text-center">
                        <h1 class="text-white lg:text-5xl text-lg font-bold uppercase">Admission à IAI-Togo</h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="lg:text-xl font-semibold lg:font-bold text-center">Notre école informatique est ouverte aux étudiants de tous les niveaux et de tous les horizons. <br> Nous croyons que la diversité de nos étudiants est l'une de nos forces et  nous sommes <br> impatients de vous aider à réussir dans votre parcours académique.</h1>
                    </div>

                    <a href="/formulaire" class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-4 lg:mt-12 py-4 px-4 lg:px-8">
                        <p class="font-semibold lg:font-bold lg:text-xl">Faire une demande d'admission</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-[#bcaa78]">
            <div class="text-white py-6 px-20 text-center lg:text-left">
                <h1 class="text-xl lg:text-4xl font-semibold mb-2 uppercase">Admission</h1>
                <p class="text-lg lg:text-xl">La réalisation de votre projet d’études commence ici.</p>
            </div>
            <div class="bg-[#b09d72] flex flex-col lg:flex-row lg:flex-wrap text-white px-4 lg:px-20">
                <a href="/formations" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">1</span>
                    <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                        <p>Trouvez <br class="hidden lg:block"> votre programme</p>
                    </div>
                </a>

                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <a href="/dossiers" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">2</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Préparez <br class="hidden lg:block"> votre dossier</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">3</span>
                    <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                        <p>Déposez <br class="hidden lg:block"> votre demande</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <a href="/test" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center  border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">4</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Passez <br class="hidden lg:block"> le test écrit</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <a href="http://www.iai-togo.tg/wp-content/uploads/2022/07/RESULTATS_2022.pdf" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center  border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">5</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Consultez <br class="hidden lg:block"> des résultats</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center lg:border-b-0 pb-4">
                    <a href="/inscriptions" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">6</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Inscription <br class="hidden lg:block"> définitive</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="bg-white mb-12 mt-20 px-4 pb-12">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                    <div class="w-full lg:w-1/2 flex flex-col lg:border border-red-600 p-2 lg:p-6">
                        <h1 class="text-xl lg:text-2xl xl:text-3xl text-center font-bold uppercase text-red-600 mb-6 underline underline-offset-6">Concours d'entrée à l'IAI</h1>
                        <span class="md:leading-loose text-base lg:text-lg text-gray-700">
                            <p class="text-justify"> <strong>Le Ministre de la Planification du Développement et de la Coopération</strong> porte à la connaissance du public qu’il est ouvert en session unique un concours
                                d’entrée en 1ère année du Cycle « <strong>Ingénieur Concepteur en Informatiques</strong> » de l'Institut Africain d'Informatique (IAI) de Libreville au Gabon.
                                Le concours se déroulera <strong>le jeudi 28 juillet 2022 à partir de 08 heures au Centre National d’Etudes et de Traitements Informatiques (CENETI) à Lomé.</strong>
                                Les dossiers de candidature sont à déposer au secrétariat de l'IAI-Togo au plus tard le mardi 26 juillet 2022 à 17 heures.
                            </p>
                            <p class="font-semibold">Le concours comportera les épreuves écrites suivantes :</p>
                            <div class="flex flex-col gap-4 mt-8 lg:mt-6">
                                <div class="p-4 bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline">Anglais</span>
                                    <span class="font-semibold text-lg uppercase">Durée: 2 heures</span>
                                    <span class="font-semibold text-lg uppercase">Coefficient: 3</span>
                                </div>
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline">Mathématiques</span>
                                    <span class="font-semibold text-lg uppercase">Durée: 4 heures</span>
                                    <span class="font-semibold text-lg uppercase">Coefficient: 6</span>
                                </div>
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg text-center lg:text-left underline uppercase lg:no-underline">Techniques d’expression française</span>
                                    <span class="font-semibold text-lg uppercase">Durée: 2 heures</span>
                                    <span class="font-semibold text-lg uppercase">Coefficient: 2</span>
                                </div>
                            </div>
                            <p class="mt-6 text-center">
                                Télechargez <a href="#" class="text-red-600 font-semibold hover:underline underline-offset-6">Le Communiqué</a> et <a href="#" class="text-red-600 font-semibold hover:underline underline-offset-6"> Les termes de référence.</a>
                            </p>
                        </span>
                    </div>

                    <div class="w-full lg:w-1/2 flex flex-col lg:border border-red-600 p-2 lg:p-6">
                        <h1 class="text-xl lg:text-2xl xl:text-3xl text-center font-bold uppercase text-red-600 mb-6 underline underline-offset-6">Concours d'entrée à l'IAI-Togo</h1>
                        <span class="md:leading-loose text-base lg:text-lg text-gray-700">
                            <p class="text-justify">
                                Le Ministre de la Planification du Développement et de la Coopérationporte à la connaissance du public qu’il est ouvert en session unique
                                un concours d’entrée en 1ère année du Cycle « <strong> Ingénieur des Travaux Informatiques et Licence Professionnelle</strong> » options <strong> de l’Institut Africain d’Informatique, Représentation du Togo (IAI-TOGO)</strong>.
                            </p>
                            <p>Les dossiers de candidature sont à déposer dans les centres d'écrit au plus tard le mercredi 31 août 2A22 à 17H00. Date du concours (session unique) : mardi 06 sentembre 2022 àt 07h00</p>
                            <p>Le concours se déroulera dans les centres d’écrit suivants :
                               <strong>Centre National d’Etudes et de Traitements Informatiques (CENETI) à Lomé,
                                Lycée de Kara 1 (Kara) à Lama Kara (Préfecture de la Kozah).</strong>
                            </p>
                            <p class="font-semibold">
                                Le concours comportera les épreuves écrites suivantes :
                                Pour les deux (2) options:
                            </p>
                            <div class="flex flex-col gap-4 mt-8 lg:mt-6">
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline">Anglais</span>
                                    <span class="font-semibold text-lg uppercase">Durée: 2 heures</span>
                                    <span class="font-semibold text-lg uppercase">Coefficient: 3</span>
                                </div>
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline">Mathématiques</span>
                                    <span class="font-semibold text-lg uppercase">Durée: 4 heures</span>
                                    <span class="font-semibold text-lg uppercase">Coefficient: 6</span>
                                </div>
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline text-center lg:text-left">Techniques d’expression française</span>
                                    <span class="font-semibold text-lg uppercase">Durée: 2 heures</span>
                                    <span class="font-semibold text-lg uppercase">Coefficient: 2</span>
                                </div>
                            </div>
                            <p class="mt-6 text-center">
                                Télechargez <a href="#" class="text-red-600 font-semibold hover:underline underline-offset-6">Résultat Du Concours d'Entrée à L'IAI-Togo 2022</a>
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#fbef8b] gap-4 flex flex-col lg:flex-row lg:flex-wrap text-white px-2 lg:px-20">
            <div class="text-black lg:py-6 lg:px-20 px-2 py-2 lg:text-center text-justify lg:text-left">
                <h1 class="text-2xl lg:text-4xl font-semibold mb-2 uppercase">POUR PLUS D'INFORMATION</h1>
                <p class="lg:text-center text-justify lg:text-xl text-gray-800 ">Si vous avez des questions sur le processus d'admission ou si vous souhaitez en savoir plus sur nos programmes de formation, n'hésitez pas à nous contacter. Nous sommes impatients de vous aider à démarrer votre carrière dans le secteur de l'ingénerie informatique.</p>
                <div class="mt-4 lg:pb-3 lg:pt-8 lg:mt-0 flex justify-center pb-3 ">
                    <a class="inline-block  lg:px-7 lg:py-3 px-2 py-2 mr-2 bg-green-800 text-white font-bold text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/admission" role="button">Demande d'Admission</a>
                    <a class="inline-block  lg:px-7 lg:py-3 px-2 py-2 ml-4 bg-red-600 text-white font-bold text-sm leading-snug uppercase rounded focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/contact" role="button">Contactez-nous</a>
                </div>
            </div>
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
                <div class="lg:px-6 lg:py-12 px-2 py-2 md:px-12 lg:text-left">

                    <div class="grid lg:grid-cols-2 lg:gap-10 gap-4 text-center flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="lg:text-7xl text-4xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-8" style="color: hsl(218, 81%, 95%);">IAI-TOGO<br>
                                <span class="text-2xl lg:text-5xl" style="color: hsl(218, 81%, 75%);">La formation continue est encouragée pour rester à jour avec les technologies actuelles.</span></h1>
                            <a class="inline-block px-7 py-3 mr-2 bg-gray-200 text-gray-700 font-bold lg:text-sm  leading-snug uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/formations" role="button">VOTRE FORMATION</a>

                        </div>
                        <div class="mb-12 lg:mb-0">
                            <img
                                src="../img/IMG_9271.jpg"
                                class="w-full h-[80vh] rounded-lg shadow-lg"
                                alt=""
                            />
                        </div>
                    </div>

                </div>
        </section>
    </div>
@endsection
