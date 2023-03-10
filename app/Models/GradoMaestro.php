<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado_Maestro extends Model
{
    use HasFactory;
    protected $table='grado_prof';

    protected $primaryKey='id';

    protected $fillable=[
        'id',
        'grado_nombre'
    ];
}
