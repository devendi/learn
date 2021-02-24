<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="icon" href="<?php echo base_url('assets/favicon.ico'); ?>" type="image/x-icon"/>
	<link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico'); ?>" type="image/x-icon"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
</head>
<body>

<div id="container">
	<h1 onclick="play()" >بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>

	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<div id="body">
	
		<div class="sectionArea">
			<?php foreach ($row as $ind => $value) : ?>
				<a href="<?php echo base_url('hijaiyah/kolom?q='.$value->no); ?>"><?php echo $value->isi; ?></a>
			<?php endforeach;?>
		</div>
		<div id="isiancontent" >
		</div>
		
	</div>

	<p class="footer">
		<a href="<?php echo base_url(); ?>" >Kembali</a>
		<a>&nbsp;|| &nbsp;</a>
		<a href="<?php echo base_url('hijaiyah/hodam'); ?>" >Hodam</a> 
		<a>&nbsp;|| &nbsp;</a>
		<a href="<?php echo base_url('hijaiyah'); ?>" >Hijaiyah Baris</a> 
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>

</div>

<audio id="audio" src="<?php echo base_url('assets/murotal/MisharyRashid/001001.mp3'); ?>"></audio>

<script>

	function play() {
		var audio = document.getElementById("audio");
		audio.play();
	}
$( document ).ready(function() {

	
	function rubahKontentFungsi(){

		var urlKontent = '<?php echo base_url()?>'+'dictionary';
		<?php $get_get = $_GET['q']; ?>
		<?php if(!empty($get_get)){ ?>
			var variablesend = '<?php echo $get_get; ?>';
		<?php }else{ ?>
			var variablesend = '1';
		<?php } ?>
		
		$.ajax({
		
			url: urlKontent,
			type: 'post',
			data: {getdata : variablesend},
			cache: false,
			dataType: 'html',
			beforeSend: function() {
				$('body').css('cursor','wait');
			},
			complete: function() {	
				$('body').css('cursor','default');
			},
			success: function(output) {
					//$('#isiancontent').html(output['error']).css({'font-weight':'bold','margin':'0px 0px 5px 15px'});
					$('#isiancontent').html(output);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				$('body').css('cursor','default');
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
			
		});
	};

	rubahKontentFungsi();
	/*
	$(".submitemailForm").click( function() 
	{
		rubahKontentFungsi();

	});
	*/
});
</script>
</body>
</html>