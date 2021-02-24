<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css.css'); ?>">
</head>
<body>

<div id="container">
	<h1>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>

	<div id="body">
		<table width="100%" >
			<thead>
				<tr>
					<th>Keterangan</th>
					<th>Hijaiyah</th>
					<th style="width:5px" >No</th>
				</tr>
			</thead>
			<thead>
				<?php foreach ($row as $ind => $value) : ?>
					<?php if((($ind+1) % 2) == 0) { ?>
						<tr style="background:#f5f5f5" >
					<?php } else { ?>
						<tr>
					<?php } ?>
						<td><?php echo $value->keterangan; ?></td>
						<td align="right" ><a href="<?php echo base_url('Al-Quran/'.$value->no_arab); ?>"><?php echo $value->isi; ?></a></td>
						<td><?php echo $value->no_arab; ?></td>
					</tr>
				<?php endforeach;?>
			</thead>
		</table>
	</div>

	<p class="footer">
		<a href="<?php echo base_url(); ?>" >Kembali</a>
		<a>&nbsp;|| &nbsp;</a>
		<a href="<?php echo base_url('hijaiyah/hodam'); ?>" >Hodam</a> 
		<a>&nbsp;|| &nbsp;</a>
		<a href="<?php echo base_url('hijaiyah/kolom'); ?>" >Hijaiyah Kolom</a> 
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>

</div>

</body>
</html>