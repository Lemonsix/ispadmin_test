<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $guarded=[];

    /**
     * The materials that belong to the Provider
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }

}
