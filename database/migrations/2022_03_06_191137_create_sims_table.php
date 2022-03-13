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
     *  $table->foreignId('user_id')->constrained()->onDelete('cascade');
      *      $table->text('location');
      
     *  '',
        *'',
        *'',
        *'',
        *'',
        
        *'scannerserial','',
     */
    public function up()
    {
        Schema::create('sims', function (Blueprint $table) {
            $table->id();
           $table->foreignId('posts_id')->constrained();
            $table->text('simserial');
            $table->text('simmsisdn');
            $table->text('simnetwork');
            $table->text('simpuck')->nullable();
            $table->text('simpin')->nullable();
            $table->text('scannerserial');
            $table->text('simtype')->nullable();            
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
        Schema::dropIfExists('sims');
    }
};
