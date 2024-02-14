<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome');})->name('home');


Route::get('/a-propos', function () { return view('pages.about');})->name('about');

Route::get('/formulaire', function () { return view('pages.formulaire');})->name('formulaire');

Route::get('/test', function () { return view('pages.test');})->name('test');

Route::get('/inscriptions', function () { return view('pages.inscription');})->name('inscriptions');

Route::get('/dossiers', function () { return view('pages.dossier');})->name('dossiers');

Route::get('/formations', function () { return view('pages.formation');})->name('formations');

Route::get('/formations-modulaires', function () { return view('pages.formation-modulaire');});

Route::get('/formation/formation-modulaires', function () { return view('pages.formation-modulaire');});

Route::get('/formation/formation-certifiants', function () { return view('pages.formation-certifiante');});

Route::get('/formations-certifiantes', function () { return view('pages.formation-certifiante');});

Route::get('/formation/formation-alternances', function () { return view('pages.formation-alternance');});

Route::get('/formations-alternances', function () { return view('pages.formation-alternance');});

Route::get('/formation/formation-continues', function () { return view('pages.formation-continue');});

Route::get('/formations-continues', function () { return view('pages.formation-continue');});

Route::get('/admission', function () { return view('pages.admission');})->name('admission');

Route::get('/actualités', function () { return view('pages.actualite');})->name('actualites');

Route::get('/opportunités', function () { return view('pages.opportunites');})->name('opportunites');

Route::get('/gallerie', function () { return view('pages.gallerie');})->name('galerie');

Route::get('/contact', function () { return view('pages.contact'); })->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/administration', function () { return view('pages.administration'); })->name('administration');

