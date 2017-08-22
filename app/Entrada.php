<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable =[
        'entrada',
        'saida',
        'placa',
        'valor_total'
    ];

    public $table = 'entrada';

    protected $dates = ['entrada', 'saída'];

    public $timestamps = false;


    public function setPlacaAttribute($value)
    {
        $this->attributes['placa'] = strtoupper($value);
    }

    public function getPlacaAttribute($value)
    {
        return strtoupper($value);
    }

    public function valore()
    {
        return $this->belongsTo('App\Valore');
    }

}
