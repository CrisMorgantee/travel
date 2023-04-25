<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('travel', function(Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'registered_by');

            $table->string('itinerary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
