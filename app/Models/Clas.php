<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    use HasFactory;

    protected $table = 'clas';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function institution() {

        return $this->belongsTo('App\Models\institution');
    }

    public function subject() {
        return $this->hasMany('App\Models\subjects');
    }
}
