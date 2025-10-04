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
                $table->timestamps();
            });
            Schema::create('tags_videos', function (Blueprint $table) {
                $table->id();
                $table->string('tag');
                $table->timestamps();
            });
            Schema::create('links_yt', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->string('image');
                $table->longText('resume');
                $table->string('tag');
                $table->string('link');
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->timestamps();
            });
        }

        public function down(): void {
            Schema::dropIfExists('images');
            Schema::dropIfExists('tags_videos');
            Schema::dropIfExists('links_yt');
        }
    };
