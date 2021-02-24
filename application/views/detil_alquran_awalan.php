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
	<h1>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>

	<div id="body">
		<table width="100%" >
			<thead>
				<tr>
					<th colspan="2" >Surat Al Baqarah</th>
				</tr>
				<tr>
					<th style="text-align:left"  >Awalan Surat</th>
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
							<?php echo $value->terjemahan_quran_ypip_org_awal; ?>
						</td>
						<td align="right" >
							<?php echo $value->isi_ayat_awal; ?>
						</td>
						<td><?php echo $value->no_ayat_arab; ?></td>
					</tr>
				<?php endforeach;?>
			</thead>
		</table>
	</div>

	<p class="footer">
		<a href="<?php echo base_url('Al-Quran'); ?>" >Kembali</a>
		<a>&nbsp;|| &nbsp;</a>
		<a href="<?php echo base_url('Al-Quran/'.$surah); ?>" >per Surah</a> 
		<a>&nbsp;|| &nbsp;</a>
		<a href="<?php echo base_url('murokkab/Al-Quran/'.$surah); ?>" >Murokkab</a> 
		<a>&nbsp;|| &nbsp;</a>
		<a href="<?php echo base_url('surah/Al-Quran/'.$next_link); ?>" ><?php echo $next_link; ?></a> 
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>
</div>

</body>
</html>