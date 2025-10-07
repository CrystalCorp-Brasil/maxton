<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void {
            Schema::create('images', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->string('image');
                $table->integer('visits')->default(0);
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->foreignId('char_id')->constrained('chars')->onDelete('cascade')->nullable();
                $table->timestamps();
            });
        }

        public function down(): void {
            Schema::dropIfExists('images');
        }
    };
