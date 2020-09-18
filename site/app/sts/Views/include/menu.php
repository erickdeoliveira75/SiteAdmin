<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top header-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo URL; ?>">Santos Developer</a>
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php
                    foreach ($this->dados['menu'] as $menu) {
                        extract($menu);
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-white link-mouse" 
                               href="<?php echo URL . $endereco; ?>">
                                   <?php echo $nome_pagina; ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
