<?php
$files = scandir('./data');
$i = 0;
while($i < count($files)){
	if($files[$i] != '.'){
		if($files[$i] != '..'){
			print("<li>{$files[$i]}</li>");
		}
	}
	$i = $i + 1;
}