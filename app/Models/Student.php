<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

        // // Specify the actual table name
        // protected $table = 'students';

        // // Optional: if you want Laravel to manage timestamps
        // public $timestamps = true;

        function getNameAttribute($val){
            return strtolower($val);
        }

        function getEmailAttribute($val){
            return strtolower($val);
        }
}
