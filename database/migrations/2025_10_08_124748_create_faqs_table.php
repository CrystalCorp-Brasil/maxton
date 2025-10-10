<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up(): void {
            Schema::create('faqs_categories', function (Blueprint $table) {
                $table->id();
                $table->string('category');
                $table->timestamps();
            });
            Schema::create('faqs', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->longText('content');
                $table->string('category');
                $table->timestamps();
            });
        }

        public function down(): void {
            Schema::dropIfExists('faqs');
            Schema::dropIfExists('faqs_categories');
        }
    };
