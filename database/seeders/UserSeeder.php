<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB as FacadesDB;

    class UserSeeder extends Seeder {
        public function run(): void {
            FacadesDB::table('users')->insert([
                [
                    'name'=>'Nelson Junior',
                    'username'=>'nhojunior',
                    'email'=>'crystalcorpbrasil@gmail.com',
                    'image' => 'uploads/users/1/nhojunior.png',
                    'level'=>'admin',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],[
                    'name'=>'Meliodas',
                    'username'=>'editor',
                    'email'=>'editor@crystalcorpbrasil.com.br',
                    'image' => null,
                    'level'=>'editor',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],[
                    'name'=>'Sheena',
                    'username'=>'user',
                    'email'=>'user@crystalcorpbrasil.com.br',
                    'image' => 'uploads/users/3/user.png',
                    'level'=>'user',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],
            ]);
        }
    }
