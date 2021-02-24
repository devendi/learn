<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Islam</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css.css'); ?>">
</head>
<body>

<div id="container">
	<h1>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>

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
					<td><a href="<?php echo base_url('general/Adzan'); ?>">Adzan</a></td>
					<td>Adzan</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/burok'); ?>">Burok</a></td>
					<td>burok</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/igomat'); ?>">Iqomat</a></td>
					<td>Iqomat</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/ilmu_islam'); ?>">Ilmu Islam </a></td>
					<td>Beberapa pembagian ilmu di dalam islam</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/hukum'); ?>">Hukum </a></td>
					<td>hukum dalam di dalam islam</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/hukum'); ?>">Anatomi Tubuh </a></td>
					<td>xxxxxxxx </td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/hukum'); ?>">Batu Batu </a></td>
					<td>xxxxxxxx </td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/hukum'); ?>">Makah / Ka’bah </a></td>
					<td>xxxxxxxx </td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/keywords'); ?>">Keywords </a></td>
					<td>Beberapa pembagian ilmu di dalam islam</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('general/Sanad_torekoh_1'); ?>">Sanad_torekoh_1 </a></td>
					<td>Sanad 1</td>
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