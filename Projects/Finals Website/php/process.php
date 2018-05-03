<html>
<head>
    <head>
        <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../styles/quizStyle.css" rel="stylesheet" type="text/css"/>
    </head>
<body>

<div id="wrapper">
<br />
<br />

<?php
	$url = '../json/questions.json'; 
    $data = file_get_contents($url); 
    $quizQuestions = json_decode($data, true);
	$counter = 0;
	$score = 0;
	
	foreach ($quizQuestions as $quizQuestion) {
		$studentAnswer = $_POST[$counter];		

		if($studentAnswer == $quizQuestion['answer']){
			$score++;
		}
		$counter++;
	}
	echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/$counter <br></font></center>";
	
?>




</div>
</body>
</html>