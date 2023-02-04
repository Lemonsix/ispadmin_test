<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function getStatusAttribute($value) {
        return $value ? 'enabled' : 'disabled';
    }

    public function contract(){
        return $this->hasMany(Contract::class);
    }
}
