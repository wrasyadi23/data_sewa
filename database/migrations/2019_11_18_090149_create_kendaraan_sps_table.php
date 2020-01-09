<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanSpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan_sp', function (Blueprint $table) {
            $table->bigIncrements('id_sp')->index();
            $table->string('cc',25);
            $table->string('acc',25);
            $table->string('act',25);
            $table->string('sp_code',25);
            $table->string('sp_no',40);
            $table->string('sp_deskripsi',40);
            $table->string('sp_tahun',40);
            $table->string('sp_keterangan',40);
            $table->string('sp_status',40);
            $table->string('sp_vendor',40);
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
        Schema::dropIfExists('kendaraan_sp');
    }
}
