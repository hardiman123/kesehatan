<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCategoris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_categoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fasilitas');
            $table->Text('deskripsi');
            $table->string('jenis_fasilitas');
            $table->string('jenis_tes');
            $table->bigInteger('harga');
            $table->string('telp');
            $table->text('alamat');
            $table->string('gambar');
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
        Schema::dropIfExists('table_categoris');
    }
}
