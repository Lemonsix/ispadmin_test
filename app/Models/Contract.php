<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function plan(){
        return $this->hasOne(Plan::class);
    }
    public function onu(){
        return $this->hasOne(Onu::class);
    }
}
