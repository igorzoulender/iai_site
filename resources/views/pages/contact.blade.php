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
    <div class="">
        <div class="bg-no-repeat bg-center bg-cover w-full"
             style="background-image: url(https://images.unsplash.com/photo-1587560699334-bea93391dcef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
            <div class="h-[50vh] md:h-[60vh] w-full flex items-center justify-center">
                <div
                    class="w-full h-full text-white bg-gray-700 bg-opacity-80 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                    <div class="flex flex-col items-center px-4 gap-4 text-center">
                        <h1 class="text-white lg:text-5xl text-lg font-bold uppercase">Contact</h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="md:text-xl text-lg text-center font-bold">
                            Nous avons une équipe dévoués et une communauté
                            dynamique qui sont prêts à <br> vous soutenir tout au long de
                            votre parcours scolaire.
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#EEE6D8]">
            <div class="container pt-24 pb-12 px-4 mx-auto relative">
                <section class="lg:mb-20 text-gray-800 text-center">
                    <div class="lg:py-12 md:px-12">
                        <div class="container mx-auto xl:px-32">
                            <div class="grid lg:grid-cols-2 flex items-center">
                                <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0" style="z-index: 100 !important;">
                                    <div
                                        class="block rounded-lg shadow-lg px-4 pb-6 md:py-12 md:px-12 lg:-mr-14"
                                        style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)"
                                    >
                                        <h2 class="text-3xl font-bold mb-12">Contactez-nous</h2>
                                        <form class="" method="POST" action="{{ route('contact.store') }}">
                                            @csrf
                                            <div class="form-group mb-6">
                                                <input
                                                    type="text"
                                                    name="name"
                                                    class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-800 focus:outline-none"
                                                    id="exampleInput7"
                                                    placeholder="Nom"
                                                />
                                            </div>
                                            <div class="form-group mb-6">
                                                <input
                                                    type="email"
                                                    name="email"
                                                    class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-800 focus:outline-none"
                                                    id="email"
                                                    placeholder="Adresse email"
                                                />
                                            </div>
                                            <div class="form-group mb-6">
                                         <textarea
                                             class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-800 focus:outline-none"
                                             id="Message"
                                             name="message"
                                             rows="3"
                                             placeholder="Message"
                                         ></textarea>
                                            </div>
                                            <div class="form-group form-check text-center mb-6">
                                                <input
                                                    type="checkbox"
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-green-800 checked:border-green-800 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                                    id="exampleCheck87"
                                                    checked
                                                />
                                                <label class="form-check-label inline-block text-gray-800"
                                                       for="exampleCheck87"
                                                >Envoyez-moi une copie de ce message</label
                                                >
                                            </div>
                                            <button
                                                type="submit"
                                                class="w-full px-6 py-2.5 bg-green-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:shadow-lg focus:bg-green-700 focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out"
                                            >
                                                Envoyer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="md:mb-12 lg:mb-0">
                                    <div
                                        class="md:h-[700px] h-[70vh] relative shadow-lg rounded-lg border border-gray-300">
                                        <iframe class=" w-full h-full rounded-lg"
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0391202929986!2d1.2085792754071871!3d6.125438004541796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10215f618ff4057f%3A0x283893dcd5d0ac3b!2sIAI%20-%20TOGO!5e0!3m2!1sfr!2stg!4v1667300695200!5m2!1sfr!2stg"
                                                style="border:0;" allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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

