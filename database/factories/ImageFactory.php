<?php
    namespace Database\Factories;

    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Http\UploadedFile;
    use Illuminate\Support\Str;
    class ImageFactory extends Factory {
        public function definition(): array {
            $title = $this->faker->sentence(3);
            $thumb = $this->faker->image('public/uploads/images', 512,288);
            return [
                'title'=>$title,
                'slug'=>Str::slug($title),
                'image'=> UploadedFile::fake()->image('thumbnail.jpg', 400, 320)->store('uploads/posts', 'public'),
                'user_id'=>User::pluck('id')->random()
            ];
        }
    }
