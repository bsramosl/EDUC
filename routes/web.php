<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [InicioController::class,'index'])->name('principal.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/principal',[InicioController::class,'index'])->name('principal.index');  

Route::get('principalcurso/{id}',[InicioController::class,'curso'])->name('principal.curso');  

Route::get('principalcursos',[InicioController::class,'cursos'])->name('principal.cursos');  

Route::get('principalpago',[InicioController::class,'pago'])->name('principal.pago');  

Route::get('principalperfil/{id}',[InicioController::class,'perfil'])->name('principal.perfil');
  
Route::get('principallearning/{id}',[InicioController::class,'learning'])->name('principal.learning');   

Route::get('regcurso/{id}',[InicioController::class,'registrocurso']) 
->name('principal.regcurso');

Route::get('infocurso/{id}',[InicioController::class,'infocurso']) 
->name('principal.infocurso');

Route::get('contacto',[InicioController::class,'contacto']) 
->name('principal.contacto');

Route::get('evento',[EventoController::class,'index']) 
->name('principal.evento');

Route::get('regevento/{id}',[EventoController::class,'regevento']) 
->name('principal.regevento');
   


Route::get('add-post', [PagoController::class, 'myPost']);
Route::post('submit-post', [PagoController::class, 'submitPost'])->name('postSubmit');

Route::get('eve-post', [PagoController::class, 'myPosteve']);
Route::post('eve-post', [PagoController::class, 'submitPosteve'])->name('evepostSubmit');

 




Route::get('dash',[AdminController::class,'dashboard'])
->name('admin.index');

Route::get('listuser',[UsuarioController::class,'listar'])
->name('tabla.listar');

Route::delete('delete/{id}',[UsuarioController::class,'delete'])
 
->name('usuario.delete'); 

Route::get('editar/{id}',[UsuarioController::class,'editarusuario'])
 
->name('usuario.editar'); 
 
Route::patch('edit/{id}',[UsuarioController::class,'editarusus'])
->name('usuario.edit'); 

Route::get('cursoregister',[CursoController::class,'create'])
->name('curso.register'); 

Route::post('save',[CursoController::class,'save'])
->name('curso.save'); 

Route::get('listcurso',[CursoController::class,'listar'])
->name('curso.listar'); 

Route::delete('cursodelete/{id}',[CursoController::class,'delete'])
->name('curso.delete'); 

Route::get('cursoeditar/{id}',[CursoController::class,'editarcurso'])
->name('curso.editar'); 
 
Route::patch('cursoedit/{id}',[CursoController::class,'editcurso'])->name('curso.edit'); 

Route::get('eventoregister',[EventoController::class,'create'])
->name('evento.register'); 

Route::post('eventosave',[EventoController::class,'save'])->name('evento.save'); 

Route::get('listevento',[EventoController::class,'listar'])
->name('evento.listar'); 

Route::delete('eventodelete/{id}',[EventoController::class,'delete'])
->name('evento.delete'); 

Route::get('eventoeditar/{id}',[EventoController::class,'editarevento'])
->name('evento.editar'); 
 
Route::patch('eventoedit/{id}',[EventoController::class,'editevento'])->name('evento.edit'); 








Route::get('pagoregister',[PagoController::class,'create'])
->name('pago.register'); 


Route::get('listpago',[PagoController::class,'listar'])
->name('pago.listar'); 

Route::delete('pagodelete/{id}',[PagoController::class,'delete'])
->name('pago.delete'); 

Route::get('pagoeditar/{id}',[PagoController::class,'editarpago'])
->name('pago.editar'); 
 
Route::patch('pagoedit/{id}',[PagoController::class,'editpago'])->name('pago.edit'); 




Route::get('listpagoeven',[PagoController::class,'listareven'])
->name('pagoevento.listar'); 

Route::delete('evenpagodelete/{id}',[PagoController::class,'evedelete'])
->name('pagoevento.delete'); 

Route::delete('pagodelete/{id}',[PagoController::class,'delete'])
->name('pago.delete'); 

Route::get('pagoeditar/{id}',[PagoController::class,'editarpago'])
->name('pago.editar'); 
 