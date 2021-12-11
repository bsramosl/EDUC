<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public function pagoeventos(){
        return $this->hasmany('App\Models\PagoEvento');
    }
}
