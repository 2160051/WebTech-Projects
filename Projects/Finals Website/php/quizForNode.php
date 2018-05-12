<html>
    <head>
        <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../styles/quizStyle.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
    <div id='wrapper'>
        <center><img src="../styles/pictures/ribbon.png" width="60%" alt="Ribbon"></center>
    <?php
        $counter = 0;
        $url = '../json/quizNode.json'; 
        $data = file_get_contents($url); 
        $quizQuestions = json_decode($data, true);
	   
        echo "<form action='processForNode.php?id=1' method='post' id='quizForm' id='1' class='quiz'> 
                <ol>";      
        
            foreach ($quizQuestions as $quizQuestion) {
                if($quizQuestion != null || $quizQuestion != undefined){
            echo '<li>
                    <h3>'. $quizQuestion['question']. '</h3> 
                    <div>
                        <input type="radio" name='.$counter.' id='.$counter.' value="a" />
                        <label for="answerOneA">A)'. $quizQuestion['choices'][0]. '</label>
                    </div>
        
                    <div>
                        <input type="radio" name='.$counter.' id='.$counter.' value="b" />
                        <label for="answerOneB">B)'. $quizQuestion['choices'][1]. '</label>
                    </div>
        
                    <div>
                        <input type="radio" name='.$counter.' id='.$counter.' value="c" />
                        <label for="answerOneC">C)'. $quizQuestion['choices'][2]. '</label>
                    </div>

                    <div>
                        <input type="radio" name='.$counter.' id='.$counter.' value="d" />
                        <label for="answerOneD">D)'. $quizQuestion['choices'][3].'</label>
                    </div>
                </li>';
                $counter++;
        }
    }
        echo "</ol>
                <button class='submitButton' onclick='goBack()'>Go Back</button>
                <input type='submit' value='Submit' class='submitButton' />              
             </form>";
?>
</div>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>