<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'developer_id' => 1,
            'genre_game_id' => '1',
            'title' => 'Hollow Knight - SilkSong',
            'description' => '
            Hollow Knight: Silksong é a tão aguardada sequência do aclamado jogo de ação e aventura Hollow Knight. Nesta jornada épica, você será levado a um reino vasto e assombrado, mergulhado em segredos e mistérios profundos.

            Assumindo o papel de Hornet, uma heroína determinada e ágil, você enfrentará um mundo deslumbrante e perigoso repleto de inimigos desafiadores e paisagens deslumbrantes. Explore uma variedade de cenários ricamente detalhados, desde cidades em ruínas até florestas enigmáticas e cavernas sombrias, enquanto desvenda a história envolvente por trás do reino de seda e canção.

            Em Hollow Knight: Silksong, você enfrentará combates rápidos e intensos, dominando uma ampla gama de movimentos acrobáticos e habilidades especiais. Derrote inimigos únicos e chefes imponentes, desbloqueando novas habilidades e aprimorando seu poder ao longo do caminho.

            Além disso, você encontrará personagens fascinantes e cativantes, cada um com sua própria história e motivações. Conforme interage com eles, você desvendará segredos e desafios adicionais, expandindo ainda mais o mundo rico e intrincado de Hollow Knight: Silksong.

            A arte deslumbrante em estilo de animação em 2D, aliada a uma trilha sonora atmosférica e envolvente, cria uma atmosfera imersiva que transporta os jogadores para um reino de beleza e trevas. Prepare-se para se perder em um mundo misterioso e desafiador, repleto de descobertas emocionantes e batalhas épicas.

            Hollow Knight: Silksong promete oferecer uma experiência de jogo incrível, trazendo de volta a jogabilidade desafiadora, a atmosfera envolvente e a narrativa envolvente que fizeram do primeiro jogo um sucesso. Esteja preparado para se aventurar em um novo capítulo desta jornada inesquecível, desvendando os segredos do reino de seda e canção com Hornet.',
            'image' => 'silksong.webp',
            'price' => 20.00,
            'release_date' => '2023-05-26',
            'age_rating' => 'L'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => '1',
            'title' => 'Ori and the Blind Forest',
            'description' => '
            Ori and the Blind Forest é um aclamado jogo de plataforma disponível na plataforma Steam. Neste belo conto de aventura e emoção, você assume o papel de Ori, uma pequena criatura guardiã da floresta, em sua jornada para salvar a terra mágica e encantadora que habita.

            Com uma jogabilidade fluida e desafiadora, Ori and the Blind Forest apresenta uma mistura envolvente de plataformas precisas, habilidades especiais e quebra-cabeças inteligentes. À medida que você explora o vasto mundo do jogo, encontrará uma variedade de desafios e inimigos únicos, que exigirão agilidade e habilidade para superar.

            Além da jogabilidade cativante, Ori and the Blind Forest também se destaca pela sua arte visual deslumbrante. Com cenários pintados à mão e animações suaves, o jogo cria uma atmosfera mágica e envolvente que imerge os jogadores em um mundo de fantasia.

            Acompanhando a experiência visual, a trilha sonora de Ori and the Blind Forest é uma obra-prima musical. Composições emocionantes e melódicas acentuam a atmosfera e a narrativa do jogo, evocando uma gama de emoções enquanto você explora e enfrenta os desafios.

            Mas Ori and the Blind Forest vai além da jogabilidade e da apresentação visual. O jogo também conta uma história emocionante e comovente, repleta de temas de amizade, sacrifício e redenção. À medida que Ori se aventura pela floresta, você descobrirá segredos antigos, encontrará personagens memoráveis e testemunhará o poder da conexão e do amor.

            Ori and the Blind Forest é um jogo que combina elementos de plataforma desafiadores, uma história comovente, arte visual impressionante e uma trilha sonora envolvente para oferecer uma experiência de jogo verdadeiramente especial. Prepare-se para se perder em um mundo mágico e descobrir os segredos da floresta com Ori.',
            'image' => 'OriAndTheBlindForest2.jpeg',
            'price' => 30.00,
            'release_date' => '2023-05-26',
            'age_rating' => 'L'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => '1',
            'title' => 'Celeste',
            'description' => 'Celeste é um premiado jogo de plataforma disponível na plataforma Steam. Nele, você acompanha a jornada de Madeline, uma jovem determinada a escalar a montanha Celeste, enfrentando desafios físicos e emocionais ao longo do caminho.

            Com uma jogabilidade precisa e fluida, Celeste oferece uma experiência de plataforma de alta qualidade. Você terá que dominar saltos precisos, realizar manobras acrobáticas e usar habilidades especiais para superar obstáculos traiçoeiros e desafios de plataforma criativos.

            Além das habilidades de plataforma, o jogo também explora temas como ansiedade e autoaceitação por meio da história envolvente de Madeline. Ao longo de sua jornada, ela encontrará personagens únicos, enfrentará seus próprios medos e aprenderá lições valiosas sobre perseverança e autoconfiança.

            Celeste se destaca não apenas pela sua jogabilidade desafiadora e cativante, mas também pela sua narrativa envolvente e pela bela trilha sonora composta por músicas atmosféricas e emocionantes.

            Com cenários pitorescos e uma arte de pixel art detalhada, o jogo cria uma atmosfera encantadora e imersiva que cativa os jogadores desde o início. Além disso, Celeste apresenta uma série de desafios opcionais, permitindo que os jogadores testem suas habilidades e busquem conquistas extras.

            Se você é fã de jogos de plataforma desafiadores, narrativas emocionantes e uma trilha sonora memorável, Celeste certamente proporcionará uma experiência inesquecível. Prepare-se para embarcar em uma jornada inspiradora e descobrir a verdadeira força interior de Madeline enquanto ela enfrenta a montanha Celeste.',
            'image' => 'CelesteCape.png',
            'price' => 89.00,
            'release_date' => '2023-05-26',
            'age_rating' => 'L'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => '2',
            'title' => 'Dredge',
            'description' => '
            Dredge é um jogo de estratégia e sobrevivência disponível na plataforma Steam. Neste jogo envolvente e desafiador, você assume o papel de um capitão de um submarino em um mundo pós-apocalíptico submerso.

            Em Dredge, você enfrentará um ambiente hostil, cheio de perigos submarinos e criaturas mortais. Sua missão é explorar as profundezas desconhecidas, coletar recursos valiosos e tomar decisões estratégicas para garantir a sobrevivência da sua tripulação.

            Você terá que gerenciar cuidadosamente os recursos limitados do seu submarino, como oxigênio, eletricidade e suprimentos, enquanto enfrenta desafios como criaturas marinhas hostis, destroços perigosos e condições climáticas adversas. Além disso, você poderá encontrar outras facções e tomar decisões morais complexas que afetarão o desenrolar da história.

            A jogabilidade de Dredge é uma mistura única de estratégia em tempo real, exploração submarina e combate tático. Você terá a oportunidade de aprimorar seu submarino, recrutar e treinar tripulantes especializados e desbloquear novas habilidades e equipamentos para enfrentar ameaças cada vez maiores.

            Com uma atmosfera sombria e imersiva, gráficos detalhados e uma trilha sonora envolvente, Dredge oferece uma experiência de jogo envolvente que desafiará suas habilidades estratégicas e seu espírito de sobrevivência.

            Prepare-se para mergulhar nas profundezas perigosas e descobrir os segredos ocultos no mundo submerso de Dredge. Você tem o que é preciso para sobreviver e prosperar neste ambiente implacável?',
            'image' => 'DredgeCape.webp',
            'price' => 25.00,
            'release_date' => '2023-05-26',
            'age_rating' => '12+'
        ]);
    }
}
