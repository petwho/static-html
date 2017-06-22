<?php
function assetSrc($file)
{
    $asset_path = __DIR__;
    return $file.'?'.filemtime($asset_path.'/'.$file);
}
$bodyClass = 'home-page';
?>
<?php include '_head.php'; ?>
<?php include '_navbar.php'; ?>
<div class="container intro">
    <h1 class="item-heading nav-font hidden-lg">Giới Thiệu</h1>
    <h1 class="item-heading hidden-xs hidden-sm hidden-md" data-item="0">Giới thiệu chung về công ty</h1>
    <h1 class="item-heading hidden" data-item="1">Nhiệm vụ</h1>
    <h1 class="item-heading hidden" data-item="2">Tầm nhìn</h1>
    <h1 class="item-heading hidden" data-item="3">Lý do chọn chúng tôi?</h1>
    <div id="carousel-wrapper">
        <ol class="carousel-indicators carousel-indexes">
            <li class="active" data-item="0">
                <a href="#">01</a>
            </li>
            <li data-item="1">
                <a href="#">02</a>
            </li>
            <li data-item="2">
                <a href="#">03</a>
            </li>
            <li data-item="3">
                <a href="#">04</a>
            </li>
        </ol>
    </div>

    <h3 class="hidden-lg">Giới thiệu chung về công ty</h3>
    <div class="row item item-0">
        <div class="col-xs-12 col-lg-4">
            <p>
            Công ty TNHH Hy Vọng Việt, tên tiếng Anh là VIET HOPE Ltd. Co., là nhà cung cấp và phân phối các sản phẩm chất lượng cao, hữu ích cho sức khỏe cộng đồng.<br>
            Công ty có văn phòng chính đặt tại Tp.Hồ Chí Minh, với hệ thống phân phối cho kênh tạp hóa, siêu thị, nhà thuốc, trường học, ở các tỉnh thành. Công ty có hệ thống kho lạnh bảo quản sản phẩm nhằm bảo đảm chất lượng hàng hóa tốt khi đến tay người tiêu dùng.
            </p>
        </div>
        <div class="col-xs-12 col-lg-4">
            <p>
            Hiện tại, công ty bắt đầu với 2 sản phẩm bảo vệ sức khỏe: nước uống Olive Collagen dành cho phụ nữ và nam giới, nước uống vitamin Aquakids dành cho trẻ em.<br>
            Cùng lớn mạnh với Viet Hope là đội ngũ nhân viên văn phòng và kinh doanh với hơn 30 người được đào tạo, nhiều kinh nghiệm, và năng nổ.
            </p>
        </div>
        <div class="col-xs-12 col-lg-4">
            <p>
            Lịch sử phát triển:<br>
            Năm 2015: thành lập Công Ty TNHH Hy Vọng Việt.<br>
            Năm 2016: Văn phòng đầu tiên được đặt tại TP.HCM.<br>
            Năm 2017: Bắt đầu đi vào hoạt động.
            </p>
        </div>
    </div>
    <h3 class="hidden-lg">Nhiệm vụ</h3>
    <div class="row hidden item item-1">
        <div class="col-xs-12">
            <p>Công ty TNHH Hy Vọng Việt cam kết luôn mang đến cho cộng đồng những sản phẩm sạch, an toàn, chất lượng, vì sức khỏe người tiêu dùng, bằng những công thức tối ưu.</p>
        </div>
    </div>
    <h3 class="hidden-lg">Tầm nhìn</h3>
    <div class="row hidden item item-2">
        <div class="col-xs-12">
            <p>Công ty TNHH Hy Vọng Việt đã và đang phấn đấu trở thành một trong những nhà cung cấp sản phẩm bảo vệ sức khỏe người tiêu dùng Việt Nam với chất lượng ưu việt nhất.</p>
        </div>
    </div>
    <h3 class="hidden-lg">Lý do chọn chúng tôi?</h3>
    <div class="row hidden item item-3">
        <div class="col-xs-12">
            <p>
            –  Hệ thống phân phối trải rộng.<br>
            –  Đội ngũ bán hàng chuyên nghiệp, nhiều kinh nghiệm.<br>
            –  Sẵn sàng hợp tác kinh doanh lâu dài với các đối tác uy tín.<br>
            –  Năng lực tài chính ổn định.
            </p>
        </div>
    </div>
    <div class="row bottom">
        <div class="col-xs-12">
            <div class="arrow-down">
                <a href="#" data-item=1><img width="50" height="50" src="./img/round_arrow_down.png" alt=""></a>
            </div>
            <h3 class="nav-font visible-lg">Giới Thiệu</h3>
        </div>
    </div>
</div>
<?php include '_footer.php'; ?>
