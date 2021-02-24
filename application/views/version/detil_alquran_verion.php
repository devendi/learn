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
					<th colspan="2" >Surat <?php echo $rows[0]->title_arab; ?> </th>
				</tr>
				<tr>
					<th>Terjemahan</th>
					<th>Surat</th>
					<th style="width:5px" >No</th>
				</tr>
			</thead>
			<thead>
				<?php foreach ($rows as $ind => $value) : ?>
					<?php if((($ind+1) % 2) == 0) { ?>
						<tr style="background:#f5f5f5" >
					<?php } else { ?>
						<tr>
					<?php } ?>
						<td><?php echo $value->terjemahan; ?></td>
						<td align="right" ><?php echo $value->akhiran; ?><?php echo $value->isi_ayat; ?><?php echo $value->awalan; ?></td>
						<td><?php echo $value->no_ayat_arab; ?></td>
					</tr>
				<?php endforeach;?>
			</thead>
		</table>
	</div>

	<p class="footer">
		<a href="<?php echo base_url('version_detil/Al-Quran/'.$versi); ?>" >Kembali</a>
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>
</div>

</body>
</html>