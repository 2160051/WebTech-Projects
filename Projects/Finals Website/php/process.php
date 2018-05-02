<html>
<head>
    <head>
        <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="quizStyle.css" rel="stylesheet" type="text/css"/>
    </head>
<?php 

	$fid = $_GET['id'];

?>
<body>

<div id="wrapper">

<center>Your Score</font></center>
<br />
<br />

<?php
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$score = 0;
	
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
	echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/3</font></center>";
	
?>




</div><!--- end of wrapper div --->

</body>
</html>