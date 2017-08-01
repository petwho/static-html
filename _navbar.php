<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better sm display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </button>
            <a class="navbar-brand" href="./">
                <img height="40px" src="./img/logo.png" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="./" class="<?= ($_SERVER['REQUEST_URI'] == '/') ? 'active' : '' ?>">Giới Thiệu</a></li>
                <li class="dropdown">
                    <a href="/product.php" class="dropdown-toggle <?= strpos($_SERVER['REQUEST_URI'], 'product.php') !== false ? 'active' : '' ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" data-filename="product.php">Sản Phẩm</a>
                    <ul class="dropdown-menu hidden-xs">
                        <li><a href="./product.php#aqua-kids" class="text-center" style="margin-left: 15px;">AquaKids</a></li>
                        <li class="hidden"><a href="./product.php#olive-collagen" class="text-center" style="margin-left: 15px;">Olive Collagen</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="/distribution.php" class="dropdown-toggle <?= strpos($_SERVER['REQUEST_URI'], 'distribution.php') !== false ? 'active' : '' ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" data-filename="distribution.php">Hệ Thống Phân Phối</a>
                    <ul class="dropdown-menu hidden-xs">
                        <li><a href="./distribution.php#aqua-kids" class="text-center" style="margin-left: -15px;">Danh Sách Bán AquaKids</a></li>
                        <li class="hidden"><a href="./distribution.php#olive-collagen" class="text-center" style="margin-left: -15px;">Danh Sách Bán Olive Collagen</a></li>
                    </ul>
                </li>
                <li><a href="/news.php">Tin Tức</a></li>
                <li class="dropdown">
                    <a href="/gallery.php" class="dropdown-toggle <?= strpos($_SERVER['REQUEST_URI'], 'gallery.php') !== false ? 'active' : '' ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" data-filename="gallery.php">GALLERY</a>
                    <ul class="dropdown-menu hidden-xs">
                        <li><a href="./gallery.php?view=aqua-kids" class="text-center" style="margin-left: 0px;">AquaKids</a></li>
                        <li class="hidden"><a href="./gallery.php?view=olive-collagen" class="text-center" style="margin-left: 0px;">Olive Collagen</a></li>
                        <li><a href="./gallery.php?view=community" class="text-center" style="margin-left: 0px;">Hoạt Động</a></li>
                    </ul>
                </li>
                <li><a href="./contact.php" class="<?= (strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false) ? 'active' : '' ?> last-child">Liên Hệ</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
