<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('url');
            $table->json('sub_menu')->nullable();
            $table->boolean('visible')->default(1)->comment('0 = Not Visible , 1 = Visible');

            $table->index('title');
            $table->index('url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
