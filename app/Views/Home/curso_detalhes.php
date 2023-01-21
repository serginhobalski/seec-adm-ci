<?php echo $this->extend( 'Layout/site' );
?>

<!-- Renderizar título -->
<?php echo $this->section( 'titulo' );
?>
<?php echo $titulo;
?>
<?php $this->endSection();
?>

<!-- Custom styles -->
<?php echo $this->section( 'estilos' );
?>
<!-- Styles content here -->
<?php $this->endSection();
?>

<!-- Custom header -->
<?php echo $this->section( 'header' );
?>
<?php $this->endSection();
?>

<!-- Custom page content -->
<?php echo $this->section( 'conteudo' );
?>
<div class = 'page-content bg-white'>
<!-- inner page banner -->
<div class = 'page-banner ovbl-dark'
style = "background-image:url(<?php echo site_url('src/') ?>assets/images/banner/banner2.jpg);">
<div class = 'container'>
<div class = 'page-banner-entry pt-5'>
<br><br>
<h1 class = 'text-white mt-5'><?php echo $titulo;
?></h1>
<h3 class = 'text-white'><?php echo $subtitulo;
?></h3>
</div>
</div>
</div>
<!-- Breadcrumb row -->
<div class = 'breadcrumb-row'>
<div class = 'container'>
<ul class = 'list-inline'>
<li><a href = "<?php echo site_url('/') ?>"><i class = 'fa fa-home'></i> Home</a></li>
<li><?php echo $titulo;
?></li>
</ul>
</div>
</div>
<!-- Breadcrumb row END -->
<!-- inner page banner END -->

<div class = 'content-block'>
<!-- About Us -->
<div class = 'section-area section-sp1'>
<div class = 'container'>
<div class = 'row d-flex flex-row-reverse'>
<div class = 'col-lg-3 col-md-4 col-sm-12 m-b30'>
<div class = 'course-detail-bx'>
<div class = 'course-price'>
<!-- <del>R$ 300, 00</del> -->
<h4 class = 'price'>R$ <?php echo implode( ',', explode( '.', $curso->valor ) );
?></h4>
</div>
<div class = 'course-buy-now text-center'>
<a data-toggle = 'modal' data-target = '#ModalOpcoes' class = 'btn radius-xl text-uppercase'>Matricule-se já</a>
</div>
<div class = 'teacher-bx'>
<div class = 'teacher-info'>
<div class = 'teacher-thumb'>
<img src = "<?php echo site_url('src/') ?>assets/images/testimonials/pic1.jpg"
alt = '' />
</div>
<div class = 'teacher-name'>
<h5>Prª Eurides Obalski</h5>
<span>Diretora</span>
</div>
</div>
<div class = 'teacher-info'>
<div class = 'teacher-thumb'>
<img src = "<?php echo site_url('src/') ?>assets/images/testimonials/pic3.jpg"
alt = '' />
</div>
<div class = 'teacher-name'>
<h5>Pr Sergio Filho</h5>
<span>Coordenador</span>
</div>
</div>
</div>
<div class = 'cours-more-info'>
<div class = 'review'>
<span><i class = 'fa fa-bookmark'></i></span>
<ul class = 'cours-star'>
<li class = 'active'><i class = 'fa fa-star'></i></li>
<li class = 'active'><i class = 'fa fa-star'></i></li>
<li class = 'active'><i class = 'fa fa-star'></i></li>
<li class = 'active'><i class = 'fa fa-star'></i></li>
<li class = 'active'><i class = 'fa fa-star'></i></li>
</ul>
</div>
<div class = 'price categories'>
<span>Categoria</span>
<h5 class = 'text-primary'><?php echo strtoupper( $curso->categoria ) ?></h5>
</div>
</div>
<div class = 'course-info-list scroll-page'>
<ul class = 'navbar'>
<li><a class = 'nav-link' href = '#overview'><i class = 'ti-clipboard'></i>Visão Geral</a>
</li>
<li><a class = 'nav-link' href = '#curriculum'><i

class = 'ti-bookmark-alt'></i>Disciplinas</a></li>
<li><a class = 'nav-link' href = '#instructor'><i class = 'ti-user'></i>Instrutores</a>
</li>

</ul>
</div>
</div>
</div>

<div class = 'col-lg-9 col-md-8 col-sm-12'>
<div class = 'courses-post'>
<div class = 'ttr-post-media media-effect'>
<?php if ( $curso->categoria === 'itq' ) : ?>
<a href = '#'><img
src = "<?php echo site_url('src/') ?>assets/images/blog/default/detalhe-itq.jpg"
alt = ''></a>
<?php elseif ( $curso->categoria === 'postulantes' ) : ?>
<a href = '#'><img
src = "<?php echo site_url('src/') ?>assets/images/blog/default/detalhe-postulantes.jpg"
alt = ''></a>
<?php elseif ( $curso->categoria === 'ministerial' ) : ?>
<a href = '#'><img
src = "<?php echo site_url('src/') ?>assets/images/blog/default/detalhe-ministerial.jpg"
alt = ''></a>
<?php endif;
?>
</div>
<div class = 'ttr-post-info'>
<div class = 'ttr-post-title '>
<h2 class = 'post-title'><?php echo $curso->nome ?></h2>
</div>
<div class = 'ttr-post-text'>
<p><?php echo $curso->descricao ?>.</p>
</div>
</div>
</div>
<div class = 'courese-overview' id = 'overview'>
<h4>Visão Geral</h4>
<div class = 'row'>
<div class = 'col-md-12 col-lg-4'>
<ul class = 'course-features'>
<li><i class = 'ti-book'></i> <span class = 'label'>Nº de Disciplinas</span> <span

class = 'value'><?php echo $qtd_disciplinas;
?></span></li>
</ul>
</div>
<div class = 'col-md-12 col-lg-8'>
<h5 class = 'm-b5'>Descrição</h5>
<p><b><?php echo $curso->nome ?> </b> <?php echo $curso->descricao ?></p>
</div>
</div>
</div>
<div class = 'm-b30' id = 'curriculum'>
<h4>Disciplinas</h4>
<ul class = 'curriculum-list'>
<li>
<ul>
<?php foreach ( $disciplinas as $disciplina ) : ?>
<li>
<div class = 'curriculum-list-box'>
<span>#</span> <?php echo $disciplina->disciplina_nome;
?>
</div>
<!-- <span><?php echo $disciplina->disciplina_descricao;
?></span> -->
</li>
<?php endforeach;
?>
</ul>
</li>
</ul>
</div>
<div class = '' id = 'instructor'>
<h4>Instrutores</h4>
<div class = 'instructor-bx'>
<div class = 'instructor-author'>
<img src = "<?php echo site_url('src/') ?>assets/images/testimonials/pic1.jpg" alt = ''>
</div>
<div class = 'instructor-info'>
<h6>Eurides Obalski </h6>
<span>Professora</span>
<ul class = 'list-inline m-tb10'>
<li><a href = '#' class = 'btn sharp-sm facebook'><i class = 'fa fa-facebook'></i></a>
</li>
<li><a href = '#' class = 'btn sharp-sm twitter'><i class = 'fa fa-twitter'></i></a>
</li>
<li><a href = '#' class = 'btn sharp-sm linkedin'><i class = 'fa fa-linkedin'></i></a>
</li>
<li><a href = '#' class = 'btn sharp-sm google-plus'><i

class = 'fa fa-google-plus'></i></a></li>
</ul>
<p class = 'm-b0'></p>
</div>
</div>
<div class = 'instructor-bx'>
<div class = 'instructor-author'>
<img src = "<?php echo site_url('src/') ?>assets/images/testimonials/pic3.jpg" alt = ''>
</div>
<div class = 'instructor-info'>
<h6>Sergio Filho </h6>
<span>Professor</span>
<ul class = 'list-inline m-tb10'>
<li><a href = '#' class = 'btn sharp-sm facebook'><i class = 'fa fa-facebook'></i></a>
</li>
<li><a href = '#' class = 'btn sharp-sm twitter'><i class = 'fa fa-twitter'></i></a>
</li>
<li><a href = '#' class = 'btn sharp-sm linkedin'><i class = 'fa fa-linkedin'></i></a>
</li>
<li><a href = '#' class = 'btn sharp-sm google-plus'><i

class = 'fa fa-google-plus'></i></a></li>
</ul>
<p class = 'm-b0'></p>
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
<?php $this->endSection();
?>

<!-- Modal -->
<?php echo $this->section( 'modal' );
?>
<!-- ModalLogin Opções -->
<div class = 'modal fade' id = 'ModalOpcoes' tabindex = '-1' role = 'dialog'>
<div class = 'modal-dialog' role = 'document'>
<div class = 'modal-content'>
<div class = 'modal-body'>
<div class = 'wm-modallogin-form wm-login-popup'>
<span class = 'wm-color'>Passos para matrícula no <?php echo $curso->nome ?></span>
<ul>
<?php if ( $curso->categoria === 'itq' ) : ?>
<li>
Realizar o pagamento no valor de R$ <?php echo implode( ',', explode( '.', $curso->valor ) ) ?>
através de: <br>
*PIX ( Chave telefone ): 91999812198 <span class = 'text-danger'>OU</span><br>
*Conta: Eurides de Assis Obalski <br>
Banco do Brasil | Ag: 1232-7 | Conta: 803582174-15
</li>
<li>
Enviar o comprovante do pagamento <a class = 'btn' href = ''>AQUI</a>
</li>
<?php elseif ( $curso->categoria === 'postulantes' ) : ?>
<li>
Realizar o pagamento no valor de R$ <?php echo implode( ',', explode( '.', $curso->valor ) ) ?>
através de: <br>
*PIX ( Chave telefone ): 91999812198 <span class = 'text-danger'>OU</span><br>
*Conta: Eurides de Assis Obalski <br>
Banco do Brasil | Ag: 1232-7 | Conta: 803582174-15
</li>
<li>
Enviar o comprovante do pagamento <a class = 'btn' href = ''>AQUI</a>
</li>
<?php elseif ( $curso->categoria === 'ministerial' ) : ?>
<li>
Não estamos aceitando inscrições para este curso no momento....
</li>
<?php endif;
?>
<hr>
</ul>
</div>
</div>
</div>
<div class = 'clearfix'></div>
</div>
</div>
<!-- ModalLogin Opções -->
<?php $this->endSection();
?>

<!-- Custom scripts -->
<?php echo $this->section( 'scripts' );
?>
<!-- Scripts content here -->
<?php $this->endSection();
?>