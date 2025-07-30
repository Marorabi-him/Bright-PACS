<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clinic extends Model
{
    use HasFactory;

    /**
     * Get the studies for the clinic.
     *
     * @return HasMany<Study>
     */
    public function studies(): HasMany
    {
        return $this->hasMany(Study::class);
    }

    /**
     * Get the clinics that the user belongs to.
     *
     * @return BelongsToMany<User>
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->using(ClinicUser::class);
    }

    /**
     * Get the modality that the clinic belongs to.
     *
     * @return BelongsToMany<Modality>
     */
    public function modalities(): BelongsToMany
    {
        return $this->belongsToMany(Modality::class);
    }

    protected $guarded = [];
}
