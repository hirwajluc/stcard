<?php
$bg = isset($background) && strlen($background)>3?"background-image:url(".base_url('assets/images/'.$background).")":"";
$capital =$capitalize?"uppercase":"unset";
?>
<style>
	html, body {
		margin: 0;
		padding: 0;
	}

	h4 {
		font-size: 11pt;
		margin: 2px 0;
		padding: 3px 5px;
	}

	.page-break {
		height: 0;
		page-break-after: always;
		margin: 0;
		border-top: none;
	}

	.header{
		position: relative;float: left;width:340px;margin: 10px 10px 5px 0;display:inline-block;color:<?= $header_color; ?>
	}
	.footer{
		color:<?= $footer_color; ?>
	}
	.body{
		margin-left: 35%; margin-top: 20%; display: inline-block;width: 100%;text-transform: <?=$capital;?>
	}
</style>
<?php
$CI =& get_instance();
foreach ($students as $student) {
	if (@getimagesize(base_url('assets/images/profile/' . $student['regno'] . '.jpg'))) {
		?>
		<div
			style="width: 100%;height:100%;float:left;margin:0;position:relative;<?= $bg; ?>;background-size: 100% 100%;background-repeat: no-repeat;">

			<div class="body">
				<img src="<?= $CI->qrcodeGenerator($student['regno']); ?>"
					 style="float:left;margin-left: 50px; margin-top: 130px; border-radius: 10px;border: 3px solid <?= $main_color; ?>;margin-left: 20px">
			</div>

		</div>
		<div class="page-break"></div>
		<?php
	}else{
		continue;
	}
}
?>
