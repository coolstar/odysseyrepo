<?php
	$release = file_get_contents("Release-template");
	$release .= "Date: ".date("D, j M Y H:i:s O")."\n";
	$release .= "SHA256:\n";
	foreach (["Packages", "Packages.bz2", "Packages.xz", "Packages.zst"] as $i){
		$release .= " ".hash_file("sha256", $i)." ".filesize($i)." ".$i."\n";
	}
	file_put_contents("Release", $release);
?>
