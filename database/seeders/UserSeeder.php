<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB as FacadesDB;

    class UserSeeder extends Seeder {
        public function run(): void {
            FacadesDB::table('users')->insert([
                [
                    'name'=>'Admin',
                    'username'=>'admin',
                    'email'=>'admin@crystalcorp.com.br',
                    'image' => 'uploads/users/1/user.png',
                    'level'=>'admin',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],[
                    'name'=>'Nelson Junior',
                    'username'=>'nhojunior',
                    'email'=>'crystalcorpbrasil@gmail.com',
                    'image' => 'uploads/users/2/nhojunior.png',
                    'level'=>'admin',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],[
                    'name'=>'Meliodas',
                    'username'=>'editor',
                    'email'=>'editor@crystalcorp.com.br',
                    'image' => 'uploads/users/1/user.png',
                    'level'=>'editor',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],[
                    'name'=>'Sheena',
                    'username'=>'user',
                    'email'=>'user@crystalcorp.com.br',
                    'image' => 'uploads/users/1/user.png',
                    'level'=>'user',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],
            ]);
        }
    }
