<center>
	<footer>
	
<?php

$chimpu->BirthBy();?><br /> <a target="_blank" rel="license"
			href="http://creativecommons.org/licenses/by-sa/2.5/in/deed.en_US"><img
			alt="Creative Commons License"
			src="http://i.creativecommons.org/l/by-sa/2.5/in/80x15.png" /></a>
			
<br/>			
 <?php  
$load_time = microtime();
$load_time = explode(' ',$load_time);
$load_time = $load_time[1] + $load_time[0];
$page_end = $load_time;
$final_time = ($page_end - $page_start);
$page_load_time = number_format($final_time, 4, '.', '');
echo("Page generated in " . $page_load_time . " seconds");

?>
			
	</footer>
</center>
</body>
</html>

<?php
echo $js['16']; //jquery1.7.min.js
echo $js['34'];//Chimpu js

 
?> 
