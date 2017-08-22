<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valore extends Model
{
    protected $fillable =[
      'valor',
      'categoria'
    ];

    public $timestamps = false;

    public $table = 'valores';

    public function entrada()
    {
        return $this->hasOne('App\Entrada', 'valores_id');
    }

}
