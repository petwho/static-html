<?php
function assetSrc($file)
{
    $asset_path = __DIR__;
    return $file.'?'.filemtime($asset_path.'/'.$file);
}
$bodyClass = 'contact-page';
?>
<?php include '_head.php'; ?>
<?php include '_navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h3 class="nav-font">Thông Tin Công Ty</h3>
            <h3>Địa Chỉ</h3>
            <p>130 Nguyễn Thị Minh Khai, Phường 6, Quận 3, Tp.HCM</p>
            <h3>Thời Gian Làm Việc</h3>
            <p>9h-17h từ Thứ 2 đến Thứ 6</p>
            <p>(nghỉ Thứ 7, Chủ Nhật và các ngày lễ, Tết)</p>
            <h3>Điện Thoại</h3>
            <p>08 39309310</p>
            <h3>Fax</h3>
            <p>08 39309310</p>
            <h3>Email</h3>
            <p>contact@viethope.com.vn</p>
        </div>
        <div class="col-xs-12 col-md-6">
            <h3 class="nav-font">Liên Hệ</h3>
            <div class="message alert alert-success hidden" role="alert">Thông Tin Đã Được Gửi Đi Thành Công</div>
            <div class="message hidden">Cảm ơn bạn đã liên hệ!<br>Chúng tôi sẽ gửi phản hồi tới bạn trong thời gian sớm nhất!</div>
            <div class="row-gap-small"></div>
            <form>
                <div class="form-group">
                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Tên" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="phone" class="form-control" id="exampleInputEmail1" placeholder="Điện Thoại">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Lời Nhắn"></textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-8">
                            <button class="nav-font btn btn-large btn-block btn-submit pull-right">GỬI</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('form').submit(function (e) {
            var $button = $(this).find('button');
            var $name = $(this).find('input[name="name"]');
            var $email = $(this).find('input[name="email"]');
            var $phone = $(this).find('input[name="phone"]');
            var $content = $(this).find('textarea[name="content"]');

            $button.prop('disabled', true);
            $.ajax({
                method: 'POST',
                url: '/form.php',
                data: {
                    name: $name.val(),
                    email: $email.val(),
                    phone: $phone.val(),
                    content: $content.val(),
                }
            }).success(function () {
                $('.message').removeClass('hidden');
                $('form').hide();
                $name.val('');
                $email.val('');
                $phone.val('');
                $content.val('');
                $button.prop('disabled', false);
            });
            e.preventDefault();
        });
    });
</script>
<?php include '_footer.php'; ?>