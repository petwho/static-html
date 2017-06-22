<?php
function assetSrc($file)
{
    $asset_path = __DIR__;
    return $file.'?'.filemtime($asset_path.'/'.$file);
}
$bodyClass = 'product-page';
?>
<?php include '_head.php'; ?>
<div class="fullpage">
    <?php include '_navbar.php'; ?>
    <div class="container">
        <div class="row-gap-large"></div>
        <div class="row text-center">
            <div class="col-xs-12 col-md-6">
                <h2>Thức uống <span class="break-line">bảo vệ sức khoẻ</span></h2>
                <div class="row-gap-medium"></div>
                <a href="#olive-collagen" class="link-default"><img class="img-responsive" src="./img/olive_collagen.png" alt=""></a>
            </div>
            <div class="col-xs-12 col-md-6">
                <h2>Nước uống vitamin <span class="break-line">dành cho trẻ em</span></h2>
                <div class="row-gap-medium"></div>
                <a href="#aqua-kids" class="link-default"><img class="img-responsive" src="./img/aqua_kids.png" alt=""></a>
            </div>
        </div>
        <div class="row-gap-large"></div>
        <div class="row-gap-large"></div>
        <div class="text-center">
            <h4 class="nav-font inline"><a href="#aqua-kids" class="link-default text-pointer">Kéo Xuống</a></h4>
            <div class="text-center">
                <a href="#aqua-kids" class="link-default text-pointer"><span class="glyphicon glyphicon-chevron-down"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="container" id="aqua-kids">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-banner col-fill-bg">
            <h2 class="text-right">Nước uống vitamin <span class="break-line">dành cho trẻ em</span></h2>
            <div class="row-gap-medium"></div>
            <div class="banner">
                <img src="./img/aqua_banner.jpg" alt="">
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-text">
            <div class="content">
                <div class="separator bottom-gap hidden-xs hidden-sm"></div>
                <h3>Công Dụng</h3>
                <p>Bổ sung các vitamin, khoáng chất và lysine giúp bồi bổ sức khỏe, tăng cường sức đề kháng và giúp trẻ ăn ngon miệng.</p>
                <h3>Mô Tả Sản Phẩm</h3>
                <p>Nước uống vitamin dành cho trẻ em với 3 vị trái cây thơm ngon, sử dụng nguồn nguyên liệu Vitamin hàng đầu Thụy Sỹ.</p>
                <p>Là sự kết hợp hoàn hảo giữa giải khát và dinh dưỡng cho trẻ.</p>
                <p>Không sử dụng chất bảo quản.</p>
                <h3>Đối tượng sử dụng</h3>
                <p>Cho trẻ em trên 1 tuổi.</p>
                <h3>Cách dùng</h3>
                <p>Ngày dùng 3 lần, mỗi lần 1 hộp. Ngon hơn khi uống lạnh.</p>
                <h3>Bảo quản</h3><p>Nơi khô ráo, thoáng mát.</p>
                <h3>Quy cách đóng gói</h3><p>5 hộp / 1 lốc, và 8 lốc / 1 thùng.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-6">
            <div class="separator bottom-gap hidden-xs hidden-sm"></div>
        </div>
    </div>
</div>

<div class="row-gap-medium"></div>

<div class="container" id="olive-collagen">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-banner visible-xs visible-sm">
            <h2 class="text-right">Thức uống bảo vệ <span class="break-line">sức khoẻ</span></h2>
            <div class="row-gap-medium"></div>
            <div class="banner">
                <img src="./img/olive_banner.jpg" alt="">
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-text">
            <div class="content">
                <div class="separator bottom-gap hidden-xs hidden-sm"></div>
                <h3>Công Dụng</h3>
                <p>Bổ sung các chất dinh dưỡng cho da, giúp làm đẹp da, tăng tính đàn hồi, giảm nám da, chống lão hoá da.</p>
                <h3>Mô Tả Sản Phẩm</h3>
                <p>Sản phẩm cao cấp xuất xứ từ Mỹ.</p>
                <p>Là sự kết hợp hoàn hảo đầu tiên giữa Olive và Collagen.</p>
                <p>Giúp giảm vết thâm, đồi mồi và tàn nhang cho da sáng và khoẻ hơn từ bên trong.</p>
                <p>Dành cho phụ nữ và đàn ông hiện đại.</p>
                <h3>Đối tượng sử dụng</h3>
                <p>Cho người trên 12 tuổi, sử dụng cho cả nam và nữ.</p>
                <h3>Cách dùng</h3>
                <p>Uống mỗi ngày 1 chai.</p>
                <p>Lắc đều trước khi uống.</p>
                <p>Ngon hơn khi uống lạnh.</p>
                <p>Để xa tầm tay trẻ em.</p>
                <h3>Bảo quản</h3>
                <p>Nơi khô ráo, thoáng mát.</p>
                <h3>Quy cách đóng gói</h3>
                <p>1 hộp 7 chai.</p>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 hidden-xs hidden-sm col-banner col-fill-bg">
            <h2 class="text-right">Thức uống bảo vệ <span class="break-line">sức khoẻ</span></h2>
            <div class="row-gap-medium"></div>
            <div class="banner">
                <img src="./img/olive_banner.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="separator bottom-gap hidden-xs hidden-sm"></div>
        </div>
    </div>
</div>

<div class="row-gap-large"></div>
<?php include '_footer.php'; ?>