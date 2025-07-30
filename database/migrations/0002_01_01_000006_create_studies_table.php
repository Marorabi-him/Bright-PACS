<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->boolean('is_male');
            $table->tinyInteger('y_OB');
            $table
                ->foreignId('modality_id')
                ->constrained('modalities')
                ->onDelete('cascade');
            $table
                ->foreignId('clinic_id')
                ->constrained('clinics')
                ->onDelete('cascade');
            $table
                ->foreignId('referring_physician_id')
                ->constrained('referring_physicians')
                ->onDelete('cascade');
            // $table->string('dicom path');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studies');
    }
};
