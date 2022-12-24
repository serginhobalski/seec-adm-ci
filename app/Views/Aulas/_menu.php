<aside class="col-md-4">
    <div class="wm-student-dashboard-nav">
        <div class="wm-student-nav">
            <figure>
                <?php if (usuario_logado()->imagem != '') : ?>
                    <a href="#"><img style="border-radius: 50%; width: 60px;" src="<?php echo site_url("usuarios/imagem/" . usuario_logado()->imagem); ?>" alt=""></a>
                <?php else : ?>
                    <a href="#"><img style="border-radius: 50%; width: 60px;" src="<?php echo site_url('lms/'); ?>extra-images/avatar-menu.jpg" alt=""></a>
                <?php endif; ?>
            </figure>
            <div class="wm-student-nav-text">
                <h6><?php echo usuario_logado()->nome ?></h6>
                <a href="<?php echo site_url('aulas/editarimagem') ?>">Alterar imagem</a>
            </div>
            <ul>
                <li class="<?php echo ($slug === 'aulas' ? 'active' : ''); ?>">
                    <a href="<?php echo site_url('aulas') ?>">
                        <i class="fa fa-dashboard"></i>
                        Painel
                    </a>
                </li>
                <li class="<?php echo ($slug === 'perfil' ? 'active' : ''); ?>">
                    <a href="<?php echo site_url('aulas/perfil') ?>">
                        <i class="wmicon-avatar"></i>
                        Perfil
                    </a>
                </li>
                <li class="<?php echo ($slug === 'cursos' ? 'active' : ''); ?>">
                    <a href="<?php echo site_url('aulas/cursos') ?>">
                        <i class="wmicon-book"></i>
                        Meus cursos
                    </a>
                </li>
                <li class="<?php echo ($slug === 'mensagens' ? 'active' : ''); ?>">
                    <a href="<?php echo site_url('aulas/mensagens') ?>">
                        <i class="fa fa-comment"></i>
                        Mensagens
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('logout') ?>">
                        <i class="wmicon-arrow"></i>
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>