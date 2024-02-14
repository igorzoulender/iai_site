@extends("layouts.master")


@section('content')
    <div class="relative">
        <div class="bg-no-repeat bg-center bg-cover w-full" style="background-image: url(https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
            <div class="h-[50vh] md:h-[60vh] w-full flex items-center justify-center">
                <div class="w-full h-full text-white bg-gray-700 opacity-80 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                    <div class="flex flex-col items-center px-4 gap-4 text-center">
                        <h1 class="text-white lg:text-5xl text-lg font-bold uppercase">Formation Modulaires</h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="text-xl text-center font-bold">Notre école d'informatique est fière de vous proposer une formation modulaire de qualité qui vous permettra de développer vos compétences et <br> de vous lancer dans une carrière passionnante dans le domaine de l'informatique.</h1>
                    </div>

                    <a href="#" class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-12 py-4 px-8">
                        <p class="font-bold text-xl">Nous Contacter</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-16 mb-8 lg:my-16 hidden lex flex-col items-center">
            <div class="flex flex-col items-center justify-center w-full lg:w-2/3">
                <h2 class="text-lg lg:text-3xl font-semibold lg:font-bold text-green-800 text-center p-2  mb-4 uppercase">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper auctor erat ut ullamcorper.</h2>
                <span class="text-gray-700 px-6 text-justify text-md md:text-xl">
                <p class="mb-4 leading-snug">
                    A côté des diplômes bien connus de tous, il existe des <strong>formations très opérationnelles et généralement plus courtes</strong> qui débouchent sur un certificat ou un titre professionnel. <br>
                        Mais qu’est ce qu’une <strong>formation certifiante</strong> ? Souvent moins chères que les formations diplômantes, les formations certifiantes sont <strong>appréciées des recruteurs et très valorisées sur un CV</strong> car leur enseignement est en lien direct avec les besoins des entreprises d’une branche donnée. C’est là leur force, mais aussi leur faiblesse car de ce fait elles restent dédiées à un métier précis. La formation certifiante n’est donc pas adapté à quelqu’un qui cherche des compétences transversales lui permettant d’évoluer dans plusieurs secteurs d’activité.
                        L’Académie CISCO Locale de l’IAI-TOGO offre trois curricula. <br>

                        Tous ces cours sont accessibles via Internet. Chaque module <strong> CCNA, l’IT Essentials ou le CCNA Security</strong> comprend un certain nombre de chapitres et de nombreux travaux pratiques permettant aux participants de mettre en oeuvre l’ensemble des notions abordées. Il s’agit des cours à suivre dans le but de passer les certifications.
                </p>
            </span>
            </div>
        </div>


        <!--    List formations-->
        <div class="flex flex-col mb-32 mt-16">

            <div class="mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <h2 class="max-w-lg text-gray-900 text-center mb-6 font-sans text-3xl font-bold leading-none tracking-tight sm:text-4xl md:mx-auto">
                    FORMATIONS MODULAIRES
                </h2>

            </div>

            <div class="container mx-auto px-4 lg:px-0">
                <div class="flex items-start justify-center gap-12">

                    <div class="lg:w-1/3 flex flex-col items-center justify-center hover:bg-stone-200 rounded duration-500">
                        <img class="w-full h-[20vh] rounded" src="https://images.unsplash.com/photo-1610563166150-b34df4f3bcd6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1076&q=80" alt="formation-image">
                        <div class="p-4 lg:p-6 flex flex-col gap-5 text-center">
                            <h1 class="text-xl lg:text-3xl text-red-600 font-bold uppercase">Technologie web</h1>
                            <p class="text-lg  text-justify lg:text-xl text-gray-700 leading-snug">Concevoir la mise en page de sites web en tenant compte des critères ergonomiques, du
                                référencement et de l’accessibilité ;
                                Réaliser un site Web dynamique ;
                                Configurer et/ou adapter des systèmes de gestion de contenus ;
                                Rendre le site Web plus dynamique ;
                                Faire intéresser le public au site Web de l’entreprise.
                            </p>
                        </div>
                    </div>

                    <div class="lg:w-1/3 flex flex-col items-center justify-center hover:bg-stone-200 rounded duration-500">
                        <img class="w-full h-[20vh] rounded" src="https://media.istockphoto.com/id/171588907/photo/multiple-television-screens-in-blue-tones.jpg?s=612x612&w=0&k=20&c=5YqXFNKR6L1f5GjIxNtheoMIQ3xyHy-6v6K4QOzO8Mg=" alt="formation-image">
                        <div class="p-4 lg:p-6 flex flex-col gap-5 text-center">
                            <h1 class="text-xl lg:text-3xl text-red-600 font-bold uppercase">Multimédia</h1>
                            <p class="text-xl text-justify text-gray-700 text-center leading-snug">Concevoir une animation pour le Web ou pour l’affichage dynamique ;
                                Réaliser une animation en 2D (deux dimensions) et 3D;
                                Réaliser des séquences d’animation vectorielles interactives en 2D et 3D pour rendre plus
                                attractif le portail d’information de l’entreprise ;
                                Renforcer la communication ;
                                Rendre le personnel plus actif et plus motivé pour la promotion de l’entreprise.
                            </p>
                        </div>
                    </div>

                    <div class="lg:w-1/3 flex flex-col items-center justify-center hover:bg-stone-200 rounded duration-500">
                        <img class="w-full h-[20vh] rounded" src="http://res.cloudinary.com/arinfo-la-roche/image/upload/v1621968742/iajs0ltwch6fom1oafs5.jpg" alt="formation-image">
                        <div class="p-4 lg:p-6 flex flex-col gap-5 text-center">
                            <h1 class="text-xl lg:text-3xl text-red-600 font-bold uppercase">Infographie</h1>
                            <p class="text-xl text-justify text-gray-700 leading-snug">Préparer la production et les médias (texte, images fixes ou animées…) pour une meilleure
                                visibilité de l’entreprise ;
                                Réaliser des graphismes et illustrations fixes élaborés ;
                                Réaliser des photomontages complexes ;
                                Concevoir et mettre en page des documents imprimés simples ;
                                Assurer une veille technique et technologique d’une entreprise ou d’un service.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
