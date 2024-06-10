<?php
use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): Void
   {
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name',50);
        $table->string('student_id',10);
        $table->foreignId('age_id')->constrained('ages');
        // $table->string('age', 2);
        $table->softDeletes();
        $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

