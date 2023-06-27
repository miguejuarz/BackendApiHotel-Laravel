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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();

            $table->foreignId('hotel_id')
            ->nullable()
            ->constrained('hotels')  // para declara una llave foranea en Laravel
            ->cascadeOnUpdate();

            $table->string('type_room',150);
            $table->decimal('night_price', 10,2);
            $table->string('capacity',25);
            $table->string('description_room',500);
            $table->string('aviable',25);

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
        Schema::dropIfExists('rooms');
    }
};
