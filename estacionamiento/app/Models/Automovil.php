<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    protected $table ='automoviles';
    public $timestamps = false;
    use HasFactory;
}
