<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        $user->password ='1234';
        $user->role = 'admin';
        $user->titulo = 'Ingeniero de sistemas';
        $user->habilidades = 'Diseño de UI Codificación Javascript PHP Node.js';
        $user->educacion = 'Licenciatura en Ciencias de la Computación de la Universidad de Tennessee en Knoxville';
        $user->save();
    }
}
