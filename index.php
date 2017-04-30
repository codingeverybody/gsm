<!doctype html>
<html>
<head>
	<title>웹수업</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1><a href="index.html">웹수업</a></h1>
	<div id="main">
		<nav>
			<ul>
				<?php
$files = scandir('./data');
$i = 0;
while($i < count($files)){
	if($files[$i] != '.'){
		if($files[$i] != '..'){
			print("<li><a href=\"index.php?id={$files[$i]}\">{$files[$i]}</a></li>");
		}
	}
	$i = $i + 1;
}
				?>
			</ul>
		</nav>
		<div id="article">
			<h2>
				<?php
				print($_GET['id']);
				?>
			</h2>
			<script>
function toBlack(){
	document.querySelector('body').style.backgroundColor = 'black';
	document.querySelector('body').style.color = 'white';
}
				
function toWhite(){
	document.querySelector('body').style.backgroundColor = 'white';
	document.querySelector('body').style.color = 'black';
}
			</script>
<input type="button" value="black" onclick="toBlack();">
<input type="button" value="white" onclick="toWhite();">
			<?php
			$data_path = "./data/{$_GET['id']}";
			print(file_get_contents($data_path));
			?>
		</div>
	</div>
</body>
</html>