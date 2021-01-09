<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            // foreign key utente
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // dati appartamento
            $table->string('title');
            $table->longText('description');
            $table->string('address');
            $table->string('city');
            $table->string('cap');
            $table->string('district');
            $table->longText('image');
            $table->integer('rooms_number');
            $table->integer('beds_number');
            $table->integer('bathrooms_number');
            $table->integer('square_meters');
            $table->double('latitude', 11, 8);
            $table->double('longitude', 11, 8);
            $table->boolean('availability');
            
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
        Schema::dropIfExists('apartments');
    }
}
