<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void {
                Schema::create('likes', function (Blueprint $table) {
                    $table->id();
                    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                    $table->morphs('likeable');
                    $table->boolean('liked')->default(true);
                    $table->timestamps();
                });
                Schema::create('comments', function (Blueprint $table) {
                    $table->id();
                    $table->foreignId('user_id')->constrained()->onDelete('cascade');
                    $table->morphs('commentable');
                    $table->foreignId('parent_id')->nullable()->constrained('comments')->onDelete('cascade');
                    $table->text('body');
                    $table->boolean('is_edited')->default(false);
                    $table->boolean('is_deleted')->default(false);
                    $table->timestamps();
                });
        }

        public function down(): void {
            Schema::dropIfExists('likes');
            Schema::dropIfExists('comments');
        }
    };
