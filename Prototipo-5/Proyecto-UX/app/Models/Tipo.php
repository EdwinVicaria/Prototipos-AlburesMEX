<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    public function alburs(){
        return $this->hasMany(Albur::class, tipo_id);
    }

}
