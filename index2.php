<?php
require_once("data.php");
//echo '<pre>';
//print_r($beatles);
function printBeatles($i, $beatles){?>
    <div>
    <h3><a href="detail.php?index=<?= $i ?>"><?= $beatles[$i]['firstname'].' '.$beatles[$i]['lastname'].' ('.$beatles[$i]['age'].')' ?></a></h3>
    <p><?= $beatles[$i]['short_bio'] ?></p>
    <ul>
        <?php
        foreach($beatles[$i]['instruments'] as $instrument) echo '<li>'.$instrument.'</li>';
        /*
        for($i=0;$i<count($beatles[0]['instruments']);$i++){
         echo '<li>'.$beatles[0]['instruments'][$i].'</li>';
        } */
        ?>
    </ul>
    <a href="detail.php?index=<?= $i ?>">Click here to see more details</a>
    </div>
<?php } ?>


<html>
	<head>
		<title>This is the beatles</title>
	</head>
	<body>
        <a href="index.php">Go back</a>
		<h1>The beatles</h1>
		<?php for($i=0;$i<count($beatles);$i++){ printBeatles($i, $beatles); }?>


	</body>
</html>
