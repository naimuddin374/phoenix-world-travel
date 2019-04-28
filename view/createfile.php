<?php
function makefiles($name, $data){
		$fh = fopen($name, "w");
		fwrite($fh, $data);
		fclose($fh);
	}
?>
