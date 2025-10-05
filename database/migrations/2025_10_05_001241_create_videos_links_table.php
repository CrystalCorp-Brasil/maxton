<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void {
            Schema::create('videos_links', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->string('image');
                $table->longText('content');
                $table->string('tag');
                $table->string('link');
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->timestamps();
            });
            Schema::create('videos_tags', function (Blueprint $table) {
                $table->id();
                $table->string('tag');
                $table->timestamps();
            });
        }

        public function down(): void {
            Schema::dropIfExists('videos_links');
            Schema::dropIfExists('videos_tags');
        }
    };
