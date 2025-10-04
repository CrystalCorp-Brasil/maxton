<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB as FacadesDB;

    class ImageSeeder extends Seeder {
        public function run(): void {
            FacadesDB::table('images')->insert([
                ['title'=>'001','slug'=>'001','image'=>'uploads/images/001.jpg','user_id'=>'1','created_at'=> now()],
                ['title'=>'002','slug'=>'002','image'=>'uploads/images/002.jpg','user_id'=>'2','created_at'=> now()],
                ['title'=>'003','slug'=>'003','image'=>'uploads/images/003.jpg','user_id'=>'3','created_at'=> now()],
                ['title'=>'004','slug'=>'004','image'=>'uploads/images/004.jpg','user_id'=>'1','created_at'=> now()],
                ['title'=>'005','slug'=>'005','image'=>'uploads/images/005.jpg','user_id'=>'2','created_at'=> now()],
                ['title'=>'006','slug'=>'006','image'=>'uploads/images/006.jpg','user_id'=>'3','created_at'=> now()],
                ['title'=>'007','slug'=>'007','image'=>'uploads/images/007.jpg','user_id'=>'1','created_at'=> now()],
                ['title'=>'008','slug'=>'008','image'=>'uploads/images/008.jpg','user_id'=>'2','created_at'=> now()],
                ['title'=>'009','slug'=>'009','image'=>'uploads/images/009.jpg','user_id'=>'3','created_at'=> now()],
                ['title'=>'010','slug'=>'010','image'=>'uploads/images/010.jpg','user_id'=>'1','created_at'=> now()],
            ]);
        }
    }
