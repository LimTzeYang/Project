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
        
        .subjectbutton {
            width: 200px; 
            height: 200px; 
            font-size: 16px; 
            margin: 20px;

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
        color: rgb(199, 74, 11);
        text-align: center;
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
                <h1 style="color: white; text-align: center; font-size: 55px;">Student Page</h1>
                <div class="edit-profile" style="display: flex; align-items: center;">
                    <img src="—Pngtree—settings glyph black icon_3755352.png" weight="90" height="90" display="flex" alt="setting">
                    <h2>Lee</h2>
                </div>
            </div>
        
                <h2 class="title" class="topback">Subjects currently enrolled:</h2>
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


$sql = "SELECT studentdb.SubjectID, subjectdb.SubjectName FROM studentdb INNER JOIN subjectdb ON studentdb.SubjectID = subjectdb.subjectID;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $subjectName = $row['SubjectName'];
        echo "<a href='ask.php?subject=$subjectName'><button class='subjectbutton'>$subjectName</button></a>";
    }
} else {
    echo "No subjects found.";
}



$conn->close();


?>
<br><br><br>
<a href="add.html" class="button1">Add Subjects</a>
</center>


            </div>
        </div>
    </div>
</body>
</html>