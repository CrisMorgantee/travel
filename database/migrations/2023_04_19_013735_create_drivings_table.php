<?php

use App\Models\Travel;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drivings', function(Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Travel::class, 'travel_id');

            $table->timestamp('start_driving_at');
            $table->timestamp('end_driving_at');
            $table->timestamp('stoped_at')->nullable();
            $table->timestamp('continued_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivings');
    }
};
