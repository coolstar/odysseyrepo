<?php
	$release = file_get_contents("Release-template");
	$release .= "Date: ".date("D, j M Y H:i:s O")."\n";
    $release .= "MD5Sum:\n";
    foreach (["Packages", "Packages.bz2", "Packages.xz", "Packages.zst"] as $i){
        $release .= " ".hash_file("md5", $i)."         ".filesize($i)." ".$i."\n";
    }
    $release .= "SHA1:\n";
    foreach (["Packages", "Packages.bz2", "Packages.xz", "Packages.zst"] as $i){
        $release .= " ".hash_file("sha1", $i)."         ".filesize($i)." ".$i."\n";
    }
	$release .= "SHA256:\n";
	foreach (["Packages", "Packages.bz2", "Packages.xz", "Packages.zst"] as $i){
		$release .= " ".hash_file("sha256", $i)."         ".filesize($i)." ".$i."\n";
	}
    $release .= "SHA512:\n";
    foreach (["Packages", "Packages.bz2", "Packages.xz", "Packages.zst"] as $i){
        $release .= " ".hash_file("sha512", $i)."         ".filesize($i)." ".$i."\n";
    }
	file_put_contents("Release", $release);
?>
