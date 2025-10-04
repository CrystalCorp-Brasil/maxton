<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB as FacadesDB;

    class TagsYT extends Seeder {
        public function run(): void {
            FacadesDB::table('tags_videos')->insert([
                ['tag'=>'Cinematic',],
                ['tag'=>'Gameplay',],
                ['tag'=>'Walkthrough',],
                ['tag'=>'Build',],
                ['tag'=>'Artefato',],
                ['tag'=>'Base',],
                ['tag'=>'Salão da Liga',],
                ['tag'=>'Metropólis',],
                ['tag'=>'Gotham City',],
                ['tag'=>'Mapa de Episódio',],
            ]);
        }
    }
