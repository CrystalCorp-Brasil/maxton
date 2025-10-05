@extends('site.layouts.layout')
@section('headTitle')Termos de Uso @endsection
@section('content')
            @include('site.layouts.header')
            <section class="py-0">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col d-none d-lg-block p-0">
                            <div class="col-lg-12 p-6 card">
                                <p class="wow fadeInUp mt-5 text-justify" data-wow-delay=".2s">Seja bem-vindo à CrystalCorp Brasil.</p>
                                <p class="wow fadeInUp mt-15 text-justify" data-wow-delay=".6s">Leia com atenção todos os termos abaixo.</p>
                                <p class="wow fadeInUp text-justify" data-wow-delay=".8s">Este documento, e todo o conteúdo do site é oferecido por <span class="text-info">CRYSTALCORP BRASIL</span>, neste termo representado apenas por <span class="text-info">CORPORAÇÃO</span>, que regulamenta todos os direitos e obrigações com todos que acessam o site, denominado neste termo como <span class="text-green">VISITANTE</span>, reguardado todos os direitos previstos na legislação, trazem as cláusulas abaixo como requisito para acesso e visita do mesmo, situado no endereço <a href="{{ route('home') }}" class="text-decoration-none">{{ route('home') }}</a>.</p>
                                <p class="wow fadeInUp text-justify" data-wow-delay=".8s">A permanência no website implica-se automaticamente na leitura e aceitação tácita do presente termos de uso a seguir. Este termo foi atualizado pela última vez em 14 de setembro de 2021.</p>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading1"><button class="accordion-button fw-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"> 1. DA FUNÇÃO DO SITE</button></h2>
                                        <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="text-justify">Este site foi criado e desenvolvido com a função de trazer conteúdo informativo de alta qualidade e divulgação de prestação de serviço. A <span class="text-info">CORPORAÇÃO</span> busca através da criação de conteúdo de alta qualidade, desenvolvido por profissionais da área, trazer o conhecimento ao alcance de todos, assim como a divulgação dos próprios serviços.</p>
                                                <p class="text-justify">Nesta plataforma, poderá ser realizado tanto a divulgação de material original de alta qualidade, assim como a divulgação de produtos de e-commerce.</p>
                                                <p class="text-justify">Todo o conteúdo presente neste site foi desenvolvido buscando fontes e materiais de confiabilidade, assim como são baseados em estudos sérios e respeitados, através de pesquisa de alta nível.</p>
                                                <p class="text-justify">Todo o conteúdo é atualizado periodicamente, porém, pode conter em algum artigo, vídeo ou imagem, alguma informação que não reflita a verdade atual, não podendo a <span class="text-info">CORPORAÇÃO</span> ser responsabilizada de nenhuma forma ou meio por qualquer conteúdo que não esteja devidamente atualizado.</p>
                                                <p class="text-justify">É de responsabilidade do usuário de usar todas as informações presentes no site com senso crítico, utilizando apenas como fonte de informação, e sempre buscando especialistas da área para a solução concreta do seu conflito.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading2"><button class="accordion-button fw-black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2"> 2. DO ACEITE DOS TERMOS</button></h2>
                                        <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="text-justify">Este documento, chamado “Termos de Uso”, aplicáveis a todos os <span class="text-green">VISITANTES</span> do site, foi desenvolvido por Diego Castro Advogado – OAB/PI 15.613, modificado com permissão para este site.</p>
                                                <p class="text-justify">Este termo especifica e exige que todo <span class="text-green">VISITANTES</span> ao acessar o site da <span class="text-info">CORPORAÇÃO</span>, leia e compreenda todas as cláusulas do mesmo, visto que ele estabelece entre a <span class="text-info">CORPORAÇÃO</span> e o <span class="text-green">VISITANTE</span> direitos e obrigações entre ambas as partes, aceitos expressamente pelo <span class="text-green">VISITANTE</span> a permanecer navegando no site da <span class="text-info">CORPORAÇÃO</span>.</p>
                                                <p class="text-justify">Ao continuar acessando o site, o <span class="text-green">VISITANTE</span> expressa que aceita e entende todas as cláusulas, assim como concorda integralmente com cada uma delas, sendo este aceite imprescindível para a permanência na mesma. Caso o <span class="text-green">VISITANTE</span> discorde de alguma cláusula ou termo deste contrato, o mesmo deve imediatamente interromper sua navegação de todas as formas e meios.</p>
                                                <p class="text-justify">Este termo pode e irá ser atualizado periodicamente pela <span class="text-info">CORPORAÇÃO</span>, que se resguarda no direito de alteração, sem qualquer tipo de aviso prévio e comunicação. É importante que o <span class="text-green">VISITANTE</span> confira sempre se houve movimentação e qual foi a última atualização do mesmo no começo da página.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading3"><button class="accordion-button fw-black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3"> 3. DO GLOSSÁRIO</button></h2>
                                        <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="text-justify">Este termo pode conter algumas palavras específicas que podem não se de conhecimento geral. Entre elas:</p>
                                                <p class="text-justify"><span class="text-green">VISITANTE</span>: Todo e qualquer usuário do site, de qualquer forma e meio, que acesse através de computador, notebook, tablet, celular ou quaisquer outros meios, o website ou plataforma da <span class="text-info">CORPORAÇÃO</span>.</p>
                                                <p class="text-justify">NAVEGAÇÃO: O ato de visitar páginas e conteúdo do website ou plataforma da <span class="text-info">CORPORAÇÃO</span>.</p>
                                                <p class="text-justify">COOKIES: Pequenos arquivos de textos gerados automaticamente pelo site e transmitido para o navegador do <span class="text-green">VISITANTE</span>, que servem para melhorar a usabilidade do <span class="text-green">VISITANTE</span>.</p>
                                                <p class="text-justify">LOGIN: Dados de acesso do <span class="text-green">VISITANTE</span> ao realizar o cadastro junto a <span class="text-info">CORPORAÇÃO</span>, dividido entre usuário e senha, que dá acesso a funções restritas do site.</p>
                                                <p class="text-justify">HIPERLINKS: São links clicáveis que podem aparecer pelo site ou no conteúdo, que levam para outra página da <span class="text-info">CORPORAÇÃO</span> ou site externo.</p>
                                                <p class="text-justify">OFFLINE: Quando o site ou plataforma se encontra indisponível, não podendo ser acessado externamente por nenhum usuário.</p>
                                                <p class="text-justify">Em caso de dúvidas sobre qualquer palavra utilizada neste termo, o <span class="text-green">VISITANTE</span> deverá entrar em contato com a <span class="text-info">CORPORAÇÃO</span> através dos canais de comunicação encontradas no site.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading4"><button class="accordion-button fw-black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4"> 4. DO ACESSO AO SITE</button></h2>
                                        <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="text-justify">O site e plataforma funcionam normalmente 24 (vinte e quatro) horas por dia, porém podem ocorrer pequenas interrupções de forma temporária para ajustes, manutenção, mudança de servidores, falhas técnicas ou por ordem de força maior, que podem deixar o site indisponível por tempo limitado.</p>
                                                <p class="text-justify">A <span class="text-info">CORPORAÇÃO</span> não se responsabiliza por nenhuma perda de oportunidade ou prejuízos que esta indisponibilidade temporária possa gerar aos usuários.</p>
                                                <p class="text-justify">Em caso de manutenção que exigirem um tempo maior, a <span class="text-info">CORPORAÇÃO</span> irá informar previamente aos clientes da necessidade e do tempo previsto em que o site ou plataforma ficará offline.</p>
                                                <p class="text-justify">O acesso ao site só é permitido a maiores de 18 anos de idade ou que possuírem capacidade civil plena. Para acesso de menores de idade, é necessária a expressa autorização dos pais ou tutores, ficando o mesmo responsáveis sobre qualquer compra ou acesso efetuados pelo mesmo.</p>
                                                <p class="text-justify">Caso seja necessário realizar um cadastro junto a plataforma, onde o <span class="text-green">VISITANTE</span> deverá preencher um formulário com seus dados e informações, para ter acesso a alguma parte restrita, ou realizar alguma compra.</p>
                                                <p class="text-justify">Todos os dados estão protegidos conforme a Lei Geral de Proteção de Dados, e ao realizar o cadastro junto ao site, o <span class="text-green">VISITANTE</span> concorda integralmente com a coleta de dados conforme a Lei e com a Política de Privacidade da <span class="text-info">CORPORAÇÃO</span>.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading5"><button class="accordion-button fw-black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5"> 5. DA LICENÇA DE USO E CÓPIA</button></h2>
                                        <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="text-justify">O <span class="text-green">VISITANTE</span> poderá acessar todo o conteúdo do website, como artigos, vídeos, imagens, produtos e serviços, não significando nenhum tipo de cessão de direito ou permissão de uso, ou de cópia dos mesmo.</p>
                                                <p class="text-justify">Todos os direitos são preservados, conforme a legislação brasileira, principalmente na Lei de Direitos Autorais (regulamentada na Lei nº 9.610/18), assim como no Código Civil brasileiro (regulamentada na Lei nº 10.406/02), ou quaisquer outras legislações aplicáveis.</p>
                                                <p class="text-justify">Todo o conteúdo do site é protegido por direitos autorais, e seu uso, cópia, transmissão, venda, cessão ou revenda, deve seguir a lei brasileira, tendo a <span class="text-info">CORPORAÇÃO</span> todos os seus direitos reservados, e não permitindo a cópia ou utilização de nenhuma forma e meio, sem autorização expressa e por escrita da mesma.</p>
                                                <p class="text-justify">A <span class="text-info">CORPORAÇÃO</span> poderá em casos concretos permitir pontualmente exceções a este direito, que serão claramente destacados no mesmo, com a forma e permissão de uso do conteúdo protegido. Este direito é revogável e limitado as especificações de cada caso.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading6"><button class="accordion-button fw-black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6"> 6. DAS OBRIGAÇÕES</button></h2>
                                        <div class="accordion-collapse collapse" id="collapse6" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="text-justify">O <span class="text-green">VISITANTE</span> ao utilizar o website da <span class="text-info">CORPORAÇÃO</span>, concorda integralmente em:</p>
                                                <p class="text-justify">De nenhuma forma ou meio realizar qualquer tipo de ação que tente invadir, hackear, destruir ou prejudicar a estrutura do site, plataforma da <span class="text-info">CORPORAÇÃO</span> ou de seus parceiros comerciais. Incluindo-se, mas não se limitando, ao envio de vírus de computador, de ataques de DADOS, de acesso indevido por falhas da mesma ou quaisquer outras forma e meio.</p>
                                                <p class="text-justify">De não realizar divulgação indevida nos comentários do site de conteúdo de SPAM, Empresas concorrentes, vírus, conteúdo que não possua direitos autorais ou quaisquer outros que não seja pertinente a discussão daquele texto, vídeo ou imagem.</p>
                                                <p class="text-justify">Da proibição em reproduzir qualquer conteúdo do site ou plataforma sem autorização expressa, podendo responder civil e criminalmente pelo mesmo.</p>
                                                <p class="text-justify">Com a Política de Privacidade do site, assim como tratamos os dados referentes ao cadastro e visita no site, podendo a qualquer momento e forma, requerer a exclusão dos mesmos, através do formulário de contato.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading7"><button class="accordion-button fw-black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7"> 7. DA MONETIZAÇÃO E PUBLICIDADE</button></h2>
                                        <div class="accordion-collapse collapse" id="collapse7" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="text-justify">A <span class="text-info">CORPORAÇÃO</span> pode alugar ou vender espaços publicitários na plataforma, ou no site, diretamente aos anunciantes, ou através de Empresas especializadas como o Adsense (Google), Taboola ou outras plataformas especializadas.</p>
                                                <p class="text-justify">Essas publicidades não significam nenhuma forma de endosso ou responsabilidade pelos mesmos, ficando o <span class="text-green">VISITANTE</span> responsável pelas compras, visitas, acessos ou quaisquer ações referentes as estas Empresas.</p>
                                                <p class="text-justify">Todas as propagandas no site ou plataforma serão claramente destacadas como publicidade, como forma de disclaimer da <span class="text-info">CORPORAÇÃO</span> e de conhecimento do <span class="text-green">VISITANTE</span>.</p>
                                                <p class="text-justify">Em casos de compra de produtos ou serviços, será possível a devolução em até 07 (sete) dias, conforme o Código de Defesa do Consumidor.</p>
                                                <p class="text-justify">Estes anúncios podem ser selecionados pela <span class="text-info">CORPORAÇÃO</span> de publicidade automaticamente, conforme as visitas recentes do <span class="text-green">VISITANTE</span>, assim como baseado no seu histórico de busca, conforme as políticas de acesso da plataforma.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading8"><button class="accordion-button fw-black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8"> 8. DOS TERMOS GERAIS</button></h2>
                                        <div class="accordion-collapse collapse" id="collapse8" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="text-justify">O Site irá apresentar hiperlinks durante toda a sua navegação, que podem levar diretamente para outra página da <span class="text-info">CORPORAÇÃO</span> ou para sites externos.</p>
                                                <p class="text-justify">Apesar da <span class="text-info">CORPORAÇÃO</span> apenas criar links para sites externos de extrema confiança, caso o usuário acesse um site externo, a <span class="text-info">CORPORAÇÃO</span> não tem nenhuma responsabilidade pelo meio, sendo uma mera indicação de complementação de conteúdo, ficando o mesmo responsável pelo acesso, assim como sobre quaisquer ações que venham a realizar neste site.</p>
                                                <p class="text-justify">Em caso que ocorra eventuais conflitos judiciais entre o <span class="text-green">VISITANTE</span> e a <span class="text-info">CORPORAÇÃO</span>, o foro elegido para a devida ação será o da comarca da <span class="text-info">CORPORAÇÃO</span>, mesmo que haja outro mais privilegiado.</p>
                                                <p class="text-justify">Este Termo de uso é valido a partir de 14 de setembro de 2021.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
