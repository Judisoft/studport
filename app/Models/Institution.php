<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $table = 'institutions';
    protected $primaryKey = 'id';
    public $timestamps = true ;

    public function clas() {
        return $this->hasMany('App\Models\clas');

    }

    public function user() {
        return $this->hasMany('App\Models\user');
    }
}
