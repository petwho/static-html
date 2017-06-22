<?php
function assetSrc($file)
{
    $asset_path = __DIR__;
    return $file.'?'.filemtime($asset_path.'/'.$file);
}
$bodyClass = 'distribution-page';
include '_head.php';

$viewPage = @$_GET['view'];
if (!$viewPage)
	include '_gallery_home.php';
else {
	$linkMap = [
		'aqua-kids' => [
			'thumbnail' => 'thumb_aqua_kids.png',
			'next' => 'olive-collagen',
			'prev' => 'community',
		],
		'olive-collagen' => [
			'thumbnail' => 'thumb_olive_collagen.png',
			'next' => 'community',
			'prev' => 'aqua-kids',
		],
		'community' => [
			'thumbnail' => 'thumb_community.png',
			'next' => 'aqua-kids',
			'prev' => 'olive-collagen',
		],
	];
	include '_gallery_view.php';
}
?>

<div class="row-gap-large"></div>
<?php include '_footer.php'; ?>
