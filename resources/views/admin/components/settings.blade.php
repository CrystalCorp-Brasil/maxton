        <button class="btn btn-grd btn-grd-info position-fixed bottom-0 end-0 my-3 me-4 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"><i class="material-icons-outlined">question_mark</i>Dicas</button>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
@if($helper == 'imgUpload')
            <div class="offcanvas-header border-bottom">
                <div class="">
                    <h5>Uploads</h5>
                    <p class="mb-0">Informações úteis para um Upload seguro</p>
                </div>
                <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas"><i class="material-icons-outlined">close</i></a>
            </div>
            <div class="offcanvas-body">
                <div class="row g-3">
                    <div class="col-12">
                        <h5>Tamanho da Imagem</h5>
                        <p class="text-justify">O tamanho da imagem deve ser no mínimo de <span class="badge bg-grd-royal py-1 ">512px</span> x <span class="badge bg-grd-royal py-1 ">288px</span> e no máximo de <span class="badge bg-grd-royal py-1 ">1920px</span> x <span class="badge bg-grd-royal py-1 ">1080px</span>. O tamanho máximo do arquivo deve ser de <span class="badge bg-grd-royal py-1 ">2048kb</span>.</p>
                        <p class="text-justify">Use o site <a href="https://tinypng.com/" target="_blank"><span class="badge bg-grd-info py-1 ">TinyPNG</span></a> para diminuir o tamanho do arquivo de suas imagens antes de fazer o Upload.</p>
                    </div>
                    <div class="col-12">
                        <h5>Título da Imagem</h5>
                        <p class="text-justify">O título da imagem será usado para apresentá-la na Galeria de Imagens do Site.</p>
                    </div>
                    <div class="col-12">
                        <h5>Depósito de Imagens</h5>
                        <p class="text-justify">Precisando de um local para guardar suas imagens na Web? Utilize o serviço gratuito da <a href="https://postimages.org/" target="_blank"><span class="badge bg-grd-info py-1 ">PostImages</span></a>.</p>
                    </div>
                </div>
            </div>
@endif
@if($helper == 'postUpload')
            <div class="offcanvas-header border-bottom">
                <div class="">
                    <h5>Publicações</h5>
                    <p class="mb-0">Informações úteis para uma Publicação segura</p>
                </div>
                <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas"><i class="material-icons-outlined">close</i></a>
            </div>
            <div class="offcanvas-body">
                <div class="row g-3">
                    <div class="col-12">
                        <h5>Título da Publicação</h5>
                        <p class="text-justify">um bom Título atrairá a atenção dos visitantes na seção de Publicações.</p>
                    </div>
                    <div class="col-12">
                        <h5>Categoria da Publicação</h5>
                        <p class="text-justify">Cada Publicação é separada de acordo com sua categoria. As Postagens serão divididas em Categorias no menu principal do Site e no menu Lateral de cada Categoria.</p>
                    </div>
                    <div class="col-12">
                        <h5>Matéria</h5>
                        <p class="text-justify">Matéria! Hora de colocar as brilhantes ideias no papel, no nosso caso, digitar as teclas para apresentar na tela. Escreva  o que tem para dizer aos visitantes e a nós também. Você pode adicionar imagens por link se sua imagem estiver hospedade ou Drop & Down. As opções de formatação são bem diversificadas.</p>
                    </div>
                    <div class="col-12">
                        <h5>Tamanho da Imagem</h5>
                        <p class="text-justify">O tamanho da imagem deve ser no mínimo de <span class="badge bg-grd-royal py-1 ">512px</span> x <span class="badge bg-grd-royal py-1 ">288px</span> e no máximo de <span class="badge bg-grd-royal py-1 ">1920px</span> x <span class="badge bg-grd-royal py-1 ">1080px</span>. O tamanho máximo do arquivo deve ser de <span class="badge bg-grd-royal py-1 ">2048kb</span>.</p>
                        <p class="text-justify">Use o site <a href="https://tinypng.com/" target="_blank"><span class="badge bg-grd-royal py-1 ">TinyPNG</span></a> para diminuir o tamanho do arquivo de suas imagens antes de fazer o Upload.</p>
                    </div>
                    <div class="col-12">
                        <h5>Título da Imagem</h5>
                        <p class="text-justify">O título da imagem será usado para apresentá-la na Galeria de Imagens do Site.</p>
                    </div>
                    <div class="col-12">
                        <h5>Depósito de Imagens</h5>
                        <p class="text-justify">Precisando de um local para guardar suas imagens na Web? Utilize o serviço gratuito da <a href="https://postimages.org/" target="_blank"><span class="badge bg-grd-royal py-1 ">PostImages</span></a>.</p>
                    </div>
                </div>
            </div>
@endif
@if($helper == 'catUpload')
            <div class="offcanvas-header border-bottom">
                <div class="">
                    <h5>Categorias</h5>
                    <p class="mb-0">Utilize o botão ao lado para adicionar uma nova Categoria, caso não encontre a desejada.</p>
                </div>
                <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas"><i class="material-icons-outlined">close</i></a>
            </div>
            <div class="offcanvas-body">
                <div class="row g-3">
                    <div class="col-12">
                        <h5>Título da Categoria</h5>
                        <p class="text-justify">Ao criar uma nova categoria, utilize um nome que reflita bem o conteúdo de sua Publicação.</p>
                    </div>
                </div>
            </div>
@endif
@if($helper == 'videoUpload')
            <div class="offcanvas-header border-bottom">
                <div class="">
                    <h5>Links</h5>
                    <p class="mb-0">Tem vídeos postados no <span class="badge bg-grd-danger py-1 ">Youtube</span>? Divulgue seus Links aqui.</p>
                </div>
                <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas"><i class="material-icons-outlined">close</i></a>
            </div>
            <div class="offcanvas-body">
                <div class="row g-3">
                    <div class="col-12">
                        <h5>Título do Vídeo</h5>
                        <p class="text-justify">Qual é o Título do seu vídeo?</p>
                    </div>
                    <div class="col-12">
                        <h5>Descrição do Vídeo</h5>
                        <p class="text-justify">Faça uma breve descrição do conteúdo do vídeo. Gameplay, Dicas, Tutoriais, etc...</p>
                    </div>
                    <div class="col-12">
                        <h5>Link do Vídeo</h5>
                        <p class="text-justify">Copie e cole o Link do seu Vídeo. Não sabe como? Abra o <span class="badge bg-danger py-1 ">Youtube</span> e vá ao vídeo que deseja linkar. Clique no botão <span class="badge bg-grd-royal py-1 ">COMPARTILHAR</span>. O link está no campo input ao lado do botão <span class="badge bg-grd-royal py-1 ">COPIAR</span> ao lado, exemplo: <span class="badge bg-grd-royal py-1 ">https://youtu.be/WesAW1f5KoQ?si=lWuXKnu1KYaEiz22</span>. Nesse exemplo o link está completo, mas para usar aqui, copie até o último caracter antes do sinal de <span class="badge bg-grd-royal py-1 ">?</span>, exemplo: <span class="badge bg-grd-royal py-1 ">https://youtu.be/WesAW1f5KoQ</span></p>
                    </div>
                    <div class="col-12">
                        <h5>Categoria do Vídeo</h5>
                        <p class="text-justify">Qual a Categoria do vídeo. Gameplay, Dicas, Tutoriais, etc...</p>
                    </div>
                    <div class="col-12">
                        <h5>Tamanho da Imagem</h5>
                        <p class="text-justify">O tamanho da imagem deve ser no mínimo de <span class="badge bg-grd-royal py-1 ">512px</span> x <span class="badge bg-grd-royal py-1 ">288px</span> e no máximo de <span class="badge bg-grd-royal py-1 ">1920px</span> x <span class="badge bg-grd-royal py-1 ">1080px</span>. O tamanho máximo do arquivo deve ser de <span class="badge bg-grd-royal py-1 ">2048kb</span>.</p>
                        <p class="text-justify">Use o site <a href="https://tinypng.com/" target="_blank"><span class="badge bg-grd-info py-1 ">TinyPNG</span></a> para diminuir o tamanho do arquivo de suas imagens antes de fazer o Upload.</p>
                    </div>
                    <div class="col-12">
                        <h5>Depósito de Imagens</h5>
                        <p class="text-justify">Precisando de um local para guardar suas imagens na Web? Utilize o serviço gratuito da <a href="https://postimages.org/" target="_blank"><span class="badge bg-grd-info py-1 ">PostImages</span></a>.</p>
                    </div>
                </div>
            </div>
@endif
@if($helper == 'charUpload')
            <div class="offcanvas-header border-bottom">
                <div class="">
                    <h5>Personagens</h5>
                    <p class="mb-0">Descreva mais sobre seu Personagem.</p>
                </div>
                <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas"><i class="material-icons-outlined">close</i></a>
            </div>
            <div class="offcanvas-body">
                <div class="row g-3">
                    <div class="col-12">
                        <h5>Nick do Personagem</h5>
                        <p class="text-justify">Qual é o nome do seu Personagem no <span class="badge bg-grd-royal py-1 ">DC Universe Online</span>?</p>
                    </div>
                    <div class="col-12">
                        <h5>Nome do Personagem</h5>
                        <p class="text-justify">Seu Personagem tem um alter-ego? (se não tiver, repita o Nick)</p>
                    </div>
                    <div class="col-12">
                        <h5>Biografia do Personagem</h5>
                        <p class="text-justify">Desenvolveu uma história para seu personagem? Então nos conte. Ficaremos felizes em saber suas motivações, origens, poderes. Nos conte a história do seu personagem.</p>
                    </div>
                    <div class="col-12">
                        <h5>Tamanho da Imagem</h5>
                        <p class="text-justify">O tamanho da imagem deve ser no mínimo de <span class="badge bg-grd-royal py-1 ">512px</span> x <span class="badge bg-grd-royal py-1 ">288px</span> e no máximo de <span class="badge bg-grd-royal py-1 ">1920px</span> x <span class="badge bg-grd-royal py-1 ">1080px</span>. O tamanho máximo do arquivo deve ser de <span class="badge bg-grd-royal py-1 ">2048kb</span>.</p>
                        <p class="text-justify">Use o site <a href="https://tinypng.com/" target="_blank"><span class="badge bg-grd-info py-1 ">TinyPNG</span></a> para diminuir o tamanho do arquivo de suas imagens antes de fazer o Upload. A imagem será a Thumb na apresentação do seu Personagem na seção de Personagens do site.</p>
                    </div>
                    <div class="col-12">
                        <h5>Depósito de Imagens</h5>
                        <p class="text-justify">Precisando de um local para guardar suas imagens na Web? Utilize o serviço gratuito da <a href="https://postimages.org/" target="_blank"><span class="badge bg-grd-info py-1 ">PostImages</span></a>.</p>
                    </div>
                </div>
            </div>
@endif
        </div>
