<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    //Trait 
    use HasFactory;

    // Primary Key
    protected $primaryKey = 'id';
}
