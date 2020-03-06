<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Beranda</a></li>
                        <li><a href="?bat=data-instansi"
                                class="<?= ($_GET['bat'] == 'data-instansi') ? 'menu-top-active' : '' ?>">Data
                                Instansi</a></li>
                        <li><a href=" ?bat=data-command-center"
                                class="<?= ($_GET['bat'] == 'data-command-center') ? 'menu-top-active' : '' ?>">Data
                                Commen
                                Center</a></li>
                        <li><a href="?bat=data-user"
                                class="<?= ($_GET['bat'] == 'data-user') ? 'menu-top-active' : '' ?>">Data
                                User</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>