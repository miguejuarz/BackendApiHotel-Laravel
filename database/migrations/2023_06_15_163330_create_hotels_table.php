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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();

            $table->string('name_hotel',50);
            $table->string('address',75);

            $table->foreignId('city_id')
            ->nullable()
            ->constrained('cities')  // para declara una llave foranea en Laravel
            ->cascadeOnUpdate();

            $table->string('phone_number',25);
            $table->string('email',50);

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
        Schema::dropIfExists('hotels');
    }
};
