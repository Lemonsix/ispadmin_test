<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['requirement_order_id','project_id','material_provider_id','qty'];
    /**
     * Get the materialProvider that owns the OrderDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materialProvider()
    {
        return $this->belongsTo(MaterialProvider::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function requirementOrder()
    {
        return $this->belongsTo(RequirementOrder::class);
    }

    public function getProviderAttribute() {
        return $this->materialProvider->provider;
    }

    public function getMaterialAttribute() {
        return $this->materialProvider->material;
    }
}
