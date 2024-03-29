<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("alamat");
            $table->date("tanggal_lahir");
            $table->string("nomor_hp");
            $table->string("email");
            $table->string("linkedin");
            $table->double("ipk");
            $table->double("pengalaman_kerja");
            $table->integer("jumlah_bahasa");
            $table->integer("jumlah_sertifikat");
            $table->integer("jumlah_project");
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
        Schema::dropIfExists('calon');
    }
};
