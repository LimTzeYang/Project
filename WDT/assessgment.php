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
        

        .topback{
            color: rgb(255, 255, 255);
            background-color: #FF683C;
            text-align: center;
            margin: 0;
            padding: 20px;
            z-index: 0;
            }

        .title{
        font-size: 50px;
        color: rgb(199, 74, 11);
        text-align: center;
        padding: 20px;
        text-decoration: underline;
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
            <h1 style="color: white; text-align: center; font-size: 55px;">Assessments</h1>
                <div class="edit-profile" style="display: flex; align-items: center;">
                    
                    <img src="—Pngtree—settings glyph black icon_3755352.png" weight="90" height="90" display="flex" alt="setting">
                    <h2>Lee</h2>
                </div>
            </div>
            <div class="go back">
                <a href="javascript:history.back(-1)" class="button1">< BACK</a>
            </div>
            <h1 class="title">Quizzes</h1>
        
    
    <center>

<?php

$localhost = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'poodle';

// Check connection
$conn = mysqli_connect($localhost, $user, $passwd, $dbname);

if (mysqli_connect_errno()) {
    die('<script>alert("Connection failed: Please check your SQL connection!");</script>');
}

$sql = "SELECT QuizID FROM Quizdb group by QuizID";

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) <= 0)
{
echo "<script>alert('No Result!');</script>";
}
echo "<table width='30%' bgcolor='grey' align='center';>";
echo "<tr bgcolor='#ff6600'>";
echo "<th style='color:White; width: 200px; height: 30px; text-align:center;'>Quiz Name</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) {

    echo "<tr bgcolor='white'>";
    echo "<td><a href='attempQuiz.php?quizID=" . $row['QuizID'] . "'>" . $row['QuizID'] . "</a></td>";
    echo "</tr>";
}

echo "</table>"; 



$conn->close();

?>     

    </center>
   
</body>
</html>
