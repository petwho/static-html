<?php
function assetSrc($file)
{
    $asset_path = __DIR__;
    return $file.'?'.filemtime($asset_path.'/'.$file);
}
require 'vendor/autoload.php';
use Mailgun\Mailgun;
session_start();

$config = require('./.env.php');

$dbhost = $config['DB_HOST'];
$dbuser = $config['DB_USER'];
$dbpass = $config['DB_PASS'];
$dbname = $config['DB_NAME'];
$bodyClass = 'customers-page';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Error connecting to database: " . $conn->connect_error);
} 
?>
<?php include '_head.php'; ?>
<?php include '_navbar.php'; ?>
<?php if (@$_GET['code'] == $config['CODE']): ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<table class="table table-striped">
			<thead>
				<tr>
					<th>STT</th>
					<th>Họ Tên</th>
					<th>Số ĐT</th>
					<th>Email</th>
					<th>Tuổi Bé</th>
					<th>Giới Tính Bé</th>
					<th>Địa Chỉ</th>
				</tr>
			</thead>

			<?php
			$i = 0;
			$sql = "SELECT * FROM customers";
			$result = $conn->query($sql);
			?>
			<?php if ($result->num_rows > 0): ?>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?= ++$i; ?></td>
					<td><?= $row['fullname']; ?></td>
					<td><?= $row['phone']; ?></td>
					<td><?= $row['email']; ?></td>
					<td><?= $row['child_age']; ?></td>
					<td><?= $row['child_gender']; ?></td>
					<td><?= $row['location']; ?></td>
				</tr>

			<?php endwhile; ?>
			<?php endif; ?>

			</table>
		</div>
	</div>
<?php endif; ?>

<?php $conn->close(); ?>
