<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;

class MaterialProvider extends Model
{
    use HasFactory,AsPivot;
    protected $guarded=[];
    public $timestamps=false;
    protected $primaryKey='id';
    // protected $table='material_provider';

    /**
     * Get the provider that owns the MaterialProvider
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    /**
     * Get the material that owns the MaterialProvider
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
