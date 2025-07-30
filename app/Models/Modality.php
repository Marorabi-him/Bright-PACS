<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modality extends Model
{
    /**
     * Get the studies for the modality.
     *
     * @return HasMany<Study>
     */
    public function studies(): HasMany
    {
        return $this->hasMany(Study::class);
    }

    /**
     * Get the clinics that the modality belongs to.
     *
     * @return BelongsToMany<Clinic>
     */
    public function clinics(): BelongsToMany
    {
        return $this->belongsToMany(Clinic::class);
    }

    protected $guarded = [];
}
