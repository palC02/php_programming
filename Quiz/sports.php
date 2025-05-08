<?php
$score = 0;
$correct_answers = array("q1" => "a", "q2" => "a", "q3" => "b", "q4" => "c", "q5" => "a");
$feedback = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($correct_answers as $question => $correct_answer) {
        if (isset($_POST[$question])) {
            if ($_POST[$question] == $correct_answer) {
                $score += 3;
                $feedback[$question] = "Correct";
            } else {
                $score -= 2;
                $feedback[$question] = "Wrong";
            }
        } else {
            $feedback[$question] = "No answer";
        }
    }
    if ($score==0){
        $score=0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science and Tecnolohy Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .quiz-container {
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .question {
            margin-bottom: 15px;
        }
        .options {
            list-style-type: none;
            padding-left: 0;
        }
        .options li {
            margin-bottom: 10px;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
        .score {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
        .timer {
            font-size: 20px;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
        .blink {
            color: red;
            animation: blink 1s step-start infinite;
        }
        @keyframes blink {
            50% { opacity: 0; }
        }
    </style>
</head>
<body>

<div class="quiz-container">
    <h1>Sports Quiz</h1>
    <div style="translate: 850px;" id="timer" class="timer">Time left: <span id="timeLeft">15</span></div>
    <form method="post">
        <div class="question">
            <p>1. Who is the current Captain of India in ODIs ?</p>
            <ul class="options">
                <li><input type="radio" name="q1" value="a" <?php if (isset($_POST['q1']) && $_POST['q1'] == 'a') echo 'checked'; ?>> Rohit Sharma</li>
                <li><input type="radio" name="q1" value="b" <?php if (isset($_POST['q1']) && $_POST['q1'] == 'b') echo 'checked'; ?>> Virat Kohli</li>
                <li><input type="radio" name="q1" value="c" <?php if (isset($_POST['q1']) && $_POST['q1'] == 'c') echo 'checked'; ?>> M.S Dhoni</li>
            </ul>
        </div>

        <div class="question">
            <p>2. Which team won the Champions Trophy 2025 ?</p>
            <ul class="options">
                <li><input type="radio" name="q2" value="a" <?php if (isset($_POST['q2']) && $_POST['q2'] == 'a') echo 'checked'; ?>> India </li>
                <li><input type="radio" name="q2" value="b" <?php if (isset($_POST['q2']) && $_POST['q2'] == 'b') echo 'checked'; ?>> New Zealand </li>
                <li><input type="radio" name="q2" value="c" <?php if (isset($_POST['q2']) && $_POST['q2'] == 'c') echo 'checked'; ?>> Australia </li>
            </ul>
        </div>

        <div class="question">
            <p>3. Which team were the champions in IPL 2024 ?</p>
            <ul class="options">s
                <li><input type="radio" name="q3" value="a" <?php if (isset($_POST['q3']) && $_POST['q3'] == 'a') echo 'checked'; ?>>Rajasthan Royals</li>
                <li><input type="radio" name="q3" value="b" <?php if (isset($_POST['q3']) && $_POST['q3'] == 'b') echo 'checked'; ?>> Kolkata Knight Riders</li>
                <li><input type="radio" name="q3" value="c" <?php if (isset($_POST['q3']) && $_POST['q3'] == 'c') echo 'checked'; ?>> Mumbai Indians </li>
            </ul>
        </div>

        <div class="question">
            <p>4. Which team won the FIFA World Cup 2022 ?</p>
            <ul class="options">
                <li><input type="radio" name="q4" value="a" <?php if (isset($_POST['q4']) && $_POST['q4'] == 'a') echo 'checked'; ?>>France</li>
                <li><input type="radio" name="q4" value="b" <?php if (isset($_POST['q4']) && $_POST['q4'] == 'b') echo 'checked'; ?>>Belgium</li>
                <li><input type="radio" name="q4" value="c" <?php if (isset($_POST['q4']) && $_POST['q4'] == 'c') echo 'checked'; ?>>Argentina</li>
            </ul>
        </div>

        <div class="question">
            <p>5. Which team won the UEFA Champions League 2024 ?</p>
            <ul class="options">
                <li><input type="radio" name="q5" value="a" <?php if (isset($_POST['q5']) && $_POST['q5'] == 'a') echo 'checked'; ?>> Real Madrid </li>
                <li><input type="radio" name="q5" value="b" <?php if (isset($_POST['q5']) && $_POST['q5'] == 'b') echo 'checked'; ?>> Liverpool </li>
                <li><input type="radio" name="q5" value="c" <?php if (isset($_POST['q5']) && $_POST['q5'] == 'c') echo 'checked'; ?>> Arsenal </li>
            </ul>
        </div>

        <div class="question">
            <button type="submit" class="submit-btn">Submit</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='score'>";
        echo "Your score is: " . $score . " out of 15";
        echo "</div>";

        echo "<div class='score'>";
        foreach ($feedback as $question => $result) {
            echo "<p>Question $question: $result</p>";
        }

        echo "</div>";

        echo "<script type='text/javascript'>
            alert('Your score is: $score out of 15. Check the answers on the page.');
        </script>";
    }
    ?>

</div>

<script>
    let timeLeft = 900; 
    let timerElement = document.getElementById('timeLeft');
    
    function formatTime(seconds) {
        let minutes = Math.floor(seconds / 60);
        let remainingSeconds = seconds % 60;
        return minutes + ':' + (remainingSeconds < 10 ? '0' : '') + remainingSeconds;
    }

    let timerInterval = setInterval(function() {
        timeLeft--;

        timerElement.textContent = formatTime(timeLeft);

        if (timeLeft <= 120) { 
            timerElement.classList.add('blink');
        }

        if (timeLeft <= 0) {
            clearInterval(timerInterval);
            alert('Time is up! Your final score is: <?php echo $score; ?>');
            document.querySelector('form').innerHTML = "<h2>Time is up!</h2>";
            document.querySelector('#timer').innerHTML = "<h2>Time is up!</h2>";
        }
    }, 1000);
</script>

</body>
</html>
