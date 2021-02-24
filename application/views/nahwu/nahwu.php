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
        - Harf adalah bagian dari kata-kata.  <br />
        - Sedangkang kata adalah kumpulan dari huruf-huruf <br />
        - Huruf dalam bahasa arab ada 28 atau di sebut juga <a href="<?php echo base_url('hijaiyah'); ?>">hijaiyah (alphabet)</a> <br />
        - pembagian huruf
            1 Huruf Hijaiy / huruf Mabani
            2 Huruf Maani

	</div>

	<p class="footer">
		<a href="<?php echo base_url(); ?>" >Kembali</a>
        <a>&nbsp;|| &nbsp;</a>
        
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>

</div>

</body>
</html>