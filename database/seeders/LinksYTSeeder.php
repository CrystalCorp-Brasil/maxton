<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB as FacadesDB;

    class LinksYTSeeder extends Seeder {
        public function run(): void {
            FacadesDB::table('links_yt')->insert([
                [
                    'title'=>'O Plano de Brainiac',
                    'slug'=>'o-plano-de-brainiac',
                    'image'=>'uploads/videos/o-plano-de-brainiac.jpg',
                    'resume'=>'Brainiac explicando a origem do Multiverso e expondo seus desejos com sua visita ao planeta Terra.',
                    'tag'=>'Cinematic',
                    'link'=>'https://www.youtube.com/watch?v=74OHE1RJFko&t=2s',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Despertar',
                    'slug'=>'despertar',
                    'image'=>'uploads/videos/despertar.jpg',
                    'resume'=>'Você acaba de despertar e com o auxilio de Superman e Oracle sua missão é fugir da nave de Brainiac.',
                    'tag'=>'Walkthrough',
                    'link'=>'https://www.youtube.com/watch?v=UAMxe5ynHQo',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Resistência',
                    'slug'=>'resistencia',
                    'image'=>'uploads/videos/resistencia.jpg',
                    'resume'=>'Wonder Woman analisando a coragem e a importância das ações de Future Lex Luthor.',
                    'tag'=>'Cinematic',
                    'link'=>'https://www.youtube.com/watch?v=gPj_twRX6vk&t=7s',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Luta pela Liberdade',
                    'slug'=>'luta-pela-liberdade',
                    'image'=>'uploads/videos/luta-pela-liberdade.jpg',
                    'resume'=>'A trajetória para impedir Brainiac de conquistar o mundo começa agora.',
                    'tag'=>'Walkthrough',
                    'link'=>'https://www.youtube.com/watch?v=UwPDB689IbE&t=10s',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Primeira Missão',
                    'slug'=>'primeira-missao',
                    'image'=>'uploads/videos/primeira-missao.jpg',
                    'resume'=>'Descubra o que aconteceu com Zatanna, feiticeira que conjura mágias pronunciando as palavras ao contrário.',
                    'tag'=>'Walkthrough',
                    'link'=>'https://www.youtube.com/watch?v=O61ePgvoD5I',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Loja de magia de Madame Xanadu',
                    'slug'=>'loja-de-magia-de-madame-xanadu',
                    'image'=>'uploads/videos/loja-de-magia-de-madame-xanadu.jpg',
                    'resume'=>'Zatanna está presa e amordaçada dessa forma impedida de usar seus poderes. Cabe a você resgatá-la!',
                    'tag'=>'Walkthrough',
                    'link'=>'https://www.youtube.com/watch?v=W06pAhNnNQE',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Procurando por Felix Faust',
                    'slug'=>'procurando-por-felix-faust',
                    'image'=>'uploads/videos/procurando-por-felix-faust.jpg',
                    'resume'=>'O que Felix Faust está planejando? Continue sua investigação para localizar Felix Faust.',
                    'tag'=>'Walkthrough',
                    'link'=>'https://www.youtube.com/watch?v=xsvqgeUjt04',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Teatro Chinês de Mannheim',
                    'slug'=>'teatro-chines-de-mannheim',
                    'image'=>'uploads/videos/teatro-chines-de-mannheim.jpg',
                    'resume'=>'Com a localização de Felix Faust, você e Zatanna devem impedir o mago de concluir seu plano.',
                    'tag'=>'Walkthrough',
                    'link'=>'https://www.youtube.com/watch?v=O61ePgvoD5I',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Ecos do Passado',
                    'slug'=>'ecos-do-passado',
                    'image'=>'uploads/videos/ecos-do-passado.jpg',
                    'resume'=>'Uma breve história sobre a história passada de Felix Faust. Entenda suas motivações.',
                    'tag'=>'Cinematic',
                    'link'=>'https://www.youtube.com/watch?v=KN8mE5WxUrE&t=1s',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],[
                    'title'=>'Coração & Alma - Conclusão',
                    'slug'=>'coracao-e-alma-conclusao',
                    'image'=>'uploads/videos/coracao-e-alma-conclusao.jpg',
                    'resume'=>'Com a derrota de Felix Faust Zatanna chama você a delegacia de Chinatown para conversar.',
                    'tag'=>'Walkthrough',
                    'link'=>'https://www.youtube.com/watch?v=3Ebw18TA7kQ&t=1s',
                    'user_id'=>'1',
                    'created_at'=> now()
                ],
            ]);
        }
    }
