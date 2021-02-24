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
        
        <p>Makna Tasrif</p>
        -> menurut lughot (etimologi) berarti mengubah <br />
        -> menurut istilah adalah <br />
        <p>Arti Tasrif</p>
        -> Menurut lughot (bahasa) adalah <br />
        -> Menurut istilah Ulama ahli sharaf adalah <br />
        <p>Faidah perubahan</p>
        1 fi'il madli -> sudah <br />
        2 fi'il mudlari -> sedang/akan <br />
        3 masdar -> kata benda<br /> 
        4 isim fa'il -> subyek<br />
        5 isim maf'ul -> object<br />
        6 fi'il amar -> perintah<br />
        7 fi'il nahi -> larangan<br />
        8 isim makan -> keterangan tempat<br />
        9 isim zaman -> keterangan waktu<br />
        10 isim alat -> alat penolong<br /><br /><br />

        <strong>Fi'il</strong>
        <p>Pembagian Fi'il</p>
        1. Fi'il Stulatsi (huruf asal 3) <br />
            &nbsp;&nbsp;&nbsp;Stulatsi Mujarrad (kosong dari tambahan huruf) <br />
            &nbsp;&nbsp;&nbsp;Stulatsi Mazied (tambahan satu, dua atau tiga huruf) <br />
        2. Fi'il Ruba'i (huruf asal 4)<br />
        <p>Bina (bentuk) Fi'il</p>
        1. Bina Salim (selamat dari huruf 'illat)<br />
        2. Bina Ghair Salim (yang berhuruf 'illat)<br />
	</div>

	<p class="footer">
		<a href="<?php echo base_url(); ?>" >Kembali</a>
        <a>&nbsp;|| &nbsp;</a>
        
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>

</div>

</body>
</html>