<?php
function assetSrc($file)
{
    $asset_path = __DIR__;
    return $file.'?'.filemtime($asset_path.'/'.$file);
}
$bodyClass = 'comming-soon-page';
?>
<?php include '_head.php'; ?>
<?php include '_navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center comming-soon">Comming Soon</h1>
        </div>
    </div>
</div>
<?php include '_footer.php'; ?>
