<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Onumodel extends Model
{
    use HasFactory;
    protected $guarded=[];

    /**
     * Get the user that owns the Onumodel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendor(): BelongsTo{
        return $this->belongsTo(Vendor::class);
    }

    public function onu(){
        return $this->hasOne(Onu::class);
    }
}
