@extends("layouts.master")

@section('head')
    p {
    color: #fff;
    font-family: Avenir Next, Helvetica Neue, Helvetica, Tahoma, sans-serif;
    font-size: 1em;
    font-weight: 700;
    }
    p span {
    display: inline-block;
    position: relative;
    transform-style: preserve-3d;
    perspective: 500;
    -webkit-font-smoothing: antialiased;
    }
    p span::before,
    p span::after {
    display: none;
    position: absolute;
    top: 0;
    left: -1px;
    transform-origin: left top;
    transition: all ease-out 0.3s;
    content: attr(data-text);
    }
    p span::before {
    z-index: 1;
    color: rgba(0,0,0,0.2);
    transform: scale(1.1, 1) skew(0deg, 20deg);
    }
    p span::after {
    z-index: 2;
    color: #166534;
    text-shadow: -1px 0 1px #684da3, 1px 0 1px rgba(0,0,0,0.8);
    transform: rotateY(-40deg);
    }
    p span:hover::before {
    transform: scale(1.1, 1) skew(0deg, 5deg);
    }
    p span:hover::after {
    transform: rotateY(-10deg);
    }
    p span + span {
    margin-left: 0.3em;
    }
    @media (min-width: 20em) {
    p {
    font-size: 2em;
    }
    p span::before,
    p span::after {
    display: block;
    }
    }
    @media (min-width: 30em) {
    p {
    font-size: 3em;
    }
    }
    @media (min-width: 40em) {
    p {
    font-size: 5em;
    }
    }
    @media (min-width: 60em) {
    p {
    font-size: 8em;
    }
    }
    html,
    body {
    margin: 0;
    padding: 0;
    height: 100%;
    }
    body {
    display: row;
    align-items: center;
    justify-content: center;
    background-color: #684da3;
    }

@endsection

@section('content')
    <div>
        <div class="bg-no-repeat bg-center bg-cover w-full" style="background-image: url(https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
            <div class="h-[60vh] w-full flex items-center justify-center">
                <div class="w-full h-full text-white bg-gray-700 bg-opacity-80 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                    <div class="flex flex-col items-center gap-4 text-center">
                        <h1 class="text-white lg:text-5xl text-lg font-bold uppercase">Galerie</h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="text-xl font-bold">
                            Ici, vous pourrez découvrir l'ambiance de notre école au quotidien.
                            Que ce soit en classe, lors d'activités <br> pédagogiques ou de loisirs,
                            vous pourrez voir nos élèves et enseignants en action.
                        </h1>
                    </div>

                    <a href="/contact" class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-12 py-4 px-8">
                        <p class="font-bold text-xl">Nous Contacter</p>
                    </a>
                </div>
            </div>
        </div>


        <div class="">
            <div class=" mx-auto">
                <div class="bg-stone-200">
                    <div class="pt-20 flex flex-col items-center justify-center">
                        <div class="xl:w-1/2 w-11/12">
                            <h1 role="heading" tabindex="0" class="text-6xl font-bold 2xl:leading-10 leading-0 text-center text-gray-800">Activités pédagogiques</h1>
                            <h2 role="contentinfo" tabindex="0" class="text-base leading-normal text-center text-gray-600 mt-5">
                                Nous espérons que ces images vous donneront un aperçu de
                                la vie à notre école et vous donneront envie de nous rejoindre.
                            </h2>
                        </div>

                        <div class="2xl:px-20 lg:px-0 px-4 flex justify-center w-full flex-wrap items-start mt-4">
                            <div class="mt-24">
                                <div class="flex items-end w-full gap-2 md:gap-0">
                                    <img tabindex="0" src="/img/gallerie/galerie7.jpg" alt="girl with blue background" class="md:w-20 md:h-20 w-1/2 rounded-lg md:mr-6" />
                                    <img tabindex="0" src="/img/gallerie/galerie20.jpg" alt="guy winking" class="md:w-48 md:h-36 w-1/2 rounded-lg" />
                                </div>
                                <div class="flex items-center justify-end my-6">
                                    <img tabindex="0" src="/img/gallerie/galerie8.jpg" class="md:w-52 md:h-52 w-full rounded-lg" alt="guy smiling" />
                                </div>
                                <div class="flex gap-2 md:gap-0 items-start">
                                    <img tabindex="0" src="/img/gallerie/galerie11.jpg" alt="girl with bluw background" class="md:w-48 md:h-48 w-1/2 rounded-lg" />
                                    <img tabindex="0" src="/img/gallerie/galerie7.jpg" alt="guy with glasses" class="md:w-20 md:h-20 w-1/2 rounded-lg md:ml-6 flex-shrink-0 object-cover object-fit" />
                                </div>
                            </div>
                            <div class="md:ml-6 mt-6 md:mt-32">
                                <img tabindex="0" src="/img/gallerie/galerie23.jpg" class="md:w-72 w-full md:h-80 rounded-lg" alt="guy with sunglasses" />
                                <div class="flex gap-2 md:gap-0 items-start mt-6">
                                    <img tabindex="0" src="/img/gallerie/galerie2.jpg" alt="girl  laughing" class="md:w-48 md:h-48 w-1/2 rounded-lg" />
                                    <img tabindex="0" src="/img/gallerie/galerie9.jpg" alt="guy with glasses" class="md:w-20 md:h-20 w-1/2 rounded-lg ml-0 md:ml-6 object-cover object-fit" />
                                </div>
                            </div>
                            <div class="md:mt-14 mt-6 md:ml-6">
                                <div class="lg:flex">
                                    <div>
                                        <img tabindex="0" src="/img/gallerie/galerie12.jpg" alt="group of friends" class="md:w-96 md:h-72 w-full rounded-lg object-center object-fit" />
                                    </div>
                                    <div>
                                        <div class="flex gap-2 md:gap-2 md:ml-6 mt-4 md:mt-0">
                                            <img tabindex="0" src="/img/gallerie/galerie19.jpg" class="md:w-20 md:h-20 w-1/2 rounded-lg md:mt-14" alt="man" />
                                            <img tabindex="0" src="/img/gallerie/galerie24.jpg" class="md:w-20 md:h-24 w-1/2 rounded-lg md:mt-4 md:ml-6" alt="woman" />
                                        </div>
                                        <img tabindex="0" src="/img/gallerie/galerie4.jpg" alt="boy with blonde hair" class="md:ml-6 mt-6 md:w-48 md:h-32 w-full rounded-lg" />
                                    </div>
                                </div>
                                <div class="mt-6 flex gap-2 md:gap-0">
                                    <img tabindex="0" class="md:w-48 md:h-48 w-full rounded-lg" src="/img/gallerie/galerie10.jpg" alt="young girl with red hair" />
                                    <img tabindex="0" class="hidden md:block md:w-72 md:h-56 w-1/2 rounded-lg md:ml-6" src="/img/gallerie/galerie18.jpg" alt="young girl with red hair" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pb-16">
                        <div class="container mx-auto text-center flex items-center justify-center">
                            <div class="flex flex-col justify-center items-center px-4 md:px-8">
                                <h1 class="pt-12 mb-12 text-4xl lg:text-5xl xl:text-6xl font-extrabold text-black">Vie sur le Campus</h1>
                                <h2 class="text-gray-600 text-lg mb-14">
                                    Nous sommes une école informatique qui croyons qu'il
                                    est important de trouver un équilibre entre le travail et le loisir.
                                    C'est pourquoi nous encourageons nos étudiants à explorer de nouvelles
                                    activités et passions en dehors de leurs études.
                                </h2>
                            </div>
                            <div class="flex flex-col gap-12">
                            </div>
                        </div>

                        <div class="mb-4 mt-6">
                            <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button class="uppercase inline-block p-4 rounded-t-lg border-b-2 border-transparent" id="allpersonnel-tab" data-tabs-target="#allpersonnel" type="button" role="tab" aria-controls="allpersonnel" aria-selected="false">Journées portes ouvertes</button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button class="uppercase inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="administration-tab" data-tabs-target="#administration" type="button" role="tab" aria-controls="administration" aria-selected="false">Google Developper Students Club</button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button class="uppercase inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="enseignants-tab" data-tabs-target="#enseignants" type="button" role="tab" aria-controls="enseignants" aria-selected="false">éducation sportive</button>
                                </li>
                                <li role="presentation">
                                    <button class="uppercase inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="representant_etudiant-tab" data-tabs-target="#representant_etudiant" type="button" role="tab" aria-controls="representant_etudiant" aria-selected="false">Comité des étudiants</button>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent">
                            <div class="hidden p-4 rounded-lg" id="allpersonnel" role="tabpanel" aria-labelledby="allpersonnel-tab">
                                <div class="container mx-auto">
                                    <div class="sm:flex gap-12 space-y-32 md:space-y-0 w-full items-center flex-wrap">
                                        <section class="overflow-hidden text-gray-700">
                                            <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                                                <div class="flex flex-wrap -m-1 md:-m-2">
                                                    <div class="flex flex-wrap w-1/2">
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie20.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie8.jpg">
                                                        </div>
                                                        <div class="w-full p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie11.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap w-1/2">
                                                        <div class="w-full p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie12.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie19.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie4.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="administration" role="tabpanel" aria-labelledby="administration-tab">
                                <div class="container mx-auto">
                                    <div class="sm:flex gap-12 space-y-32 md:space-y-0 w-full items-center xl:justify-between flex-wrap md:justify-around">
                                        <section class="overflow-hidden text-gray-700">
                                            <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                                                <div class="flex flex-wrap -m-1 md:-m-2">
                                                    <div class="flex flex-wrap w-1/2">
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie4.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie19.jpg">
                                                        </div>
                                                        <div class="w-full p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie12.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap w-1/2">
                                                        <div class="w-full p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie11.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie7.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie20.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="enseignants" role="tabpanel" aria-labelledby="enseignants-tab">
                                <div class="container mx-auto">
                                    <div class="sm:flex gap-12 space-y-32 md:space-y-0 w-full items-center xl:justify-between flex-wrap md:justify-around">
                                        <section class="overflow-hidden text-gray-700">
                                            <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                                                <div class="flex flex-wrap -m-1 md:-m-2">
                                                    <div class="flex flex-wrap w-1/2">
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie19.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie11.jpg">
                                                        </div>
                                                        <div class="w-full p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie12.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap w-1/2">
                                                        <div class="w-full p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie8.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie20.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie7.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="representant_etudiant" role="tabpanel" aria-labelledby="representant_etudiant-tab">
                                <div class="container mx-auto">
                                    <div class="sm:flex gap-12 space-y-32 md:space-y-0 w-full items-center xl:justify-between flex-wrap md:justify-around">
                                        <section class="overflow-hidden text-gray-700">
                                            <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                                                <div class="flex flex-wrap -m-1 md:-m-2">
                                                    <div class="flex flex-wrap w-1/2">
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie19.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie12.jpg">
                                                        </div>
                                                        <div class="w-full p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie11.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap w-1/2">
                                                        <div class="w-full p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie8.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie20.jpg">
                                                        </div>
                                                        <div class="w-1/2 p-1 md:p-2">
                                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                                 src="/img/gallerie/galerie7.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p aria-label="CodePen" class="flex justify-center ">
        <span data-text="I">I</span>
        <span data-text="A">A</span>
        <span data-text="I">I</span>
        <span data-text="-">-</span>
        <span data-text="T">T</span>
        <span data-text="O">O</span>
        <span data-text="G">G</span>
        <span data-text="O">O</span>
    </p>
@endsection
