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
        Schema::create('pays', function (Blueprint $table) {
            $table->id();

            $table->foreignId('reservation_id')
            ->nullable()
            ->constrained('reservations')  // para declara una llave foranea en Laravel
            ->cascadeOnUpdate();

            $table->foreignId('method_id')
            ->nullable()
            ->constrained('payment_methods')  // para declara una llave foranea en Laravel
            ->cascadeOnUpdate();

            $table->decimal('amountPayable', 10,2);
            $table->date('date');
            $table->string('state',25);

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
        Schema::dropIfExists('pays');
    }
};
