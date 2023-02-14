<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RequirementOrder extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['order_number'];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }

    /**
     * Get the user that owns the RequirementOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusesAttribute()
    {
        return ['borrador', 'activa', 'cotizacion', 'en viaje', 'completada', 'rechazada', 'incompleta'];
    }

    public function scopeKanban($query)
    {
        $query->whereNotIn('status', ['completada', 'rechazada', 'incompleta'])->orderByRaw(
            "FIELD(status, 'borrador', 'activa', 'cotizacion', 'en viaje')"
        )
            ->orderByRaw("FIELD(priority, ' alta', 'media', 'baja')")
            ->orderBy('deadline', 'asc');
    }

    public function getOrderNumberAttribute()
    {
        return Str::of($this->pv)->append('-', $this->id);
    }

    public function getDetailCountAttribute(){
        return $this->orderDetails->count();
    }
}
