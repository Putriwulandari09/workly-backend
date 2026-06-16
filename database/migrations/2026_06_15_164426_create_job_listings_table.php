<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
Schema::create('job_listings', function (Blueprint $table) {

    $table->id();

    $table->foreignId('category_id')
          ->constrained()
          ->onDelete('cascade');

    $table->string('judul');

    $table->string('perusahaan');

    $table->string('lokasi');

    $table->enum(
        'tipe_pekerjaan',
        [
            'Full Time',
            'Part Time',
            'Freelance',
            'Internship'
        ]
    );

    $table->text('deskripsi');

    $table->text('persyaratan');

    $table->text('cara_mendaftar');

    $table->date('batas_pendaftaran');

    $table->timestamps();

});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
