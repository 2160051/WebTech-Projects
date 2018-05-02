<!DOCTYPE html>
    <head>
        <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../styles/quizStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
    <div id='wrapper'>
        <center><img src="../styles/pictures/ribbon.png" width="60%" alt="Ribbon"></center>
    <?php
        $counter = 0;
        $url = '../json/questions.json'; 
        $data = file_get_contents($url); 
        $quizQuestions = json_decode($data, true);
	   
        echo "<form action='process.php?id=1' method='post' id='quizForm' id='1' class='quiz'> 
                <ol>";      
        foreach ($quizQuestions as $quizQuestion) {
            echo '<li>
                    <h3>'. $quizQuestion['question']. '</h3> 
                    <div>
                        <input type="radio" name="answerOne" id="answerOne" value="a" />
                        <label for="answerOneA">A)'. $quizQuestion['choices'][0]. '</label>
                    </div>
        
                    <div>
                        <input type="radio" name="answerOne" id="answerOne" value="b" />
                        <label for="answerOneB">B)'. $quizQuestion['choices'][1]. '</label>
                    </div>
        
                    <div>
                        <input type="radio" name="answerOne" id="answerOne" value="c" />
                        <label for="answerOneC">C)'. $quizQuestion['choices'][2]. '</label>
                    </div>

                    <div>
                        <input type="radio" name="answerOne" id="answerOne" value="d" />
                        <label for="answerOneD">D)'. $quizQuestion['choices'][3].'</label>
                    </div>
                </li>';
        }
        echo "</ol>
                <input type='submit' value='Submit Quiz' class='submitButton'/>
             </form>";
?>
</div>