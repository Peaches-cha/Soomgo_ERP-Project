<nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a class="navbar-brand" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/dashboard.php">
                <img class="brand-img d-inline-block mr-5" src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/img/logo.png" alt="brand">Deepor
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body">
                                <span>MyPage<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/profile.php"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
