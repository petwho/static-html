<?php
function assetSrc($file)
{
    $asset_path = __DIR__;
    return $file.'?'.filemtime($asset_path.'/'.$file);
}
$bodyClass = 'distribution-page';
?>
<?php include '_head.php'; ?>
<div class="fullpage">
	<?php include '_navbar.php'; ?>
	<div class="container">
	    <div class="row">
	    	<div class="col-xs-12 col-md-10 col-md-offset-1">
	    		<!-- <div class="row">
			        <div class="col-xs-12 col-md-8 col-md-offset-2"> -->
						<video width="100%" controls>
							<source src="/assets/movie.mp4" type="video/mp4">
							<source src="/assets/movie.ogg" type="video/ogg">
							Your browser does not support the video tag.
						</video>
			        <!-- </div>
		        </div> -->
	        </div>
	    </div>
	    <div class="row-gap-small"></div>
	    <div class="text-center">
	        <h4 class="nav-font inline"><a href="#album" class="link-default text-pointer">ALBUM ẢNH</a></h4>
	        <div class="text-center">
	            <a href="#album" class="link-default text-pointer"><span class="glyphicon glyphicon-chevron-down"></span></a>
	        </div>
	    </div>
	</div>
</div>
<div class="container">
	<div class="row" id="album">
		<div class="col-xs-12 col-md-4">
			<div class="row">
				<div class="col-xs-12">
					<img src="/img/news-1.jpg" alt="" class="fullwidth">
				</div>
			</div>
			<div class="row-gap-small"></div>
			<div>
				<strong class="pull-left">HÌNH ẢNH AQUAKIDS</strong>
				<a target="_blank" class="see-more pull-right" href="http://www.webtretho.com/forum/f3156/aquakids-nuoc-uong-vitamin-dinh-duong-danh-cho-tre-voi-nguyen-lieu-tu-thuy-sy-nay-da-co-mat-tai-viet-nam-2433131/?utm_source=pr_homepage_selected"><small>XEM THÊM &gt;</small></a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="row">
				<div class="col-xs-12">
					<img src="/img/news-2.jpg" alt="" class="fullwidth">
				</div>
			</div>
			<div class="row-gap-small"></div>
			<div>
				<strong class="pull-left">HÌNH ẢNH OLIVE COLLAGEN</strong>
				<a target="_blank" class="see-more pull-right" href="http://www.webtretho.com/forum/f3156/aquakids-nuoc-uong-vitamin-dinh-duong-danh-cho-tre-voi-nguyen-lieu-tu-thuy-sy-nay-da-co-mat-tai-viet-nam-2433131/?utm_source=pr_homepage_selected"><small>XEM THÊM &gt;</small></a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="row">
				<div class="col-xs-12">
					<img src="/img/news-3.jpg" alt="" class="fullwidth">
				</div>
			</div>
			<div class="row-gap-small"></div>
			<div>
				<strong class="pull-left">HOẠT ĐỘNG AQUAKIDS TẠI CÁC TRƯỜNG HỌC</strong>
				<a target="_blank" class="see-more pull-right" href="http://www.webtretho.com/forum/f3156/aquakids-nuoc-uong-vitamin-dinh-duong-danh-cho-tre-voi-nguyen-lieu-tu-thuy-sy-nay-da-co-mat-tai-viet-nam-2433131/?utm_source=pr_homepage_selected"><small>XEM THÊM &gt;</small></a>
			</div>
		</div>
	</div>
</div>
<div class="row-gap-large"></div>
<?php include '_footer.php'; ?>
