<?php
//Modelos parte 2 Danae

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estados extends Model
{
    //
    public $fillable = [
        'estado'
    ];

    public static function validationRules(){
        return[
            'estado' =>'requeried| min:5 |max:50',
        ];
    }

    public function Estados ()
    {
        return $this->hasOne(Estados::class);
    }

  }
