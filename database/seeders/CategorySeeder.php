<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB as FacadesDB;

    class CategorySeeder extends Seeder {
        public function run(): void {
            FacadesDB::table('categories')->insert([
                ['category'=>'Editoriais',],
                ['category'=>'Projetos',],
                ['category'=>'Dicas',],
                ['category'=>'Episódios',],
            ]);
        }
    }
