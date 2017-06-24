<?php
function assetSrc($file)
{
    $asset_path = __DIR__;
    return $file.'?'.filemtime($asset_path.'/'.$file);
}
$bodyClass = 'campaign-page';
?>
<?php include '_head.php'; ?>
<?php include '_navbar.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-7 col-xs-12">
			<h3 class="nav-font">VUI HÈ CÙNG AQUAKIDS</h3>
			<div class="row-gap-medium"></div>
			<p>Để đón hè cùng các bé, Aquakids sẽ dành tặng 400 phần quà cho các bé từ 3 – 12 tuổi (mỗi phần quà là 2 lốc Aquakids, mỗi lốc 5 hộp). Phụ huynh chỉ cần điền thông tin đăng ký để nhận quà.</p>

			<h3>Thời gian đăng ký</h3>
			<p>Từ 26/06 – 30/06/2017 (thứ Hai đến thứ Sáu)</p>

			<h3>Thời gian đến nhận quà</h3>
			<p>Từ 3/07 – 7/07/2017 (thứ Hai đến thứ Sáu)</p>

			<h3>Địa điểm nhận quà (9h00 – 16h30):</h3>

			<p>TP.HCM: Công Ty Hy Vọng Việt, 130 Nguyễn Thị Minh Khai, Quận 3</p>

			<p>Hà Nội: 104 Lò Đúc, Đống Mác, Hai Bà Trưng</p>
			<div class="row-gap-medium"></div>
			<p>Để biết thêm chi tiết, vui lòng gọi điện thoại đến số: 0976904809 (Hà Nội) hoặc số: 02839309310 (TP.HCM) từ 9h00 – 16h30.</p>
		</div>
		<div class="col-md-5 col-xs-12 form-wrapper">
			<h3 class="nav-font">Thông Tin Đăng Ký</h3>
			<div class="row-gap-medium"></div>
			<div class="message alert alert-success hidden" role="alert">Đăng ký thành công</div>
			<div class="message hidden">Cảm ơn bạn đã đăng ký nhận quà! Thông tin của bạn sẽ được chúng tôi xử lý trong thời gian sớm nhất.</div>
			<div class="message hidden row-gap-medium"></div>
			<form method="POST" action="campaign.php">
				<div class="form-group">
				    <input name="fullname" type="text" class="form-control" placeholder="Họ &amp; tên phụ huynh" required>
				</div>

				<div class="form-group">
				    <input name="phone" type="text" class="form-control" placeholder="Số ĐT" required>
				</div>

				<div class="form-group">
				    <input name="email" type="email" class="form-control" placeholder="Email" required>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-4">
						    <input name="child_age" type="number" class="form-control" placeholder="Tuổi của bé" required>
					    </div>
					    <div class="col-xs-8">
							<div class="radio">
								Giới Tính:
								<select name="child_gender" required>
									<option value="">---Chọn---</option>
									<option value="male">Nam</option>
									<option value="female">Nữ</option>
								</select>
							</div>
						</div>
					</div>
				</div>

				<div class="radio">
					Đăng ký nhận quà tại:
					<select name="location" required>
						<option value="">---Chọn---</option>
						<option value="Hà Nội">Hà Nội</option>
						<option value="Hồ Chí Minh">Hồ Chí Minh</option>
					</select>
				</div>
				<div class="clearfix"></div>
				<div class="row-gap-medium"></div>
				<button type="submit" class="nav-font btn btn-large btn-submit" style="padding-left: 50px; padding-right: 50px;">Đăng Ký</button>
				<div class="row-gap-medium"></div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('form').submit(function (e) {
            var $button = $(this).find('button');
            var $fullname = $(this).find('input[name="fullname"]');
            var $email = $(this).find('input[name="email"]');
            var $phone = $(this).find('input[name="phone"]');
            var $child_age = $(this).find('input[name="child_age"]');
            var $child_gender = $(this).find('select[name="child_gender"]');
            var $location = $(this).find('select[name="location"]');

            $button.prop('disabled', true);
            $.ajax({
                method: 'POST',
                url: '/process_campaign_data.php',
                data: {
                    fullname: $fullname.val(),
                    email: $email.val(),
                    phone: $phone.val(),
                    child_age: $child_age.val(),
                    child_gender: $child_gender.val(),
                    location: $location.val(),
                }
            }).success(function () {
                $('.message').removeClass('hidden');
                $('form').hide();
                // $name.val('');
                // $email.val('');
                // $phone.val('');
                // $button.prop('disabled', false);
            });
            e.preventDefault();
        });
    });
</script>
<?php include '_footer.php'; ?>