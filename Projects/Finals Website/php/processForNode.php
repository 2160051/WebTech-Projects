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
	$url = '../json/quizNode.json'; 
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
	echo "<center>Your Score is <br> $score/$counter <br></center>";
	echo "<form action='process.php?id=1' method='post' id='quizForm' id='1' class='quiz'> 
                <ol>"; 
	foreach ($quizQuestions as $quizQuestion) {
            echo '<li>
                    <h3>'. $quizQuestion['question']. '</h3> 
                    <div>
                        <label for="answerOneA">A)'. $quizQuestion['choices'][0]. '</label>
                    </div>
        
                    <div>
                        <label for="answerOneB">B)'. $quizQuestion['choices'][1]. '</label>
                    </div>
        
                    <div>
                        <label for="answerOneC">C)'. $quizQuestion['choices'][2]. '</label>
                    </div>

                    <div>
                        <label for="answerOneD">D)'. $quizQuestion['choices'][3].'</label>
                    </div>
                    <h4>Answer: '. $quizQuestion['answer']. '</h4>
                    <h4>Your Answer: '. $_POST[$counter]. '</h4> 
                </li>';
                $counter++;
        }
        echo "</ol>
             </form>";
?>
</div>
</body>
</html>