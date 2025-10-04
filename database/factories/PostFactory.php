<?php
    namespace Database\Factories;

    use App\Models\{Category,Image,User};
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Str;
    class PostFactory extends Factory {
        public function definition(): array {
            $title = $this->faker->sentence(3);
//            $thumb = $this->faker->image('public/uploads/posts', 512,288);
            return [
                'title'=>$title,
                'slug'=>Str::slug($title),
                'subject'=>$this->faker->paragraph(),
                'category'=>Category::pluck('category')->random(),
                'image'=>Image::pluck('image')->random(),
                'user_id'=>User::pluck('id')->random(),
            ];
        }
    }
