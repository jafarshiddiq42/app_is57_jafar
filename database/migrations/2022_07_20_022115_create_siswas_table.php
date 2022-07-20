<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('NamaLengkap')->nullable();
            $table->string('Instansi')->nullable();
            $table->string('JKelamin')->nullable();
            $table->string('NISN')->nullable();
            $table->string('fotoNisn')->default('default.jpg');
            $table->string('PasFoto')->default('default.jpg');
            $table->string('SekolahAsal')->nullable();
            $table->string('TptLahir')->nullable();
            $table->date('TglLahir')->nullable();
            $table->string('Hobi')->nullable();
            $table->string('Cita_Cita')->nullable();
            $table->string('Kewarganegaraan')->nullable();
            // ayah
            $table->string('NamaAyah')->nullable();
            $table->string('HpAyah')->nullable();
            $table->integer('PenghasilanAyah')->nullable();
            $table->string('PendidikanAyah')->nullable();
            $table->string('PekerjaanAyah')->nullable();
            // ibu
            $table->string('NamaIbu')->nullable();
            $table->string('HpIbu')->nullable();
            $table->integer('PenghasilanIbu')->nullable();
            $table->string('PendidikanIbu')->nullable();
            $table->string('PekerjaanIbu')->nullable();
            // 
            $table->string('StatusAnak')->nullable();
            $table->string('AlamatOrtu')->nullable();
            $table->string('MenetapDengan')->nullable();
            $table->string('Goldar')->nullable();
            $table->string('TB')->nullable();
            $table->string('BB')->nullable();
            $table->string('Alergi')->nullable();
            $table->string('RiwayatSakit')->nullable();
            // wali
            $table->string('NamaWali')->nullable();
            $table->string('HubunganWali')->nullable();
            $table->string('PekerjaanWali')->nullable();
            $table->string('HpWali')->nullable();
            $table->string('tahunajar')->nullable();
            $table->boolean('confirmed')->nullable()->default(false);
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
