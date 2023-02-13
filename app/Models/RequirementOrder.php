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
        return ['borrador','activa','cotizacion','en viaje','completada','rechazada','incompleta'];
    }

    public function scopeKanban($query){
        $query->whereNotIn('status',['completada', 'rechazada', 'incompleta'])->orderByRaw(
            "FIELD(status, 'borrador', 'activa', 'cotizacion', 'en viaje')")
        ->orderByRaw("FIELD(priority, 'alta', 'media', 'baja')")
        ->orderBy('deadline','asc');
    }

}
