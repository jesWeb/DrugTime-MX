<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tratamiento extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'nombre',
        'dosis',
        'horario',
        'dias'
    ];

    public function Cliente() {
        return $this->hasMany(Cliente::class);

    }
    //relacion uno a uno 
    public function Medicamento(){
        return $this->hasOne(Medicamento::class);
    }
   
}
