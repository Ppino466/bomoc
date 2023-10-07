<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AutocebantesGasolinaTekpro extends Model
{
    protected $table = 'motor_gasolina_tekpro';

    protected $fillable = [
        'modelo',
        'tamaño_suc_y_desc',
        'hp',
        'base_de_acero',
        'ruedas_de_fierro',
        'ficha',
        'nota',
          
    ];
}
