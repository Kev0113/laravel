<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joue extends Model
{
    use HasFactory;
    protected $table = "joue"; //!!!!!!!!!!!!!!
    public $timestamps = false;
}
