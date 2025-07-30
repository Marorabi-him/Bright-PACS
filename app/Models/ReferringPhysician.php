<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReferringPhysician extends Model
{
    use HasFactory;

    /**
     * Get the studies for the physician.
     *
     * @return HasMany<Study>
     */
    public function studies(): HasMany
    {
        return $this->hasMany(Study::class, 'ref_phy_id');
    }

    protected $guarded = [];
}
