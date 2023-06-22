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
            'genre_game_id' => 1,
            'title' => 'Hollow Knight - SilkSong',
            'short_description' => '
            "Hollow Knight: Silksong" é a aguardada sequência do aclamado jogo de ação e aventura. Assuma o papel de Hornet em um reino assombrado, enfrentando inimigos desafiadores e desvendando segredos em paisagens deslumbrantes.',
            'long_description' => '
            Hollow Knight: Silksong é a tão aguardada sequência do aclamado jogo de ação e aventura Hollow Knight. Nesta jornada épica, você será levado a um reino vasto e assombrado, mergulhado em segredos e mistérios profundos.

            Assumindo o papel de Hornet, uma heroína determinada e ágil, você enfrentará um mundo deslumbrante e perigoso repleto de inimigos desafiadores e paisagens deslumbrantes. Explore uma variedade de cenários ricamente detalhados, desde cidades em ruínas até florestas enigmáticas e cavernas sombrias, enquanto desvenda a história envolvente por trás do reino de seda e canção.

            Em Hollow Knight: Silksong, você enfrentará combates rápidos e intensos, dominando uma ampla gama de movimentos acrobáticos e habilidades especiais. Derrote inimigos únicos e chefes imponentes, desbloqueando novas habilidades e aprimorando seu poder ao longo do caminho.

            Além disso, você encontrará personagens fascinantes e cativantes, cada um com sua própria história e motivações. Conforme interage com eles, você desvendará segredos e desafios adicionais, expandindo ainda mais o mundo rico e intrincado de Hollow Knight: Silksong.

            A arte deslumbrante em estilo de animação em 2D, aliada a uma trilha sonora atmosférica e envolvente, cria uma atmosfera imersiva que transporta os jogadores para um reino de beleza e trevas. Prepare-se para se perder em um mundo misterioso e desafiador, repleto de descobertas emocionantes e batalhas épicas.

            Hollow Knight: Silksong promete oferecer uma experiência de jogo incrível, trazendo de volta a jogabilidade desafiadora, a atmosfera envolvente e a narrativa envolvente que fizeram do primeiro jogo um sucesso. Esteja preparado para se aventurar em um novo capítulo desta jornada inesquecível, desvendando os segredos do reino de seda e canção com Hornet.',
            'cover' => 'SilkSong-Cover.png',
            'banner' => 'SilkSong-Banner.jpg',
            'game_file_path' => 'SilkSong-Game.zip',
            'price' => 20.00,
            'discount' => 0.00,
            'release_date' => '2023-05-26',
            'age_rating' => 'L',
            'status' => 'Admission Active'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => 1,
            'title' => 'Ori and the Blind Forest',
            'short_description' => '"Ori and the Blind Forest" é um aclamado jogo de plataforma disponível na Steam. Nesta emocionante aventura, você assume o papel de Ori, uma pequena criatura guardiã da floresta, em uma jornada para salvar a terra mágica e encantadora em que vive.',
            'long_description' => '
            Ori and the Blind Forest é um aclamado jogo de plataforma disponível na plataforma Steam. Neste belo conto de aventura e emoção, você assume o papel de Ori, uma pequena criatura guardiã da floresta, em sua jornada para salvar a terra mágica e encantadora que habita.

            Com uma jogabilidade fluida e desafiadora, Ori and the Blind Forest apresenta uma mistura envolvente de plataformas precisas, habilidades especiais e quebra-cabeças inteligentes. À medida que você explora o vasto mundo do jogo, encontrará uma variedade de desafios e inimigos únicos, que exigirão agilidade e habilidade para superar.

            Além da jogabilidade cativante, Ori and the Blind Forest também se destaca pela sua arte visual deslumbrante. Com cenários pintados à mão e animações suaves, o jogo cria uma atmosfera mágica e envolvente que imerge os jogadores em um mundo de fantasia.

            Acompanhando a experiência visual, a trilha sonora de Ori and the Blind Forest é uma obra-prima musical. Composições emocionantes e melódicas acentuam a atmosfera e a narrativa do jogo, evocando uma gama de emoções enquanto você explora e enfrenta os desafios.

            Mas Ori and the Blind Forest vai além da jogabilidade e da apresentação visual. O jogo também conta uma história emocionante e comovente, repleta de temas de amizade, sacrifício e redenção. À medida que Ori se aventura pela floresta, você descobrirá segredos antigos, encontrará personagens memoráveis e testemunhará o poder da conexão e do amor.

            Ori and the Blind Forest é um jogo que combina elementos de plataforma desafiadores, uma história comovente, arte visual impressionante e uma trilha sonora envolvente para oferecer uma experiência de jogo verdadeiramente especial. Prepare-se para se perder em um mundo mágico e descobrir os segredos da floresta com Ori.',
            'cover' => 'Ori-Thumb.jpeg',
            'banner' => 'Ori-Banner.jpg',
            'game_file_path' => 'Ori-Game.zip',
            'price' => 30.00,
            'discount' => 0.00,
            'release_date' => '2023-05-26',
            'age_rating' => 'L'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => 1,
            'title' => 'Celeste',
            'short_description' => '"Celeste" é um premiado jogo de plataforma disponível na plataforma Steam. Acompanhe a jornada de Madeline enquanto ela enfrenta desafios físicos e emocionais ao escalar a montanha Celeste.',
            'long_description' => 'Celeste é um premiado jogo de plataforma disponível na plataforma Steam. Nele, você acompanha a jornada de Madeline, uma jovem determinada a escalar a montanha Celeste, enfrentando desafios físicos e emocionais ao longo do caminho.

            Com uma jogabilidade precisa e fluida, Celeste oferece uma experiência de plataforma de alta qualidade. Você terá que dominar saltos precisos, realizar manobras acrobáticas e usar habilidades especiais para superar obstáculos traiçoeiros e desafios de plataforma criativos.

            Além das habilidades de plataforma, o jogo também explora temas como ansiedade e autoaceitação por meio da história envolvente de Madeline. Ao longo de sua jornada, ela encontrará personagens únicos, enfrentará seus próprios medos e aprenderá lições valiosas sobre perseverança e autoconfiança.

            Celeste se destaca não apenas pela sua jogabilidade desafiadora e cativante, mas também pela sua narrativa envolvente e pela bela trilha sonora composta por músicas atmosféricas e emocionantes.

            Com cenários pitorescos e uma arte de pixel art detalhada, o jogo cria uma atmosfera encantadora e imersiva que cativa os jogadores desde o início. Além disso, Celeste apresenta uma série de desafios opcionais, permitindo que os jogadores testem suas habilidades e busquem conquistas extras.

            Se você é fã de jogos de plataforma desafiadores, narrativas emocionantes e uma trilha sonora memorável, Celeste certamente proporcionará uma experiência inesquecível. Prepare-se para embarcar em uma jornada inspiradora e descobrir a verdadeira força interior de Madeline enquanto ela enfrenta a montanha Celeste.',
            'cover' => 'Celeste-Cover.png',
            'banner' => 'Celeste-Banner.jpeg',
            'game_file_path' => 'Celeste-Game.zip',
            'price' => 89.00,
            'discount' => 0.00,
            'release_date' => '2023-05-26',
            'age_rating' => 'L'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => 2,
            'title' => 'Dredge',
            'short_description' => '"Dredge" é um jogo de estratégia e sobrevivência disponível na plataforma Steam. Assuma o papel de um capitão de um submarino em um mundo pós-apocalíptico submerso, enfrentando perigos submarinos e criaturas mortais.',
            'long_description' => '
            Dredge é um jogo de estratégia e sobrevivência disponível na plataforma Steam. Neste jogo envolvente e desafiador, você assume o papel de um capitão de um submarino em um mundo pós-apocalíptico submerso.

            Em Dredge, você enfrentará um ambiente hostil, cheio de perigos submarinos e criaturas mortais. Sua missão é explorar as profundezas desconhecidas, coletar recursos valiosos e tomar decisões estratégicas para garantir a sobrevivência da sua tripulação.

            Você terá que gerenciar cuidadosamente os recursos limitados do seu submarino, como oxigênio, eletricidade e suprimentos, enquanto enfrenta desafios como criaturas marinhas hostis, destroços perigosos e condições climáticas adversas. Além disso, você poderá encontrar outras facções e tomar decisões morais complexas que afetarão o desenrolar da história.

            A jogabilidade de Dredge é uma mistura única de estratégia em tempo real, exploração submarina e combate tático. Você terá a oportunidade de aprimorar seu submarino, recrutar e treinar tripulantes especializados e desbloquear novas habilidades e equipamentos para enfrentar ameaças cada vez maiores.

            Com uma atmosfera sombria e imersiva, gráficos detalhados e uma trilha sonora envolvente, Dredge oferece uma experiência de jogo envolvente que desafiará suas habilidades estratégicas e seu espírito de sobrevivência.

            Prepare-se para mergulhar nas profundezas perigosas e descobrir os segredos ocultos no mundo submerso de Dredge. Você tem o que é preciso para sobreviver e prosperar neste ambiente implacável?',
            'cover' => 'Dredge-Cover.png',
            'banner' => 'Dredge-Banner.png',
            'game_file_path' => 'Dredge-Game.zip',
            'price' => 25.00,
            'release_date' => '2023-05-26',
            'age_rating' => '12+'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => 1,
            'title' => 'Undertale',
            'short_description' => 'Em "Undertale", você embarcará em uma jornada única e emocionante em um mundo cheio de personagens memoráveis e escolhas impactantes.',
            'long_description' => '
            "Undertale" é um jogo de RPG indie que oferece uma experiência única e emocionante. Nele, você assume o papel de um personagem que caiu em um mundo subterrâneo habitado por monstros. Sua missão é explorar esse mundo intrigante, interagir com os personagens e tomar decisões que afetarão o curso da história.

            O que torna "Undertale" especial são as escolhas que você faz ao longo do jogo. Você pode optar por lutar contra os monstros e derrotá-los em batalhas baseadas em turnos, ou pode escolher uma abordagem pacífica, procurando uma solução não violenta para resolver os conflitos. Suas decisões terão consequências reais e afetarão o desfecho da história.

            Além das escolhas morais, "Undertale" também oferece uma trilha sonora cativante, personagens carismáticos e uma narrativa envolvente. Prepare-se para se aventurar em um mundo cheio de mistérios, descobertas e encontros inesquecíveis em "Undertale".',
            'cover' => 'Undertale-Cover.png',
            'banner' => 'Undertale-Banner.png',
            'game_file_path' => 'Undertale-Game.zip',
            'price' => 45.00,
            'discount' => 0.00,
            'release_date' => '2023-05-26',
            'age_rating' => 'L'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => 1,
            'title' => 'Limbo',
            'short_description' => 'Em "Limbo", mergulhe em uma atmosfera sombria e intrigante enquanto embarca em uma jornada assustadora em busca de respostas.',
            'long_description' => '
            "Limbo" é um jogo de plataforma e quebra-cabeça aclamado pela crítica que o transportará para um mundo sombrio e enigmático. Nele, você assume o controle de um jovem garoto que acorda em uma floresta repleta de perigos e armadilhas mortais.

            Sua missão em "Limbo" é explorar esse mundo misterioso, resolver quebra-cabeças desafiadores e desvendar os segredos por trás dessa realidade perturbadora. Com uma atmosfera minimalista e um estilo visual em preto e branco, o jogo cria uma sensação de solidão e suspense que o envolverá desde o início.

            Além dos quebra-cabeças inteligentes, "Limbo" também apresenta uma trilha sonora minimalista que aumenta a tensão e a imersão na atmosfera do jogo. Prepare-se para uma jornada assustadora, cheia de desafios e descobertas em "Limbo".',
            'cover' => 'Limbo-Cover.png',
            'banner' => 'Limbo-Banner.jpeg',
            'game_file_path' => 'Limbo-Game.zip',
            'price' => 29.90,
            'discount' => 0.00,
            'release_date' => '2023-04-10',
            'age_rating' => '12+'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => 1,
            'title' => 'Cuphead',
            'short_description' => 'Em "Cuphead", embarque em uma aventura desafiadora e estilizada inspirada nos desenhos animados da década de 1930.',
            'long_description' => '
            "Cuphead" é um jogo de plataforma e ação que combina elementos clássicos de jogos de corrida e tiro. Inspirado pelos desenhos animados da década de 1930, o jogo oferece uma experiência visual única e encantadora.

            No jogo, você assume o papel de Cuphead, um personagem com uma cabeça em forma de xícara, e seu companheiro Mugman. Os dois personagens embarcam em uma jornada desafiadora para pagar uma dívida com o diabo. Para isso, eles devem enfrentar uma variedade de chefes e inimigos em batalhas intensas e cheias de ação.

            "Cuphead" é conhecido por sua dificuldade desafiadora, que requer reflexos rápidos e habilidades precisas. Cada encontro com um chefe é uma batalha épica, com padrões de ataque complexos e animações cativantes. Além das batalhas, o jogo também apresenta fases de plataforma com desafios adicionais.

            Com uma trilha sonora empolgante e gráficos deslumbrantes que remetem aos desenhos animados clássicos, "Cuphead" oferece uma experiência única e nostálgica para os jogadores. Prepare-se para uma aventura desafiadora e estilizada que vai testar suas habilidades e encantar seus olhos.',
            'cover' => 'Cuphead-Cover.png',
            'banner' => 'Cuphead-Banner.png',
            'game_file_path' => 'Cuphead-Game.zip',
            'price' => 59.99,
            'discount' => 0.00,
            'release_date' => '2023-02-18',
            'age_rating' => '10+'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => 1,
            'title' => "Five Nights at Freddy's - Sister Location",
            'short_description' => 'Em "Five Nights at Freddys - Sister Location", mergulhe em uma experiência aterrorizante em uma nova localização dos famosos animatrônicos assustadores.',
            'long_description' => '
            "Five Nights at Freddy\'s: Sister Location" é um jogo de terror em primeira pessoa que se passa em uma nova localização dos famosos animatrônicos assustadores. Prepare-se para mergulhar em uma experiência aterrorizante repleta de sustos e tensão.

            No jogo, você assume o papel de um técnico noturno contratado para monitorar e manter os animatrônicos em uma nova instalação chamada Sister Location. No entanto, você logo descobre que algo está terrivelmente errado, e os animatrônicos têm comportamentos muito mais assustadores e imprevisíveis do que nunca.

            A jogabilidade de "Five Nights at Freddy\'s: Sister Location" é baseada em gerenciamento de recursos, resolução de quebra-cabeças e sobrevivência. Você terá que monitorar as câmeras de segurança, controlar as portas e se esconder dos animatrônicos ameaçadores para sobreviver às cinco noites de terror.

            Além da jogabilidade intensa, o jogo também apresenta uma história intrigante e cheia de mistérios. À medida que você progride nas noites, você desvendará segredos sombrios e descobrirá a verdade por trás da Sister Location.

            Com gráficos atmosféricos e uma trilha sonora arrepiante, "Five Nights at Freddy\'s: Sister Location" proporciona uma experiência de terror imersiva que vai deixar você à beira do seu assento. Esteja preparado para enfrentar seus medos e descobrir os segredos ocultos da Sister Location.',
            'cover' => 'SisterLocation-Cover.png',
            'banner' => 'SisterLocation-Banner.png',
            'game_file_path' => 'SisterLocation-Game.zip',
            'price' => 24.99,
            'discount' => 0.00,
            'release_date' => '2023-03-15',
            'age_rating' => '16+'
        ]);

        Game::create([
            'developer_id' => 1,
            'genre_game_id' => 1,
            'title' => 'Inside',
            'short_description' => 'Em "Inside", embarque em uma jornada sombria e misteriosa em um mundo distópico cheio de enigmas e perigos.',
            'long_description' => '
            "Inside" é um jogo de plataforma e quebra-cabeças que o leva a uma jornada sombria e misteriosa em um mundo distópico. Desenvolvido pelos mesmos criadores de "Limbo", o jogo oferece uma experiência envolvente e cheia de suspense.

            No jogo, você controla um garoto que está explorando um ambiente sombrio e hostil, cheio de ameaças e segredos. À medida que avança no jogo, você encontrará quebra-cabeças desafiadores que exigem pensamento estratégico e habilidades de resolução de problemas para prosseguir.

            A atmosfera de "Inside" é intensa e perturbadora, com gráficos impressionantes e uma trilha sonora arrepiante que contribuem para a imersão na história. O jogo apresenta uma narrativa minimalista, deixando a interpretação aberta ao jogador e estimulando a reflexão sobre os temas abordados.

            Além da jogabilidade principal, "Inside" também oferece segredos e desafios extras para os jogadores descobrirem. Encontrar todos os segredos escondidos proporciona uma experiência ainda mais recompensadora e adiciona camadas adicionais à história do jogo.

            Prepare-se para mergulhar em um mundo obscuro e desafiador em "Inside". Descubra os mistérios que aguardam e teste suas habilidades de resolução de quebra-cabeças neste jogo cativante e intrigante.

            ',
            'cover' => 'Inside-Cover.png',
            'banner' => 'Inside-Banner.png',
            'game_file_path' => 'Inside-Game.zip',
            'price' => 19.99,
            'discount' => 0.00,
            'release_date' => '2023-01-10',
            'age_rating' => '12+'
        ]);

        Game::create([
            'developer_id' => 2,
            'genre_game_id' => 2,
            'title' => 'WhatsApp Simulator',
            'short_description' => 'Simule uma experiência realista do aplicativo de mensagens mais popular.',
            'long_description' => '
                O WhatsApp Simulator é um jogo que permite aos jogadores simular uma experiência autêntica do famoso aplicativo de mensagens. Com gráficos realistas e recursos interativos, você se sentirá como se estivesse usando o WhatsApp em seu dispositivo.

                No jogo, você poderá criar um perfil, adicionar contatos, enviar mensagens, compartilhar mídia e participar de grupos. Explore todas as funcionalidades do WhatsApp, incluindo chamadas de voz e vídeo, emojis, adesivos e muito mais. Personalize seu perfil e escolha entre uma variedade de temas e papéis de parede.

                Além disso, o WhatsApp Simulator também apresenta missões e desafios emocionantes. Desbloqueie conquistas, ganhe pontos e suba de nível à medida que você interage com seus contatos virtuais. Experimente conversas divertidas e intrigantes enquanto avança no jogo.

                Prepare-se para uma experiência imersiva e envolvente enquanto você simula o uso do WhatsApp em seu próprio dispositivo virtual. Baixe o WhatsApp Simulator agora e mergulhe no mundo das mensagens instantâneas!',
            'cover' => 'whatsapp-simulator-cover.png',
            'banner' => 'whatsapp-simulator-banner.png',
            'game_file_path' => 'whatsapp-simulator-game.zip',
            'price' => 4.99,
            'discount' => 0.00,
            'release_date' => '2023-05-15',
            'age_rating' => 'L',
            'status' => 'Admission'
        ]);
    }
}
