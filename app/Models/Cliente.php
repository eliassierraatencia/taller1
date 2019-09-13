<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];


    public function facturas()
    {
        return $this->hasMany('App\Models\Factura');
    }
}
