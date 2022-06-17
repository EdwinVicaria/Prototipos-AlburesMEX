<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Albur extends Model
{
    use HasFactory;
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    protected $fillable = [
        'titulo',
        'descripcion',
        'tipo_id',
        'user_id',
    ];

   public function users(){
       return $this->hasMany(User::class);
   }
}
