<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void {
            Schema::create('posts_categories', function (Blueprint $table) {
                $table->id();
                $table->string('category');
                $table->timestamps();
            });
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->longText('content');
                $table->string('category');
                $table->string('image');
                $table->integer('visits')->default(0);
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->timestamps();
            });
            Schema::create('posts_likes', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
                $table->boolean('liked');
                $table->unique(['user_id','post_id']);
                $table->timestamps();
            });
            Schema::create('posts_comments', function (Blueprint $table) {
                $table->id();
                $table->text('comment');
                $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->timestamps();
            });
        }

        public function down(): void {
            Schema::dropIfExists('posts_categories');
            Schema::dropIfExists('posts');
            Schema::dropIfExists('posts_likes');
            Schema::dropIfExists('posts_comments');
        }
    };
