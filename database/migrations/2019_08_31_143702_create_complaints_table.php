<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->Increments('id');                        
            $table->string('name');
            $table->string('email');
            $table->enum('fakultas',['FISIP','FKIP','FEB','FAPERTA','FAI','FT','FH','PASCASARJANA']);
            $table->string('file')->nullable();
            $table->text('masukan');            
            $table->enum('tipe_masukan',['umum','rahasia']);
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
        Schema::dropIfExists('complaints');
    }
}
