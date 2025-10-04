<?php
    namespace Database\Seeders;

    use App\Models\User;
    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder {
        public function run(): void {
            /* User::factory(10)->create();
            User::factory()->create(['name' => 'Test User','email' => 'test@example.com',]); */
            $this->call(UserSeeder::class);
            $this->call(CategorySeeder::class);
            $this->call(ImageSeeder::class);
            $this->call(TagsYT::class);
            $this->call(LinksYTSeeder::class);
            $this->call(PostSeeder::class);
            $this->call(BoxIconsSeeder::class);
            $this->call(FontAwesomeSeeder::class);
            $this->call(IconsMindSeeder::class);
            $this->call(LineIconsSeeder::class);
        }
    }
