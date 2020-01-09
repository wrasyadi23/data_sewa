<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan_data', function (Blueprint $table) {
            $table->bigIncrements('id_kend')->index();
            $table->string('no_assets',25);
            $table->string('nopol',25);
            $table->string('jenis_kend',25);
            $table->string('model',25);
            $table->string('merk_kend',25);
            $table->string('type_kend',25);
            $table->string('no_mesin',25);
            $table->string('no_rangka',40);
            $table->string('pemilik',40);
            $table->integer('thn_pembuatan');
            $table->string('jenis_bbm',25);
            $table->string('id_sp',25);
            $table->string('id_ba',25);
            $table->string('kompartemen',30);
            $table->string('departemen',30);
            $table->string('bagian',30);
            $table->string('warna',25);
            $table->string('nopol_lama',25);
            $table->string('status_kend',25);
            $table->decimal('bbm1',6,0);
            $table->decimal('bbm2',6,0);
            $table->text('keterangan');
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
        Schema::dropIfExists('kendaraan_data');
    }
}
