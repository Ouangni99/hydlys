<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  
    public function up(): void
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->foreignIdFor(\App\Models\Room::class)->constrained();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pictures');
    }
};
