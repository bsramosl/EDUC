<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Curso;
use App\Models\Evento;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name ='Admin';
        $user->email ='admin@admin.com';
        $user->password ='$2y$10$e6sGSipIYqDU3clgBbayoucPvB5El4ZQ6Ma0BzJKbWzwSquVf.FY.';
        $user->role = 'admin';
        $user->titulo = 'Ingeniero de sistemas';
        $user->habilidades = 'Diseño de UI Codificación Javascript PHP Node.js';
        $user->educacion = 'Licenciatura en Ciencias de la Computación de la Universidad de Tennessee en Knoxville';
        $user->save();
 
        $curso = new Curso;
        $curso->nombre ='Nociones básicas de redes';
        $curso->descripcion ='Las redes son la esencia de la transformación digital. La red es esencial para muchas funciones empresariales en la actualidad, incluidos los datos y las operaciones empresariales críticos, la ciberseguridad y mucho más. Una amplia variedad de carreras profesionales dependen de la red, por lo que es importante comprender lo que la red puede hacer, cómo funciona y cómo protegerla.';
        $curso->longitud ='70';
        $curso->nivel = 'Intermedio';
        $curso->fecha = '2022/04/15';
        $curso->costo = '100';
        $curso->save();

        $evento = new Evento;
        $evento->nombre ='Masterclass de Escritura y Publicación de Libros -Passion2Published - Guayaquil';
        $evento->descripcion ='Aprenda el mejor plan de publicación y redacción de libros para es';
        $evento->localizacion ='En línea: en cualquier lugar con wifi rápido y sonido, Guayaquil Guayaquil Guayaquil, Provincia de Guayas. 90101';
        $evento->imagen = 'evento.jpg';
        $evento->fecha = '2022/04/15';
        $evento->costo = '100';
        $evento->save();
    }
}
