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
					<th>Kitab</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/AqidatulAwwam'); ?>">Aqidatul Awwam</a></td>
					<td>Aqidatul Awwam</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/JauharTauhid'); ?>">Jauhar Tauhid</a></td>
					<td>Jauhar Tauhid</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/AkhlaqulLibanin'); ?>">Akhlaqul Libanin</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/FathulBari'); ?>">Fathul Bari</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/SubulusSalam'); ?>">Subulus Salam</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/BulughulMaram'); ?>">Bulughul Maram</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/KifayatulAkhyar'); ?>">Kifayatul Akhyar</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/SafinatunNajah'); ?>">Safinatun Najah</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/AlUshulMinIlmilUshul'); ?>">Al-Ushul min Ilmil Ushul</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/ArRahbiyah'); ?>">Ar-Rahbiyah</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/KhairulHadits'); ?>">Khairul Hadits</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/Syansury'); ?>">Syansury</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/TuhfatulAthfal'); ?>">Tuhfatul Athfal</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/HidayatulMustafid'); ?>">Hidayatul Mustafid</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/Bina'); ?>">Bina</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/Kailany'); ?>">Kailany</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/FathulKhobirulLatif'); ?>">Fathul Khobirul Latif</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/NadhmMaqshud'); ?>">Nadhm Maqshud</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/LamiyatulAfal'); ?>">Lamiyatul Af’al</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/Jurumiyah'); ?>">Jurumiyah</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/Imrithi'); ?>">Imrithi</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/Alfiyah'); ?>">Alfiyah</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td> <a href="<?php echo base_url('kitab_kuning/shorof'); ?>">Mukhtashor Syafi</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/Fatahiyyah'); ?>">Fatahiyyah (Bayan)</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/Samarqandy'); ?>">Samarqandy (Bayan)</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/JauharMaknun'); ?>">Jauhar Maknun (3 Fan)</a></td>
					<td>xxxxx</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url('kitab_kuning/UqudulJuman'); ?>">Uqudul Juman (3 Fan)</a></td>
					<td>xxxxx</td>
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