<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homecrs extends Model
{
    use HasFactory;
    public static function index(){
        return Homecrs::all();
    }
}
