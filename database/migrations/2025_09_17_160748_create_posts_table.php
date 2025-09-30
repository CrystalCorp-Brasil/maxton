<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void {
            Schema::create('categories', function (Blueprint $table) {
                $table->id();
                $table->string('category');
                $table->timestamps();
            });
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->longText('subject');
                $table->string('category');
                $table->text('image')->nullable();
                $table->integer('visits')->default(0);
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->timestamps();
            });
            Schema::create('comments', function (Blueprint $table) {
                $table->id();
                $table->text('comment');
                $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->timestamps();
            });
        }

        public function down(): void {
            Schema::dropIfExists('categories');
            Schema::dropIfExists('posts');
            Schema::dropIfExists('comments');
        }
    };
