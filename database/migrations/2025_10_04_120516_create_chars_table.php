<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void {
            Schema::create('chars', function (Blueprint $table) {
                $table->id();
                $table->string('nick')->unique();
                $table->string('slug');
                $table->string('name')->nullable();
                $table->string ('image');
                $table->longText('bio');
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->timestamps();
            });
            Schema::create('chars_images', function (Blueprint $table) {
                $table->id();
                $table->string ('image');
                $table->foreignId('char_id')->constrained('chars')->onDelete('cascade');
                $table->timestamps();
            });
            Schema::create('chars_likes', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->foreignId('char_id')->constrained('chars')->onDelete('cascade');
                $table->boolean('liked');
                $table->unique(['user_id','char_id']);
                $table->timestamps();
            });
        }

        public function down(): void {
            Schema::dropIfExists('chars');
            Schema::dropIfExists('chars_images');
            Schema::dropIfExists('chars_likes');
        }
    };
