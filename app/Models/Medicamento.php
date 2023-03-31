<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Medicamento extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'nombre',
        'descripcion',
        'tipo',
        'tratamientos_id'
        //'imagenM',
    ];

    public function Cliente() {
        return $this->hasMany(Cliente::class);

    }
    //relacion uno a uno 
    public function Tratamiento(){
        return $this->belongsTo(Tratamiento::class);
    }

}
