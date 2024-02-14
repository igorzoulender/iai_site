@extends("layouts.master")


@section('content')
    <div class="">
        <div class="bg-no-repeat bg-center bg-cover w-full" style="background-image: url(https://images.unsplash.com/photo-1515165616480-efd71925068f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
            <div class="h-[50vh] md:h-[60vh] w-full flex items-center justify-center">
                <div class="w-full h-full text-white bg-gray-700 bg-opacity-80 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                    <div class="flex flex-col items-center gap-4 px-4 text-center">
                        <h1 class="text-white lg:text-5xl text-lg font-bold uppercase">Actualités</h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="lg:text-xl font-bold text-center">
                            L'IAI-TOGO prépare les étudiants à des carrières dans l'industrie
                            de l'informatique, en leur offrant une solide base de connaissances théoriques <br>
                            et pratiques en programmation, en réseaux informatiques, en bases de données,
                            en développement web, <br> et dans d'autres domaines liés à l'informatique.
                        </h1>
                    </div>

                    <a href="#" class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-12 py-4 px-8">
                        <p class="font-bold text-xl">Faire une demande d'admission</p>
                    </a>
                </div>
            </div>
        </div>

        <!--News & Events sections-->
        @include('partials.blog')


    </div>
@endsection
