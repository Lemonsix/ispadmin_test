<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedDocument extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable=['path','size','requirement_order_id','description'];

    public function requirementOrder(){
        $this->belongsTo(requirementOrder::class);
    }



}
