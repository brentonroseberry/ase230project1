<?php
$i=$_GET['index'];

require_once("data.php");
//echo '<pre>';
//print_r($beatles);
?>
<html>
	<head>
	</head>
	<body>
		<a href="index2.php">Go back</a>
		<h1><?= $beatles[$i]['firstname'].' '.$beatles[$i]['lastname'] ?> (<?= $beatles[$i]['age'] ?>)</h1>
		<img width="300" src="<?= $beatles[$i]['picture'] ?>" />
		<h3>Bio</h3>
		<p><?= $beatles[$i]['full_bio'] ?></p>
		<h3>Instruments played</h3>
		<ul>
			<?php
				foreach($beatles[$i]['instruments'] as $instrument) echo '<li>'.$instrument.'</li>';
			?>
		</ul>
	</body>
</html>