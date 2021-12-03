<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function curso(){
        return $this->belongsTo('App\Models\Curso');
    }
}
