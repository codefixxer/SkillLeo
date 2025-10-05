<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('email_otps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('code', 6);
            $table->timestamp('expires_at');
            $table->timestamp('consumed_at')->nullable();
            $table->unsignedTinyInteger('attempts')->default(0);
            $table->string('status')->default('pending');
            $table->string('ip')->nullable();
            $table->timestamps();
            
            $table->index(['user_id', 'status', 'expires_at']);
        });
    }
    public function down(): void {
        Schema::dropIfExists('email_otps');
    }
};