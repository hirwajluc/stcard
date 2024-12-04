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
		margin-left: 20px; margin-top: 20%; display: inline-block;width: 100%;text-transform: <?=$capital;?>
	}
</style>
<?php
foreach ($students as $student) {
	if ($student['department']=="EEE"){
		$st_dpt="Electrical and Electronics Engineering";
	}elseif ($student['department']=="ICT"){
		$st_dpt="Information and Communication Technology";
	}

	if ($student['options']=="IT"){
		$st_opt="Information Technology";
	}elseif ($student['options']=="ETT"){
		$st_opt="Electronics and Telecommunication Technology";
	}elseif ($student['options']=="RE"){
		$st_opt="Renewable Energy Technology";
	}elseif ($student['options']=="MET"){
		$st_opt="Mechatronics Technology";
	}

	$st_program="Advanced Diploma";
	$st_expiry="Apr, 2023";
	$st_issued="Feb, 2022";
	//echo base_url('assets/images/profile/' . $student['regno'] . '.jpg')."<br>";
	if(@getimagesize(base_url('assets/images/profile/' . $student['regno'] . '.jpg'))) {
		?>
		<div
			style="width: 100%;height:100%;float:left;margin:0;position:relative;<?= $bg; ?>;background-size: 100% 100%;background-repeat: no-repeat;">
			<div class="body vertical-center">
				<img src="<?= base_url('assets/images/profile/' . $student['regno'] . '.jpg'); ?>"
					 style="float:left;width: 150px;height: 150px; margin-top: 10px; border-radius: 10px;border: 3px solid <?= $main_color; ?>;margin-left: 20px">
				<div style="float:left;width: 370px;margin-top: 10px">
					<div style="margin-left: 10px">
						<h4 style="width: auto;margin: 0 auto;font-size: 10pt;"><span
								style="color: <?= $main_color; ?>">Names</span>: <?= $student['fname'] . " " . $student['lname']; ?>
						</h4>
						<h4 style="width: auto;margin: 0 auto;font-size: 10pt;"><span
								style="color: <?= $main_color; ?>">Reg No</span>: <?= $student['regno']; ?></h4>
						<h4 style="width: auto;margin: 0 auto;font-size: 10pt;"><span
								style="color: <?= $main_color; ?>">Option</span>: <?= $st_opt; ?></h4>
						<h4 style="width: auto;margin: 0 auto;font-size: 10pt;"><span
								style="color: <?= $main_color; ?>">Department</span>: <?= $st_dpt; ?></h4>
						<h4 style="width: auto;margin: 0 auto;font-size: 10pt;"><span
								style="color: <?= $main_color; ?>">Year of study</span>: <?= $student['year']; ?></h4>
						<h4 style="width: auto;margin: 0 auto;font-size: 10pt;"><span
								style="color: <?= $main_color; ?>">Program</span>: <?= $st_program; ?></h4>
						<h4 style="width: auto;margin: 25px auto auto -50px;font-size: 10pt;"><span
								style="color: <?= $main_color; ?>">Issued On</span>: <?= $st_issued; ?> &nbsp;&nbsp;&nbsp;<span
								style="color: <?= $main_color; ?>">Expiry</span>: <?= $st_expiry; ?></h4>
					</div>
				</div>
			</div>

		</div>
		<div class="page-break"></div>
		<?php
	}else{
		continue;
	}
}
?>
