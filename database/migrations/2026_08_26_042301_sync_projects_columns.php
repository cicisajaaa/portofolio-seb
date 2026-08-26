<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            if (!Schema::hasColumn('projects', 'instansi')) {
                $table->string('instansi')->nullable()->after('id');
            }

            if (!Schema::hasColumn('projects', 'perusahaan')) {
                $table->string('perusahaan')->nullable()->after('instansi');
            }

            if (!Schema::hasColumn('projects', 'kegiatan')) {
                $table->string('kegiatan')->nullable()->after('lokasi');
            }

            if (!Schema::hasColumn('projects', 'jenis_pekerjaan')) {
                $table->text('jenis_pekerjaan')->nullable()->after('deskripsi');
            }

        });
    }



    public function down(): void
    {

    }

};