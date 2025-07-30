<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClinicModality extends Pivot
{
    protected $table = 'clinic_modality';

    public $timestamps = false;
}
