<?php
		$image = imagecreate(125, 40);		
		$fondo = imagecolorallocate($image, 75, 200, 150);
		$cblanco = imagecolorallocate($image, 0, 0, 0);
		$random = rand(100000,999999);
		imagefill($image, 80, 0, $fondo);
		imagestring($image, 150, 15, 10, $random, $cblanco);
		header('content-type: image/png');
		imagepng($image);
?>