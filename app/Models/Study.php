<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Study extends Model
{
    use HasFactory;

    /**
     * Set the studies for the modality.
     *
     * @return BelongsTo<Modality>
     */
    public function modality(): BelongsTo
    {
        return $this->belongsTo(Modality::class);
    }

    /**
     * Set the studies for the clinic.
     *
     * @return BelongsTo<Clinic>
     */
    public function clinic(): BelongsTo
    {
        return $this->belongsTo(Clinic::class);
    }

    /**
     * Set the studies for the physician.
     *
     * @return BelongsTo<ReferringPhysician>
     */
    public function referringPhysician(): BelongsTo
    {
        return $this->belongsTo(ReferringPhysician::class);
    }

    // /**
    //  * Set the studies for the dicom path.
    //  *
    //  * @return BelongsTo<DicomPath>
    //  */
    // public function dicomPath(): BelongsTo
    // {
    //     return $this->belongsTo(DicomPath::class);
    // }

    protected $guarded = [];
}
