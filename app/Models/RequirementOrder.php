<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequirementOrder extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }

    /**
     * Get the user that owns the RequirementOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getStatusesAttribute() {
        return ['activa','cotización','en viaje','completada','rechazada por compras','incompleta'];
    }

}
