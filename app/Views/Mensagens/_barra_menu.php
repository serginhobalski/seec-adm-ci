<div class="email-menu-bar">
    <div class="compose-mail">
        <a href="<?php echo site_url('mensagens/criar') ?>" class="btn btn-block">Escrever</a>
    </div>
    <div class="email-menu-bar-inner">
        <ul>
            <li class="<?php echo ($subtitulo === 'entrada' ? 'active' : '') ?>">
                <a href="<?php echo site_url('mensagens') ?>">
                    <i class="fa fa-envelope-o"></i>Entrada
                    <span class="badge badge-success">
                        <?php echo $recebidas; ?>
                    </span></a>
            </li>
            <li class="<?php echo ($subtitulo === 'enviadas' ? 'active' : '') ?>">
                <a href="<?php echo site_url('mensagens/enviadas') ?>">
                    <i class="fa fa-send-o"></i>Enviadas
                    <span class="badge badge-info">
                        <?php echo $enviadas; ?>
                    </span></a>
            </li>
            <li class="<?php echo ($subtitulo === 'lixeira' ? 'active' : '') ?>">
                <a href="<?php echo site_url('mensagens/lixeira') ?>">
                    <i class="fa fa-trash-o"></i>Lixeira
                    <span class="badge badge-danger">
                        <?php echo $deletadas; ?>
                    </span></a>
            </li>
        </ul>
    </div>
</div>