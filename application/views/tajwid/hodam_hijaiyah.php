<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css.css'); ?>">
<body>

<div id="container">
	<h1>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>

	<div id="body">
		<table width="100%" >
			<thead>
				<tr>
					<th>hodam</th>
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
						<td align="right" >
							<a href="<?php echo base_url('Al-Quran/'.$value->no_arab); ?>">hijaiyah : <?php echo $value->isi; ?></a> <br />
							<div style="text-align:left" >
							<?php echo $value->keterangan; ?><br />
							<a href="<?php echo base_url('malaikat/'.encrypt_url($value->hodam)); ?>"><?php echo $value->hodam; ?></a> <br />
							<?php $list = array(); ?>
							<?php $list = explode(PHP_EOL, $value->anak_buah); ?>
							<ul>
								<?php if (!empty($list)) : ?>
									<?php foreach ($list as $indl => $valuel) : ?>
										<li><a href="<?php echo base_url('malaikat/'.encrypt_url($valuel)); ?>"><?php echo $valuel; ?></a></li>
									<?php endforeach;?>
								<?php endif;?>
							</ul>
							</div>
						</td>
						<td><?php echo $value->no_arab; ?></td>
					</tr>
				<?php endforeach;?>
			</thead>
		</table>
	</div>

	<p class="footer">
		<a href="<?php echo base_url('hijaiyah'); ?>" >Kembali</a>
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>

</div>

</body>
</html>