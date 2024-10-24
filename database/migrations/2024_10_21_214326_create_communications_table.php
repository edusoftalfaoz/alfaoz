<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('communications', function (Blueprint $table) {
        $table->id();
        $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
        $table->foreignId('parent_id')->constrained('users')->onDelete('cascade');
        $table->text('message');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communications');
    }
};
