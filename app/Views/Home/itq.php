<?php echo $this->extend('Layout/site'); ?>

<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<!-- Styles content here -->
<?php $this->endSection(); ?>

<!-- Custom header -->
<?php echo $this->section('header'); ?>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(<?php echo site_url('src/') ?>assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry pt-5">
                <br><br>
                <h1 class="text-white mt-5"><?php echo $titulo; ?></h1>
                <h3 class="text-white"><?php echo $subtitulo; ?></h3>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $titulo; ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->

    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row d-flex flex-row-reverse">
                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="course-detail-bx">
                            <div class="course-price">
                            </div>
                            <div class="course-buy-now text-center">
                                <a href="#matricula" class="btn radius-xl text-uppercase">Matrícula</a>
                            </div>
                            <div class="teacher-bx">
                                <div class="teacher-info">
                                    <div class="teacher-thumb">
                                        <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic1.jpg" alt="" />
                                    </div>
                                    <div class="teacher-name">
                                        <h5>Prª Eurides Obalski</h5>
                                        <span>Diretora</span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <div class="teacher-thumb">
                                        <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic3.jpg" alt="" />
                                    </div>
                                    <div class="teacher-name">
                                        <h5>Pr Sergio Filho</h5>
                                        <span>Coordenador</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cours-more-info">
                                <div class="review">
                                    <span><i class="fa fa-bookmark"></i></span>
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="price categories">
                                    <span>Categoria</span>
                                    <h5 class="text-primary">ITQ EAD</h5>
                                </div>
                            </div>
                            <div class="course-info-list scroll-page">
                                <ul class="navbar">
                                    <li><a class="nav-link" href="#overview"><i class="ti-clipboard"></i>Vião Geral</a></li>
                                    <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Currículo</a></li>
                                    <li><a class="nav-link" href="#matricula"><i class="ti-user"></i>Matrícula</a></li>
                                    <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instrutores</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="courses-post">
                            <div class="ttr-post-media media-effect">
                                <a href="#"><img src="<?php echo site_url('src/') ?>assets/images/blog/default/detalhe-itq.jpg" alt=""></a>
                            </div>
                            <div class="ttr-post-info">
                                <div class="ttr-post-title ">
                                    <h2 class="post-title">Instituto Teológico Quadrangular | EAD</h2>
                                </div>
                                <div class="ttr-post-text">
                                    <p>O ITQ EAD é um <b>Curso Livre em Teologia</b>, oferecido através da nossa plataforma de cursos, que habilita o membro leigo a tornar-se apto ao ministério Quadrangular.</p>
                                </div>
                            </div>
                        </div>
                        <div class="courese-overview" id="overview">
                            <h4>Visão Geral</h4>
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <ul class="course-features">
                                        <li><i class="ti-calendar"></i> <span class="label">Anos Letivos</span> <span class="value">3</span></li>
                                        <li><i class="ti-book"></i> <span class="label">Módulos<br> por ano</span> <span class="value">6</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Avaliações</span> <span class="value">Sim</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Certificação</span> <span class="value">Sim</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <h5 class="m-b5">Descrição</h5>
                                    <p><b>Instituto Teológico Quadrangular | EAD </b> - Uma escola vocacional evangélica que tem por objetivo promover a educação e a cultura na Igreja do Evangelho Quadrangular, a partir do estudo da teologia e das doutrinas bíblicas das Sagradas Escrituras, através da oferta do Curso Livre em Teologia na modalidade EAD.</p>
                                    <h5 class="m-b5">Certificação</h5>
                                    <p>A certificação do ITQ EAD é a mesma do ITQ presencial, e possui a mesma validade. Os alunos que concluem todos os 6 módulos do 1º ano (que equivale ao Curso Fundamental), recebem o <b>Certificado de Conclusão do Curso Fundamental de Teologia</b>, e os alunos que concluem todos os 3 anos letivos (1º, 2º e 3º anos) recebem o <b>Diploma de Conclusão do Curso Livre em Teologia</b>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="m-b30" id="curriculum">
                            <h4>Currículo</h4>
                            <ul class="curriculum-list">
                                <li>
                                    <h5>1º ANO</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>1. </span> Vivência Cristã
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>2. </span> Bibliologia
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>3. </span> Introdução à Teologia
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>4. </span> Metodologia do Trabalho Acadêmico
                                            </div>
                                            <span>Integração </span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>5. </span> Vida de Cristo e Espiritualidade
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>6. </span> Dons e Ministérios
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>7. </span> Pastoral Urbana
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>8. </span> Evangelho Quadrangular
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>9. </span> Discipulado
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>10. </span> Evangelismo
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>11. </span> Cidadania
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>12. </span> Introdução à Educação Cristã
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>13. </span> Hermenêutica
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>14. </span> Administração Eclesiástica
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>15. </span> Aconselhamento e Orientação Familiar
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>16. </span> Homilética
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>17. </span> Métodos de Estudo Bíblico
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>18. </span> Teologia do Culto
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>19. </span> Liderança 1 - Gestão de Pessoal
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>20. </span> Teologia Pastoral
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                    </ul>
                                    <h5>2º ANO</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>1. </span> Cultura Bíblica
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>2. </span> Pentateuco (parte 1)
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>3. </span> Teologia do Antigo Testamento
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>4. </span> Teologia do Novo Testamento
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>5. </span> Hebreus
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>6. </span> Pentateuco (parte 2)
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>7. </span> Evangelhos (parte 1)
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>8. </span> Atos dos Apóstolos
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>9. </span> História de Israel (parte 1)
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>10. </span> História de Israel (parte 2)
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>11. </span> Evangelhos (parte 2)
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>12. </span> Epístolas Paulinas (parte 1)
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>13. </span> História de Israel (parte 3)
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>14. </span> Epístolas Paulinas (parte 2)
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>15. </span> Epístolas Gerais
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>16. </span> Livros Poéticos
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>17. </span> Missão Integral da Igreja
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>18. </span> Teologia Sistemática I
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                    </ul>
                                    <h5>3º ANO</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>1. </span> TCC - Trabalho de Conclusão de Curso
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>2. </span> Estágio Supervisionado
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>3. </span> Teologia Sistemática II (parte 1)
                                            </div>
                                            <span>Módulo 1</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>4. </span> Teologia Sistemática II (parte 2)
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>5. </span> História da Igreja (parte 1)
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>6. </span> Aconselhamento Pastoral
                                            </div>
                                            <span>Módulo 2</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>7. </span> Escatologia Bíblica (parte 1)
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>8. </span> Teologia Sistemática III (parte 1)
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>9. </span> História da Igreja (parte 2)
                                            </div>
                                            <span>Módulo 3</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>10. </span> Teologia Sistemática III (parte 2)
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>11. </span> Escatologia Bíblica III (parte 2)
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>12. </span> Liderança 2 - Gestão Ministerial
                                            </div>
                                            <span>Módulo 4</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>13. </span> Introdução à Missiologia
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>14. </span> Movimentos Religiosos Contemporâneos
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>15. </span> Liderança 3 - Mentoria
                                            </div>
                                            <span>Módulo 5</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>16. </span> Comunicação Social
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>17. </span> Teologia Contemporânea
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>18. </span> Ética Cristã
                                            </div>
                                            <span>Módulo 6</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="m-b30" id="matricula">
                            <h4>Matrícula</h4>
                            <ul class="curriculum-list">
                                <li>
                                    <h5>Passos para matrícula no Módulo 01 do 1º, 2º ou 3º ANO</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>-</span> Realizar o pagamento no valor de <strong>R$ 280,00</strong>
                                                através de:
                                            </div>
                                        </li>
                                        <li>
                                            <br>
                                            <ul>
                                                <li>*PIX ( Chave telefone ): <strong>91999812198</strong> OU</li>
                                                <li>*Conta: Eurides de Assis Obalski <br>
                                                    <strong>Banco do Brasil | Ag: 1232-7 | Conta: 803582174-15</strong>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>-</span>
                                                Enviar o comprovante do pagamento <a class='btn' href='https://forms.gle/VfxFggyMLNXwQMcq5' target="_blank"><i class="fas fa-clipboard-list"></i> Neste Formulário</a>, anexando também os seguintes documentos (imagem ou pdf) necessários para a matrícula: <br>
                                            </div>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>*RG</li>
                                                <li>*CPF</li>
                                                <li>*Título de Eleitor</li>
                                                <li>*Comprovante de endereço</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Passos para os demais módulos (02 ao 06) do 1º, 2º ou 3º ANO</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>-</span>
                                                Realizar o pagamento no valor de <strong>R$ 220,00</strong>
                                                através de: <br>
                                            </div>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>*PIX ( Chave telefone ): <strong>91999812198</strong> <span class='text-danger'>OU</span></li>
                                                <li>*Conta: Eurides de Assis Obalski
                                                </li>
                                                <li><strong> Banco do Brasil | Ag: 1232-7 | Conta: 803582174-15</strong></li>
                                            </ul>
                                        </li>
                                        <li>
                                            - Enviar o comprovante do pagamento <a class='btn' href='https://forms.gle/6wtFbc5nbjfqtCM96' target="_blank"><i class="fas fa-clipboard-list"></i> Neste Formulário</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="" id="instructor">
                            <h4>Instrutores</h4>
                            <div class="instructor-bx">
                                <div class="instructor-author">
                                    <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic1.jpg" alt="">
                                </div>
                                <div class="instructor-info">
                                    <h6>Eurides Obalski </h6>
                                    <span>Professora</span>
                                    <ul class="list-inline m-tb10">
                                        <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <p class="m-b0"></p>
                                </div>
                            </div>
                            <div class="instructor-bx">
                                <div class="instructor-author">
                                    <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic3.jpg" alt="">
                                </div>
                                <div class="instructor-info">
                                    <h6>Sergio Filho </h6>
                                    <span>Professor</span>
                                    <ul class="list-inline m-tb10">
                                        <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <p class="m-b0"></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>
<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>