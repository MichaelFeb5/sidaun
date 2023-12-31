<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.html"><img src="http://sidaun.test/assets/images/sidebar/logo-sidaun.png" style="width: 200px; height: 100px;" alt="Logo" srcset="" /></a>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title" style="color: white;">Menu</li>

                <li class="sidebar-item <?= ($title == 'Dashboard') ? 'active' : '' ?>">
                    <a href="<?= base_url('/dashboard') ?>" class="sidebar-link">
                        <i class="bi bi-house-fill" style="color: white;"></i>
                        <span style="color: white;">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($title == 'Tanaman') ? 'active' : '' ?>">
                    <a href="<?= base_url('/tanaman') ?>" class="sidebar-link">
                        <i class="bi bi-tree-fill" style="color: white;"></i>
                        <span style="color: white;">Tanaman</span>
                    </a>
                </li>
                <li class="sidebar-item <?= ($title == 'Jenis') ? 'active' : '' ?>">
                    <a href="<?= base_url('/jenis') ?>" class="sidebar-link">
                        <i class="fa fa-book" style="color: white;"></i>
                        <span style="color: white;">Genus</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>