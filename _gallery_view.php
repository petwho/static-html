<?php include '_navbar.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">

			<!-- Wrapper for slides -->
			<div class="carousel" data-ride="carousel">
				<div class="carousel-inner">
				    <div class="item active">
				    	<img class="max-fullwidth" src="/img/<?= $linkMap[$viewPage]['thumbnail']; ?>" alt="Los Angeles">
				    </div>
			    </div>
			    <a class="left carousel-control" href="/gallery.php?view=<?= $linkMap[$viewPage]['prev']; ?>" data-slide="prev">
			    	<img src="/img/prev-btn.png" alt="">
			    </a>
			    <a class="right carousel-control" href="/gallery.php?view=<?= $linkMap[$viewPage]['next']; ?>" data-slide="next">
			    	<img src="/img/next-btn.png" alt="">
			    </a>
		    </div>
		</div>
	</div>
</div>
<div class="row-gap-large"></div>
<div style="background-color: #eeeeef;">
	<div class="row-gap-medium"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="carousel slide" id="bottom-carousel">
					<div class="carousel-inner">
						<?php $filenames = $dirnames = array_slice(scandir(__DIR__ . "/assets/gallery-" . $viewPage . "/"), 2); ?>

						<?php if ($viewPage == 'community'): ?>
							<?php $counter = $tmpCounter = 0; ?>
							<?php foreach ($dirnames as $dIndex => $dirname): ?>
								<?php $photos = array_slice(scandir(__DIR__ . "/assets/gallery-" . $viewPage . "/" . $dirname . "/"), 2); ?>
								<?php foreach ($photos as $pIndex => $photo): ?>
									<?php $tmpCounter++; ?>
								<?php endforeach; ?>
							<?php endforeach; ?>

							<?php foreach ($dirnames as $dIndex => $dirname): ?>
								<?php $photos = array_slice(scandir(__DIR__ . "/assets/gallery-" . $viewPage . "/" . $dirname . "/"), 2); ?>
								<?php foreach ($photos as $pIndex => $photo): ?>
									<?php if (($counter % 6) == 0): ?>
										<div class="item<?= $counter == 0 ? ' active' : ''?>">
									<?php endif; ?>
									<div class="col-xs-12 col-md-2">
										<div class="item-image" style="background-image: url('/assets/gallery-<?= $viewPage; ?>/<?= $dirname; ?>/<?= $photo; ?>')"></div>
									</div>
									<?php if (($counter % 6 == 5) || ($counter == $tmpCounter)): ?>
										</div>
									<?php endif; ?>
									<?php $counter++; ?>
								<?php endforeach; ?>
							<?php endforeach; ?>
						<?php else: ?>
							<?php foreach ($filenames as $index => $filename): ?>
								<?php if (($index % 6) == 0): ?>
									<div class="item<?= $index == 0 ? ' active' : ''?>">
								<?php endif; ?>

								<div class="col-xs-12 col-md-2">
									<div class="item-image" style="background-image: url('/assets/gallery-<?= $viewPage; ?>/<?= $filename; ?>')"></div>
								</div>

								<?php if (($index % 6 == 5) || ($index == (count($filenames) - 1))): ?>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<a class="left carousel-control" href="#bottom-carousel" data-slide="prev">
					<img class="btn-sm" src="/img/prev-btn-sm.png" alt="">
				</a>
				<a class="right carousel-control" href="#bottom-carousel" data-slide="next">
					<img class="btn-sm" src="/img/next-btn-sm.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="row-gap-medium"></div>
</div>
<?php $filenames = array_slice(scandir(__DIR__ . "/assets/gallery-" . $viewPage . "/"), 2); ?>
<?php foreach ($filenames as $index => $filename): ?>
	<style type="text/css">
		.a-super-crazy-css-class-name {
			background-image: url("/assets/gallery-<?= $viewPage; ?>/<?= $filename; ?>");
		}
	</style>
<?php endforeach; ?>
