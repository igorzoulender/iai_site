@extends("layouts.master")

@section('content')

    <div class="w-full  bg-center bg-cover" style="background-image: url(https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
        <div class=" w-full flex items-center justify-center">
            <div class="w-full h-full text-white bg-gray-700 bg-opacity-80 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                <div class="md:grid md:grid-cols-2 px-8 py-8 w-full lg:w-1/2">
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <form action="#" method="POST">
                                <div class="overflow-hidden shadow sm:rounded-lg">
                                    <div class="bg-gray-100 px-4 py-5 sm:p-6 mt-16 mb-16 rounded-lg">
                                        <div class=" flex flex-col">
                                            <h1 class="text-2xl text-black font-bold mb-8 flex justify-center">
                                                Formulaire d'inscription étudiants
                                            </h1>
                                            <hr>
                                            <h1 class="text-xl text-black mt-8">
                                                Remplissez soigneusement le formulaire d'inscription
                                            </h1>
                                        </div>

                                            <div class="flex flex-wrap -mx-3 mb-6 mt-8">
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-first-name">
                                                Prenom
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="prenom" type="text" placeholder="Prenom">

                                            </div>
                                            <div class="w-full md:w-1/3 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-last-name">
                                                Deuxieme prénom
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="deuxieme-prenom" type="text" placeholder="Deuxieme prenom">
                                            </div>
                                            <div class="w-full md:w-1/3 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-last-name">
                                                Nom de famille
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nom-de-famille" type="text" placeholder="Nom de famille">
                                            </div>
                                            </div>

                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-state">
                                                    SEXE
                                                    </label>
                                                    <div class="relative">
                                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                        <option>MASCULIN</option>
                                                        <option>FEMININ</option>
                                                    </select>
                                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="w-full md:w-1/6 px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-state">
                                                    MOIS
                                                    </label>
                                                    <div class="relative">
                                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                        <option>janvier</option>
                                                        <option>fevrier</option>
                                                        <option>mars</option>
                                                    </select>
                                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="w-full md:w-1/6 px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-state">
                                                    ANNEE
                                                    </label>
                                                    <div class="relative">
                                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                        <option>2000</option>
                                                        <option>2001</option>
                                                        <option>2002</option>
                                                    </select>
                                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="w-full md:w-1/6 px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-state">
                                                    JOUR
                                                    </label>
                                                    <div class="relative">
                                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-password">
                                                Adresse
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="adresse" type="text" placeholder="Adresse">

                                            </div>
                                            </div>

                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-first-name">
                                                        Ville
                                                    </label>
                                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="ville" type="text" placeholder="Ville">
                                                </div>

                                                <div class="w-full md:w-1/2 px-3">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-last-name">
                                                        Departement
                                                    </label>
                                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="departement" type="text" placeholder="Departement">
                                                </div>
                                            </div>

                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full px-3">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-password">
                                                        Code postal
                                                    </label>
                                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="adresse" type="text" placeholder="Code postal">

                                                </div>
                                            </div>

                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-1/2  px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="e-mail">
                                                        E-mail
                                                    </label>
                                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="e-mail" type="e-mail" placeholder="E-mail">

                                                </div>

                                                <div class="w-full md:w-1/2 px-3">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2" for="numero">
                                                        Numero de telephone
                                                    </label>
                                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="numero" type="numero" placeholder="Numéro de téléphone">
                                                </div>
                                            </div>

                                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-800 py-2 px-4 text-md font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Soumettre l'inscription</button>
                                            </div>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
