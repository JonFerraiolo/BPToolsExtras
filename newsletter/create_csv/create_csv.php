<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
var line = <?php echo $newline; ?>;
window.onload = function() {document.write(line);};
</script>
</head>
<body>
<?php
$users_filepath = "users.txt";
$users_file = fopen($users_filepath,"r");
//Create array of lines in users file
$users_array = file($users_filepath);
for($i=0; $i<count($users_array); $i++) {
	$line = $users_array[$i];
	$line_array = explode(":",$line);
	$email = $line_array[0];
	if(preg_match('/test/',$email)>0 || preg_match('/example/',$email)>0) {
		continue;
	}else {
		$name = $line_array[1];
		if(preg_match('/,/',$name)>0) {
			$dl = ',';
		}else {
			$dl = ' ';
		}
		$name_array = explode($dl,$name);
		$fname = $name_array[0];
		$lname = "";
		for($j=1; $j<count($name_array); $j++) {
			if($lname=="") {
				$lname = $name_array[$j];
			}else {
				$lname .= " ".$name_array[$j];
			}
		}
		$newline = $email.','.$fname;
		if($lname) {
			$newline .= ','.$lname."\n";
		}else {
			$newline .= "\n";
		}
		if($i==0) {
			file_put_contents("tools_newsletter_adds.csv",$newline);
		}else {
			file_put_contents("tools_newsletter_adds.csv",$newline,FILE_APPEND);
		}
		echo $newline."<br />";
		/*if($i==0) {
			file_put_contents("tools_newsletter_adds.txt",$newline);
		}else {
			file_put_contents("tools_newsletter_adds.txt",$newline,FILE_APPEND);
		}*/
	}
}
?>
</body>
</html>