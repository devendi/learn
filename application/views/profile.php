<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css.css'); ?>">
</head>
<body>

<div id="container">
	<h1><?php echo $user; ?></h1>

	<div id="body">
		<?php if (!empty($detil->keterangan)):  ?>
			<?php echo $detil->keterangan;  ?>
		<?php else: ?>
			"blom ada keterangan"
		<?php endif; ?>
	</div>

	<p class="footer"><a href="<?php echo base_url('malaikat'); ?>" >Kembali</a> Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>