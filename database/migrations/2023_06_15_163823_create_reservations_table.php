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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();


            $table->foreignId('room_id')
            ->nullable()
            ->constrained('rooms')  // para declara una llave foranea en Laravel
            ->cascadeOnUpdate();

            $table->foreignId('customer_id')
            ->nullable()
            ->constrained('customers')  // para declara una llave foranea en Laravel
            ->cascadeOnUpdate();

            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('total_price', 10,2);
            $table->string('estado',15);

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
        Schema::dropIfExists('reservations');
    }
};
