<div class="slider" id="sliders">
    <div class="slider-head">
        <div class="d-block pt-4 pb-3 px-3">
            <img src="./images/user/user.png" alt="user" class="slider-img-user mb-2">
            <p class="fw-bold mb-0 lh-1 text-white">YourName</p>
            <small class="text-white">YourAccount@gmail.com</small>
        </div>
    </div>
    <div class="slider-body px-1">
        <nav class="nav flex-column">
            <a class="nav-link px-3 active" href="<?= base_url('/admin') ?>">
                <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
            </a>
            <a class="nav-link px-3" href="<?= base_url('/admin/change_jumbotron') ?>">
                <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Change Jumbotron
            </a>
            <hr class="soft my-1 bg-white">
            <a class="nav-link px-3" href="<?= base_url('/admin/change_keunggulan') ?>">
                <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Change Keunggulan
            </a>
            <hr class="soft my-1 bg-white">
            <a class="nav-link px-3" href="<?= base_url('/admin/topProduk') ?>">
                <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Change Top Produk
            </a>
            <hr class="soft my-1 bg-white">
            <a class="nav-link px-3" href="<?= base_url('/admin/changeTentangKami') ?>">
                <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Change Tentang Kami
            </a>
            <hr class="soft my-1 bg-white">
            <a class="nav-link px-3" href="<?= base_url('/admin/changeFooter') ?>">
                <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Change Footer
            </a>
            <hr class="soft my-1 bg-white">
            <a class="nav-link px-3" href="#">
                <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
            </a>
        </nav>
    </div>
</div>