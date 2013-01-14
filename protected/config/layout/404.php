<?php
# Page Load Test Script by Webune.com
# http://www.webune.com/forums/
$load_time = microtime();
$load_time = explode(' ',$load_time);
$load_time = $load_time[1] + $load_time[0];
$page_start = $load_time;

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<title><?php echo $appname;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo $appdesc;?>" />
<meta name="author" content="<?php echo $appname;?>" />
	
	<?php
	// Calling Bootstrap Css
	echo $css ['0'];
	
	?>
	


</head>


<body>

	<center>
		<div class="row-fluid">
			<div class="box span12">
				<div class="box-content">
					<p class="center">
						<img src=<?php echo $image;?>/404.png />
					
					
					<h1>Chimpu cannot find the requested page</h1>
					<a href="./" class="btn btn-large btn-primary"><i
						class="icon-chevron-left icon-white"></i>Go Back To <?php echo $appname;?></a>
					</h2>
					</p>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</center>