
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Islam</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css.css'); ?>">
</head>
<body>

<div id="container">
	<h1>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>
	<h1>20 Sifat Allah </h1>

	<div id="body">
		<table width="100%" border="1" >
			<thead>
				<tr>
					<th>Name</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="<?php echo base_url('allah/esa'); ?>">Esa</a></td>
					<td>hiji</td>
				</tr>
			</tbody>
		</table>
	</div>

	<p class="footer">
		<a href="<?php echo base_url(); ?>" >Kembali</a>
        Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
    </p>
</div>

</body>
</html>