<?php

use App\Models\Branch;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('exams', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('class_id')->constrained('classes')->onDelete('cascade');
        $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
        $table->foreignIdFor(Branch::class)->onDelete('cascade');
        $table->date('exam_date');
        $table->string('exam_session');
        $table->string('term');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
