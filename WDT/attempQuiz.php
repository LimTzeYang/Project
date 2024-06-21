<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Menu Title</title>
    <link rel="icon" href="TITLE_LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="poodle_styles.css">
    <style>
        .button1 {
            color: #ff6600;
            padding: 15px 15px; 
            text-decoration: underline; 
            font-size: 18px; 
            font-weight: bold;
        }
        .button2 {
            background-color: #ff6600;
            color: white; 
            padding: 10px 20px; 
            text-decoration: none; 
            font-size: 18px; 
            cursor: pointer; 
            border-radius: 5px; 
            font-weight: bold;
            margin: 20px
        }
    </style>

    <style type="text/css">
        h1{
        font-size: 60px;
        color: rgb(173, 37, 3);
        text-align: center;
        text-decoration: underline;
        padding: 20px;
        }
    </style> 
</head>

<body class="sub-menu-page">
    <div>
        <div class="left-menu">
            <div class="logo">
                <img src="Poodle logo.png" alt="">
            </div>
            <div>
                <ul>
                    <li><a href="sub_menu_template.php">Subject Enrollment</a></li>
                    <li><a href="S_resultanalysis.php">Results Analysis</a></li>
                    <li><a href="SMP.html">Back to main menu</a></li>
                </ul>
            </div>
        </div>

        <div class="content-container">
            <div class="topbar" style="display: flex;">
            <h1 style="color: white; text-align: center; font-size: 55px;">Results</h1>
                <div class="edit-profile" style="display: flex; align-items: center;">
                    
                    <img src="—Pngtree—settings glyph black icon_3755352.png" weight="90" height="90" display="flex" alt="setting">
                    <h2>Lee</h2>
                </div>
            </div>
            <div class="go back">
               <a href="javascript:history.back(-1)" class="button1">< BACK</a>
            </div>


    <center>

<?php

$localhost = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'quizdb';

// Check connection
$conn = mysqli_connect($localhost, $user, $passwd, $dbname);

if (mysqli_connect_errno()) {
    die('<script>alert("Connection failed: Please check your SQL connection!");</script>');
}

echo "<br><br>";
echo "<table width='100%' align='center';><tr>";
echo "<th style='color:black; font-weight: bold; width: 50px; height: 30px; text-align:center;'>Number</th>";
echo "<th style='color:black; font-weight: bold; width: 100px; height: 30px; text-align:center;'>Question</th>";
echo "<th style='color:black; font-weight: bold; width: 100px; height: 30px; text-align:center;'>Answer</th>";
echo "<hr></tr></table>";

$sql = "SELECT * FROM quizdb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form action='addAssessnment.php' method='post'>";
    while ($row = $result->fetch_assoc()) {
        echo "<table width='100%' align='center'>";
        echo "<tr>";
        echo "<td style='width: 50px; height: 30px; text-align:center;'>" . $row['QuizID'] . "</td>";
        echo "<td style='width: 100px; height: 30px; text-align:center;'>" . $row['Question'] . "</td>";
        echo "<td style='width: 100px; height: 30px; text-align:center;'>";
        echo "<input type='hidden' name='QuizID' value='" . $row['QuizID'] . "'>";
        echo "<input type='radio' name='answer_" . $row['QuizID'] . "' value='Correct'> Correct <br>";
        echo "<input type='radio' name='answer_" . $row['QuizID'] . "' value='Wrong'> Wrong <br>";    
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    }
    echo "<br><br><br><br>";
    echo "<a href='addAssessnment.php' class='button2' onclick='document.forms[0].submit(); return false;'>Submit Answer</a>";
    echo "</form>";
} else {
    echo "Quiz Database Error";
}


$conn->close();


?>

<br><br><br>
        <!-- <a href="addAssessnment.php" class="button2">Submit Answer</a> -->
        <a href="javascript:history.back()" class="button2">Exit</a>
    </center>
   
</body>
</html>
