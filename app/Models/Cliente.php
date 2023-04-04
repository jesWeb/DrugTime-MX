<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'nombre',
        'fechaN',
        'sexo',
        'peso',
        'alergias',
        'telefono',
        'imagenU',
        'enfermedades',
        'email',
        'password',
        'type_usuarios_id'
    ];
    //relacion uno a muchos conexion de modelos de fuera
     //tipo user
     public function Typeuser(){
        return $this->belongsTo(Typeuser::class);
    }

    public function Registro(){
        return $this->belongsTo(Registro::class);
    }

    public function Cuidador(){
        return $this->belongsTo(Cuidador::class);
    }


    public function Tratamiento(){
        return $this->belongsTo(Tratamiento::class);
    }

    public function Medicamento(){
        return $this->belongsTo(Medicamento::class);
    }

    public function Maquina(){
        return $this->belongsTo(Maquina::class);
    }

    public function Estado(){
        return $this->belongsTo(Estado::class);
    }

}
