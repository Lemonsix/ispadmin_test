<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onu extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function model(){
        return $this->hasOne(Model::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

}
