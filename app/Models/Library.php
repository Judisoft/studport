<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $table  = 'libraries';
    // Primary Key
    public $primaryKey = 'id';
    //Time Stamps
    public $timestamps = true;
}
